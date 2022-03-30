@extends('layouts.app')

@section('content')

<x-results-list results="{{route("search")}}" />

{{-- <x-form.button type="submit">Button Label</x-form.button>

<form action="{{ route("task") }}" method="POST">

    @csrf

    @if(!$errors->first('name'))
    <x-form.input name="name" id="name" class="form-control" />
    @else 
    <x-form.input name="name" id="name" class="form-control is-invalid" />
    @endif

    @if(!$errors->first('address'))
    <x-form.input name="address" id="address" class="form-control" />
    @else 
    <x-form.input name="address" id="address" class="form-control is-invalid" />
    @endif

    <x-form.button type="submit" class="btn btn-primar" />

</form> --}}

@endsection 