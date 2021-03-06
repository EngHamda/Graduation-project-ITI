@extends('layouts.main')
@section('title','Q&A-Create Answer')
{{--@section('sidebar')
    create Sidebar
@stop--}}
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
              Question details
          </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="col-md-2">QI        : </p>
                        <p class="col-md-10" >{{ $question->question_code }}</p>
                    <p class="col-md-2">Specific  : </p>
                        <p class="col-md-10" >{{ $question->question_specific }}</p>
                    <p class="col-md-2">Detail    : </p>
                        <p class="col-md-10" >{{ $question->question_detail }}</p>
                    <p class="col-md-2">Owner     : </p>
                        <p class="col-md-10" >{{ $question->patient->name }}</p>
                    <p class="col-md-2">Created_at: </p>
                        <p class="col-md-10" >{{ $question->updated_at }}</p>
                </div>  
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Add New Answer for This Question</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(array('url' => '/answers/store','method'=>'POST')
                                , array('class'=>'form-horizontal')) !!}
                    <div class="form-group row">
                        {!! Form::label('answer-specific', 'Specific Answer'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            {!! Form::text('answer-specific', null, 
                                              array('class'=>' form-control',
                                                    'placeholder' => 'Specific Answer')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('answer-detail', 'Answer Details'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            {!! Form::textarea('answer-detail', null, 
                                              array('class'=>' form-control',
                                                    'placeholder' => 'Answer Details')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('answer-speciality', 'Add Speciality'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            @foreach($specialities as $speciality)
                                <label class="col-sm-6 ">
                                    {!! Form::radio('answer-speciality', $speciality->id, false) !!}
                                    {{$speciality->name}}
                                </label>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="form-group row">
                            {!! Form::hidden('id-question', $question->id,
                                              array('class'=>' form-control')) !!}
                    </div>
                    <div class='col-sm-10 col-sm-offset-2'>
                        {!! Form::submit('Create Answer', array('class'=>'btn btn-success col-sm-offset-2')) !!}                               
                        {!! Form::reset('Cancel Answer', array('class'=>'btn btn-danger col-sm-offset-5')) !!}                               
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!--./panel-->    
    {{-- $question->id --}}
@stop
