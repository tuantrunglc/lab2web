@extends('layouts')

@section('title', 'Danh sách user')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách User
                <small>Danh sách Thanh vien</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Product</a>
            </div>
            @if(empty($users))
                <p>No data</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['birthday'] }}</td>
                            <td>{{ $user['address'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </section>
        <!-- /.content -->
    </div>
@endsection
