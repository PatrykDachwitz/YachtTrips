@extends('admin.layout')

@include('admin.form.categoryBanners')

@section('script')
    <input type="hidden" data-url value="{{ route('banners.category.index') }}">
    <input type="hidden" data-url-update value="{{ route('banners.category.update', ["category" => $id]) }}">
    <input type="hidden" data-url-api value="{{ route('banners.category.edit', ["category" => $id]) }}">
    @vite('resources/js/admin/show.js')
@endsection
