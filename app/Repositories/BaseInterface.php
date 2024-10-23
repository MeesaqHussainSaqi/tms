<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface BaseInterface
{
    public function GetAll(Request $request);

    public function GetById($id);

    public function Store(Request $request);

    public function Update(Request $request);

    public function Delete(Request $request, $id);

    public function FindByColumn($column, $value);
}
