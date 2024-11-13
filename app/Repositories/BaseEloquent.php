<?php

namespace App\Repositories;

use App\config\Constant;
use App\Models\LeadAssignedLog;
use App\Models\UserDealerMapping;
use App\Response\BaseRepositoryResponse;
use App\Utilities\Utilities;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use app\models;
use Illuminate\Support\Facades\Log;
use PHPUnit\Event\Tracer\Tracer;

abstract class BaseEloquent
{
    protected $model;
    protected $whereData = array();
    protected $query;
    protected $data;
    protected $total;
    protected $permissions = [];
    protected $modelName = '';
    protected $pageSize = '';
    protected $skip = '';
    protected $orderBy = '';
    protected $orderType = '';
    protected $pageIndex = '';
    protected $relatedusersIDs = NULL;
    protected $baseWith = [
        'createdBy',
        'updatedBy',
        'deletedBy',
    ];

    public function GetAll(Request $request)
    {

        $start = $request->input('start');
        $length = $request->input('length');
        $searchValue = $request->input('search.value');

        // Start with a base query
        $this->query = $this->query;



        // Apply filters if any
        $filters = $request->query('filters', ['name','email']);
        if (!empty($filters)) {
            foreach ($filters as $key => $value) {
                $this->query->where($key, 'like', "%$value%");
            }
        }

        // Sorting
        $this->orderBy = $request->query('orderBy', 'id'); // Default order by 'id'
        $this->orderType = $request->query('orderType', 'asc'); // Default order type 'asc'
        $this->query->orderBy($this->orderBy, $this->orderType);

        // Pagination
        $this->pageSize = (int)$request->query('pageSize', 5); // Default page size 10
        $this->pageIndex = (int)$request->query('pageIndex', 1); // Default page index 1

        // Calculate offset
        $offset = ($this->pageIndex - 1) * $this->pageSize;

        // Fetch paginated results
        $result = $this->query->skip($offset)->take($this->pageSize)->get()->toArray();
        Log::info("request");
        Log::info($request);

        // Get the total count for pagination
        $total = $this->query->count();

        // Prepare paginated response
        return [
            'data' => $result,
            'total' => $total,
            'pageIndex' => $this->pageIndex,
            'pageSize' => $this->pageSize
        ];
    }

    public function GetById($id) {}
    public function Store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                $this->model->Rules($request),
            );

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $this->model->create($request->all());
            return redirect()->route('users');
        } catch (Exception $e) {
            return 'error';
        }
    }

    public function Update(Request $request) {}

    public function Delete(Request $request, $id) {}

    public function PatchDisableEnable(Request $request) {}

    public function getRecordType($value) {}

    public function Message($message) {}

    public function FindByColumn($column, $value) {}

    protected function SetPaginationDetails(Request $request) {}

    protected function ValidateRequest(Request $request) {}

    public function capitalizeArrayValues($array) {}

    protected function setDateToFromInWhereClause(Request $request) {}

    protected function setMonthYearInWhereClause(Request $request) {}

    public function GetAllRelatedUsers(Request $request) {}

    public function GetAssignedLeads(Request $request) {}
}
