@extends('admin.layout')

@section('script')
    <input type="hidden" data-url value="{{ route('admin.yachts.index') }}">
    <input type="hidden" data-url-create value="{{ route('admin.yachts.create') }}">
    <input type="hidden" data-url-api value="{{ route('yachts.index') }}">
    @vite('resources/js/admin/list.js')
@endsection
