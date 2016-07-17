@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('post.index')  }}" class="btn btn-default btn-sm pull-right"><i class="fa fa-chevron-left"></i> Back to List</a>

                        <h3>{{ $post->name  }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $post->post_body  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
