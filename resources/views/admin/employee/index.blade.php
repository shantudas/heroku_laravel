@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th> id</th>
                                <th> name</th>
                                <th> address</th>
                                <th> phone</th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td> {{$employee->id}} </td>
                                    <td> {{$employee->name}} </td>
                                    <td> {{$employee->address}} </td>
                                    <td> {{$employee->phone}} </td>
                                    <td>
                                        <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
