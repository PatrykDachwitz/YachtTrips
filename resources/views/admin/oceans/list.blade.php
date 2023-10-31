@extends('admin.layout')

@section('script')
    <input type="hidden" data-url value="{{ route('admin.oceans.index') }}">
    <input type="hidden" data-url-create value="{{ route('admin.oceans.create') }}">
    <input type="hidden" data-url-api value="{{ route('oceans.index') }}">
    @vite('resources/js/admin/list.js')
@endsection
