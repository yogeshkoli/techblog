@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('post.create')  }}" class="btn btn-default btn-sm pull-right"> <i class="fa fa-plus"></i> Create New Post</a>

                        <h4>
                            My Posts
                        </h4>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered table-stripped">
                            <tr>
                                <th width="10">No</th>
                                <th>Name</th>
                                <th width="150">Created on</th>
                                <th width="250">Action</th>
                            </tr>

                            @if (count($posts) > 0)
                                @foreach ($posts as $key => $post)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>
                                            <a href="{{ route('post.show',$post->id) }}">
                                                {{ $post->name }}
                                            </a>
                                        </td>
                                        <td>{{ date('M d, Y', strtotime($post->created_at)) }}</td>
                                        <td>
                                            <a class="btn btn-success btn-xs" href="{{ route('post.show',$post->id) }}"><i class="fa fa-eye"></i> View</a>
                                            <a class="btn btn-primary btn-xs" href="{{ route('post.edit',$post->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                            {{ Form::open(['method' => 'DELETE','route' => ['post.destroy', $post->id],'style'=>'display:inline']) }}
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">Records not found!</td>
                                </tr>
                            @endif
                        </table>

                        <div class="pull-right">
                            {{ $posts->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
