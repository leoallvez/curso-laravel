@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Events
                </div>
                
                <div class="card-body">
                    {!! Form::open(['action' => ['EventController@update', $event->id], 'method' => 'PATCH',]) !!}
                	    @include('event._form', ['SubmissionButtonName' => 'Edit'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection