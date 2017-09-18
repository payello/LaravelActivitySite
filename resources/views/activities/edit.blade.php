@extends('layouts.master')

@section('content')
{!! Form::model($activity, ['route'=>['activities.update', $activity->id], 'method'=>'PUT']) !!}
  {{Form::label('activity_name', 'Title:') }}
  {{Form::text('activity_name', null, ["class"=> 'form-control']) }}

{{Form:: submit('Save Changes', ['class'=>'btn btn-success'] )}}


{!! Form::close() !!}

@endsection
