@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>
        Benvenuto nella tua dashboard {{ Auth::user()->name }}
    </h1>
</div>
@endsection
