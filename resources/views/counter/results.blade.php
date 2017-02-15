@extends('layouts.app')

@section('content')
    @if(isset($count))
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading bg-primary"><strong>Result is<strong></div>
                    <div class="panel-body bg-info"><strong>{{$count}}<strong></div>
                </div>
            </div>
        </div>
    @endif
@endsection
