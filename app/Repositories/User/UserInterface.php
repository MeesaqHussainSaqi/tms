<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;

interface UserInterface
{
    public function GetAll(Request $request);

    public function GetById($id);

    public function Store(Request $request);

    public function Update(Request $request);
    
    public function Delete(Request $request, $id);
    public function Reset($id);
    public function PatchDisableEnable(Request $request);
}
