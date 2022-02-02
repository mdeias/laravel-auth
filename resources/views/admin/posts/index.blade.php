@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Elenco posts</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>-----</td>
                </tr>  
                @endforeach
            
            </tbody>
          </table>
    </div>
</div>
@endsection