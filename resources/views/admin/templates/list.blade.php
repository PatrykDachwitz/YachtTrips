@extends('admin.layout')

@section('script')
    <input type="hidden" data-url value="{{ route('admin.templates.index') }}">
    <input type="hidden" data-url-create value="{{ route('admin.templates.create') }}">
    <input type="hidden" data-url-api value="{{ route('templates.index') }}">
    @vite('resources/js/admin/list.js')
@endsection
