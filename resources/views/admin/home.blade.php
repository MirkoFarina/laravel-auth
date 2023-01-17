@extends('layouts.admin')

@section('content')
@include('admin.partials.header')

<div class="container">
    <h1>
        Benvenuto nella tua dashboard {{ Auth::user()->name }}
    </h1>
</div>
@endsection
