@extends('Admin.Master')
@section('title','Project || Admin')
@section('content-admin')


<!-- delete border when used -->
<section class="w-full h-screen border-dotted border-4 border-light-blue-500 bg-white-800">
    @yield('content-admin-index')
</section>

@endsection
