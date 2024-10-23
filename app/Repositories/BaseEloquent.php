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
        
        $this->query = $this->query->get();
        $code = Constant::HTTP_OK;
        $data_result = new BaseRepositoryResponse();
        $data_result->setValues($this->capitalizeArrayValues($this->query->toArray()));
        // $data_result->setPermissions($this->permissions);
        // $data_result->setParameters();
        dd($data_result);
        $response = Utilities::BuildSuccessResponse(Constant::Success, $code, $this->Message("List."), $data_result);
        return response()->json($response, $code);
        
    }

    public function GetById($id)
    {

    }

    public function Store(Request $request)
    {
        Log::info("in base eloquent store");
        try {
            $validator = Validator::make(
                $request->all(),
                $this->model->Rules($request),
                // $this->model->Messages($request)
            );
            
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                $code = Constant::HTTP_VALIDATION_FAILED; // 422
                $response = Utilities::BuildBadResponse(
                    Constant::Error,
                    $code,
                    "Validation failed.",
                    $errors
                );
                // $previousRoute = app('router')->getRoutes()->match($request->create(url()->previous()))->getName();
                Log::info("asdasda");

                Log::info(var_dump($response));
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                // return redirect()->back()->withErrors($validator);
                
            }
        $this->model->create($request->all());

            return response()->json();
        } catch (Exception $e) {
            return 'error';
        }
    }

    public function Update(Request $request)
    {
       
    }

    public function Delete(Request $request, $id)
    {

    }

    public function PatchDisableEnable(Request $request)
    {
       
    }

    public function getRecordType($value)
    {

    }

    public function Message($message)
    {
    }

    public function FindByColumn($column, $value)
    {
    }

    protected function SetPaginationDetails(Request $request)
    {
    
    }

    protected function ValidateRequest(Request $request)
    {
       
    }

    public function capitalizeArrayValues($array)
    {
        
    }

    protected function setDateToFromInWhereClause(Request $request)
    {
       
    }

    protected function setMonthYearInWhereClause(Request $request)
    {

    }

    public function GetAllRelatedUsers(Request $request)
    {
       
    }

    public function GetAssignedLeads(Request $request)
    {

    }
}
