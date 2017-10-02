@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
        <div style="font-size:30px; margin-left: 15px;"><b>Gretar Helgason</b> Meðlimur í 3 vikur</div>
        <hr>
        @foreach($threads as $thread)
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $thread["nafn"] }} published <a href="#">{{ $thread["um"] }}</a>
                </div>
                <div class="panel-body">
                    {{ $thread["efni"] }}
                </div>
            </div>
        </div>
        @endforeach
            <div class="panel phanel-default col-md-4">
                <div class="panel-body">
                    <h4>
                        Nafn
                    </h4>
                    <p>
                        Grétar Helgason
                    </p>
                    <h4>
                        Netfang
                    </h4>
                    <p>
                        gretar95@gmail.com
                    </p>
                    <h4>
                        Fjöldi Þráða: 14
                    </h4>
                </div>
            </div>
    </div>
</div>
@endsection



<!-- @foreach($threads as $thread)
                    <div class="panel-heading">{{ $thread["nafn"] }} {{ $thread["um"] }}</div>
                        <div class="panel-heading">
                        {{ $thread["efni"] }}
                        </div>
                @endforeach -->