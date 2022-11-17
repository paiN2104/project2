@extends('layouts/mainlayout')
@section('title','Detail')

@section('content')
<div class="container mt-4 p-5 bg-primary text-white rounded">
   <h1>Nama : {{ $writer['name'] }}</h1>
   <h3>Asal : {{ $writer['country'] }}</h3>
   <h3>Contact : {{ $writer['contact'] }}</h3>
</div>

<h1>Books</h1>
<table class="table table-dark table-striped border">
   <thead>
     <tr>
       <th scope="col">No</th>
       <th scope="col">Title</th>
       <th scope="col">Synopsis</th>
       <th scope="col">Cover Photo</th>

     </tr>
   </thead>
   <tbody>
       @foreach ($writer->books as $book)
           <tr>
               <th scope="row">{{ $loop->iteration  }}</th>
               <td>{{ $book->title }}</td>
               <td>{{ $book->synopsis }}</td>
               <td><img src="{{ $book->coverphoto }}" alt="" srcset=""></td>
           </tr>             
       @endforeach
   </tbody>
 </table>

@endsection