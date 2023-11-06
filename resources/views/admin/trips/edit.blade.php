@extends('admin.layout')

@include('admin.form.trips')

@section('script')
    <input type="hidden" data-url value="{{ route('trips.index') }}">
    <input type="hidden" data-url-update value="{{ route('trips.update', ["trip" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('trips.edit', ["trip" => $id]) }}">
    @vite('resources/js/admin/edit.js')
@endsection
