@extends('admin.layout')

@section('script')
    <input type="hidden" data-url value="{{ route('admin.trips.index') }}">
    <input type="hidden" data-url-create value="{{ route('admin.trips.create') }}">
    <input type="hidden" data-url-api value="{{ route('trips.index') }}">
    @vite('resources/js/admin/list.js')
@endsection
