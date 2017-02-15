@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class=" bg-success text-white panel-body">Please add number for Counting Sum</div>
            </div>
        </div>
    </div>

{!! Form::open(array("class" => "form-horizontal",'url' => 'add-number', 'method' => 'post')) !!}

        <div class="form-group">
                <span class="lbl_font_color">{{Form::label('number', 'Number : ', array('class' => 'col-md-4 control-label col-sm-2'))}} </span>
            <div class="col-md-3">
                {{ Form::text('number', $number = null, array('class' => 'form-control input-md', 'placeholder' => 'Type a Number')) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {{Form::submit('Add Number', array('class' => 'btn btn-primary'))}}
            </div>
        </div>

        @if($errors->any())
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('number') }} !!</strong>
                    </div>
                    
                </div>
            </div>
        @endif
{!! Form::close() !!}

@endsection
