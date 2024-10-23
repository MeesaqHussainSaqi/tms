<?php

namespace App\Repositories\User;

use App\Config\Constant;
use App\Models\User;
use App\Repositories\BaseEloquent;
use App\Repositories\BaseInterface;
use App\Utilities\Utilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserEloquent extends BaseEloquent implements BaseInterface, UserInterface
{
    protected $with = [
        'group',
        'dealers',
        'roles'
    ];
    public function __construct(User $user, Request $request)
    {
        return $this->model = $user;
        $this->modelName = class_basename($this->model);

        // parent::SetPaginationDetails($request);
    }
    public function Store(Request $request)
    {
        return parent::Store($request);
    }

    public function Update(Request $request)
    {
        
    }
    public function GetAll(Request $request)
    {
        $this->query = $this->model;
        return parent::GetAll($request);
    }

    public function GetById($id)
    {
        $this->data = $this->model->with($this->with)->find($id);
        return parent::GetById($id);
    }

    public function Delete(Request $request, $id)
    {
        return parent::Delete($request, $id);
    }
    public function SyncRoles(Request $request, $id)
    {
        return parent::Delete($request, $id);
    }

    public function Reset($id)
    {
    }
    public function PatchDisableEnable(Request $request)
    {
    }
}
