@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>
                    <div class="panel-body">
                        <form method="post" action="/threads">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Body:</label>
                                <textarea class="form-control" rows="8"></textarea>
                            </div>

                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                        </form>
                        @foreach ($countries as $country)
                            @if($country === "Ísland")
                                <h1>{{ $country }}</h1>
                            @else
                                <p>{{ $country }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
