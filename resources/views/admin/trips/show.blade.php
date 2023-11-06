@extends('admin.layout')

@include('admin.form.trips')

@section('script')
    <input type="hidden" data-url value="{{ route('trips.index') }}">
    <input type="hidden" data-url-api value="{{ route('trips.show', ["trip" => $id]) }}">
    @vite('resources/js/admin/show.js')
@endsection
