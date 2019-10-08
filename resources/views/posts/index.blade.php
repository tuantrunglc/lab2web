@extends('layouts')

@section('title', 'Danh sách bài viết')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách bài viết
                <small>Danh sách bài viết</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
            </div>
            @if(empty($posts))
                <p>No data</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Content</th>
                        <th>User id</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post['content'] }}</td>
                            <td>{{ $post['user_id'] }}</td>
                            <td>
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

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
