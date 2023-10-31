@extends('admin.layout')

@include('admin.form.banners')

@section('script')
    <input type="hidden" data-url value="{{ route('oceans.index') }}">
    <input type="hidden" data-url-api value="{{ route('oceans.show', ["ocean" => $id]) }}">
    @vite('resources/js/admin/show.js')
@endsection
