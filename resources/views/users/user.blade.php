@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users</div>

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
                                <th> email</th>
                                <th> role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    @if($user->user_type == 1)
                                        <td>admin</td>
                                    @elseif($user->user_type ==2)
                                        <td>super admin</td>
                                    @else
                                        <td>user</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{-- @foreach($users as $index=>$user)
                             {{ $index+1 }}
                         @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
