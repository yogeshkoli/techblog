@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Post</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($post, ['method' => 'PATCH','route' => ['post.update', $post->id]]) !!}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{  $post->name }}">
                        </div>

                        <div class="form-group">
                            <label for="post_body">Post Body</label>
                            <textarea class="form-control" rows="5" placeholder="Description" id="post_body" name="post_body">{{  $post->post_body }}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Save Changes" class="btn btn-info">
                            <a href="{{ route('post.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
