@extends('layouts/mainlayout')
@section('title','Writer')

@section('content')
<div class="container mt-2">
    <h2>Writer Page</h2>
    <table class="table table-dark table-striped border">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col">Contact</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($writers as $index)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td><a href="/writer/{{ $index['id'] }}">{{ $index['name'] }}</a></td>
                    <td>{{ $index['country'] }}</td>
                    <td>            
                    @if ($loop->even)
                        {{ "EVEN" }}
                    @else
                        {{ "ODD" }}
                    @endif 
                    </td>
                    <td>{{ $index['contact'] }}</td>
                    <td><img src="{{ $index['photo'] }}" alt="" srcset=""></td>
                </tr>             
            @endforeach
        </tbody>
      </table>
</div>

@endsection