<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\User\UserInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $user;
    function __construct(UserInterface $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        // return view('users.all',compact('users'));
    }
    public function GetAll(Request $request)
    {
        $users = $this->user->GetAll($request);
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function Store(Request $request)
    {
    //    $validator =  Validator::make($req->all(), [
    //         'name' => 'required|unique:posts|max:255',
    //         'email' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();

    //     }
    //     User::create(['name'=>$req->name,'email'=>$req->email,'password'=>$req->password,'created_at'=>$req->date('Y-m-d h:i:s')]);
    //     return redirect()->route('users')->with('success', 'User created successfully.');
        return $this->user->Store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
