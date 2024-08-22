
@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
<div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Created At</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
          </thead>
          <tbody>
          </tbody>
    </table>
</div>
@endsection
