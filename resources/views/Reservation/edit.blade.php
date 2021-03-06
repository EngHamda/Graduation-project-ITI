@extends('layouts.main')
@section('title','Edit Reservation')
{{--@section('sidebar')
    edit Sidebar
@stop--}}
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Edit Reservation</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                {{-- This comment will not be present in the rendered HTML --}}
                <div class="col-md-12">



                  {{Form::open(array('action' => ['ReservationsController@update', $reservation->id], 'method' => 'PUT' )
                             , array('class'=>'form-horizontal')) }}
                    <div class="form-group row">
                        {!! Form::label('patient-name', 'Patient Name'  
                                ,array('class'=>'col-sm-3 form-control-label'))!!}
                        <div class="col-sm-9">
                            <!--<fieldset disabled>-->
                                {!! Form::text('patient-name', $reservation->patient->name,array('class'=>' form-control')) !!}
                            <!--</fieldset>-->
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('clinic-name', 'Clinic Name'  
                                ,array('class'=>'col-sm-3 form-control-label'))!!}
                        <div class="col-sm-9">
                            {!! Form::select('clinic-name', $clinicList
                                            , old('clinic_id'), array('class'=>' form-control c-select',
                                                          'id' => 'clinic_id')) !!}
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('physician-name', 'Physician Name'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            {!! Form::select('physician-name', array()
                                            , old('physician_id'), array('class'=>' form-control c-select',
                                                                         'id' => 'physician_id', 
                                                                         'placeholder' => 'Select Your Physician')) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('clinic-day', 'Reservation Time'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-4">
                            {!! Form::text('clinic-day', null, 
                                            array('class'=>' form-control c-select',
                                                  'placeholder' => 'Reservation Day', 
                                                  'id' => 'reserve_day')) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('clinic-time', array(), null, 
                                              array('class'=>' form-control c-select',
                                                    'placeholder' => 'Reservation hour', 
                                                    'id' => 'reserve_time' )) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('reservation-status', 'Reservation Status'  
                                        ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            <label class="col-sm-6 ">
                                {!! Form::checkbox('reservation-confirmed', 'confirmed', true) !!}
                                Confirm Reservation
                            </label>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('reservation-number', 'Number of Reservation'  
                                ,array('class'=>'col-sm-3 control-label'))!!}
                        <div class="col-sm-9">
                            {!! Form::number('reservation-number', $reservation->reservation_number, 
                                              array('class'=>' form-control',
                                                    'placeholder' => $reservation->reservation_number)) !!}
                        </div>
                    </div>
                    <div class='col-sm-10 col-sm-offset-2'>
                        {!! Form::submit('Edit Reservation', array('class'=>'btn btn-success col-sm-offset-2')) !!}                               
                        {!! Form::reset('Cancel Reservation', array('class'=>'btn btn-danger col-sm-offset-5')) !!}                               
                    </div>
                    {!! Form::close() !!} 
                    {{--Clinic Name: {{ $reservation->clinic_name }}  --}}
                    {{--echo Form::email($name, $value = null,
                      $attributes = array('class'=>' form-control',));||
                      $attributes = ['class'=>' form-control',]--}}
                    {{-- {{ Form::bsText('first_name') }} --}}
                    {{--Form::file($name, $attributes = array('class'=>'btn btn-default'));--}}
                </div>
            </div>
        </div>
    </div><!--./panel-->
@stop