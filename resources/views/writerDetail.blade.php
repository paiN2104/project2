@extends('layouts/mainlayout')
@section('title','Detail')

@section('content')
<div class="container mt-4 p-5 bg-primary text-white rounded">
   <h1>Nama : {{ $writer['name'] }}</h1>
   <h3>Asal : {{ $writer['country'] }}</h3>
   <h3>Contact : {{ $writer['contact'] }}</h3>
</div>

@endsection