@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if (count($posts) > 0)
                    @foreach ($posts as $key => $post)

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                                    {{ $post->name  }}
                                </h4>
                            </div>
                            <div class="panel-body">
                                <p><i>Published:</i> {{ date('M d, Y', strtotime($post->created_at)) }} &nbsp; <i>Author:</i> {{ $post->user  }}</p>

                                <div class="form-group">
                                    {{ $post->post_body }}
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="pull-right">
                        {{ $posts->render() }}
                    </div>

                @else

                    <div class="alert alert-info">
                        We have't found any post published, you can login/register to create new post and publish here.
                    </div>

                @endif
            </div>
        </div>
    </div>
@endsection
