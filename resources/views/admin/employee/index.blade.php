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
                                <th> phone</th>
                                <th> Designation</th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td> {{$employee->id}} </td>
                                    <td> {{$employee->name}} </td>
                                    <td> {{$employee->phone}} </td>
                                    @if ($employee->designation==1)
                                        <td>Finance</td>
                                    @elseif($employee->designation==2)
                                        <td>Finance</td>
                                    @else
                                        <td>not found</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('admin.employees.details', $employee->id) }}" class="btn btn-primary">Details</a>
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
