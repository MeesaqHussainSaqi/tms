@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <div>
        <table id="usersTable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data will be loaded via AJAX --}}
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            new DataTable('#usersTable', {
                ajax: '{{ route('users.data') }}',
                processing: true,
                serverSide: true
            });

        });

    </script>
@endsection