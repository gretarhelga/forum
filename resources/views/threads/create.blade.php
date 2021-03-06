@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>
                    <div class="panel-body">
                    @include("errors.errors")
                        <form method="post" action="/threads">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title:</label>
                                <input name="title" type="text"  value="{{ old("title") }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Body:</label>
                                <textarea name="body" class="form-control" rows="8">{{ old("body") }}</textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Publish</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
