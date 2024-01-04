@extends('admin.layout')

@section('script')
{{--    <input type="hidden" data-url value="{{ route('admin.banners.index') }}">--}}
{{--    <input type="hidden" data-url-create value="{{ route("admin.{$views}.create") }}">--}}
    <input type="hidden" data-url-api value="{{ route("{$views}.index") }}">
    @vite('resources/js/admin/list.js')
@endsection
