@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading">{{ $thread->title }}</div>

                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>

            <form method="POST" action="/threads/{{ $thread->id }}/comment">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="efni" class="form-control" rows="8"></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Reply</button>
                    <br><br>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Comments</div>

                    <div class="panel-body">
                        @foreach($thread->comments as $comment)
                                <div class="body">

                                    {{ $comment->efni }}

                                    {{ $comment->user_id }}

                                </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection