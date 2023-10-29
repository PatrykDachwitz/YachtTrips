@extends('admin.layout')

@include('admin.form.categoryBanners')

@section('script')
    <input type="hidden" data-url value="/test">
    <input type="hidden" data-url-api value="{{ route('banners.show', ["banner" => $id]) }}">
    @vite('resources/js/admin/show.js')
@endsection
