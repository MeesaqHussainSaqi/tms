<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class User extends Model
{
    use HasFactory;
    protected  $fillable = ['name','email','password','created-at'];
    public static function Rules(Request $request, $method = null)
    {
        if ($method == null)
            $method = $request->method();

        $rules = [];

        $rules = match ($method) {
            'POST' => [
                'name' => 'required|string|max:255', // Name is required
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    Rule::unique('users', 'email'), // Email must be unique
                ],
                'password' => 'required|string|min:8', // Password must be at least 8 characters
            ]
        };


        return $rules;
    }
}
