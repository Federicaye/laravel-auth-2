@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>title</th>
            <th>slug</th>
            <th>content</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>

                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->content}}</td>
                <td> 
                <form  action="{{ route('admin.posts.destroy', $post->id) }}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Rimuovi" class="btn btn-danger">
                </form></td>
                
               
            </tr>
        @endforeach
    </tbody>
</table>
@endsection