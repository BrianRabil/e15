@extends('layouts.app')

@section('content')

<x-navbar />
<x-results-list :results="$results" />

@endsection 