@extends('admin.layout')

@section('script')
    <input type="hidden" data-url value="{{ route('admin.banners.category.index') }}">
    <input type="hidden" data-url-api value="{{ route('banners.category.index') }}">
    @vite('resources/js/admin/list.js')
@endsection
