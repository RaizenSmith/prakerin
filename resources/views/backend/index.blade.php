@extends('layouts.backend')

@section('content')
{{ Auth::user()->name }}
@endsection
