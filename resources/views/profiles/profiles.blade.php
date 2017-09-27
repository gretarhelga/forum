@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div style="font-size:30px; margin-left: 15px;"><b>Gretar Helgason</b> Meðlimur í 3 vikur</div>
            <div class="panel panel-default">
            	@foreach($threads as $thread)
                <div class="panel-heading">{{ $thread["nafn"] }} {{ $thread["um"] }}</div>
                        <div class="panel-heading">
                        {{ $thread["efni"] }}
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection