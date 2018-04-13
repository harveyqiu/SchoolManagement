@extends('society.admin.template')

@section('content')

    @foreach($societies as $society)
        {{$society->name}}
    @endforeach

@endsection