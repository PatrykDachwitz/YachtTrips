@extends('cms.layout')

@section('script')
    <input type="hidden" data-url value="/banners">
    @vite('resources/js/admin/list.js')
@endsection
