@extends('layouts.main')

@section('content')
    <h1>All Cars</h1>
    <a href="{{ route('cars.index') }}">All cars</a>
    <a href="{{ route('cars.create') }}">Add cars</a>
    <a href="{{ route('cars.show',1) }}">Show contact id 1</a>
@endsection