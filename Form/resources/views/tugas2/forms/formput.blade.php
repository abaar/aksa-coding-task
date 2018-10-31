@extends('tugas2.forms.masterform')

@section('action')
	{{route('tugas2.show.put')}}
@endsection

@section('method')
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
@endsection