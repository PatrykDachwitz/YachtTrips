@extends('admin.layout')

@include('admin.form.trips')

@section('script')
    <input type="hidden" data-url value="{{ route('trips.index') }}">
    <input type="hidden" data-url-api value="{{ route('trips.store') }}">
    @vite('resources/js/admin/show.js')
@endsection
