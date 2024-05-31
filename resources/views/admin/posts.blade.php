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
                <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <td>{{$post->title}} <input type="text" id="" class="display-none edit-post {{$post->id}}" name='title' value="{{ old('title', $post->title) }}" required maxlength="255"> </td>
                    <td>{{$post->slug}} <input type="text" id="" class="display-none edit-post {{$post->id}}" name='slug' value="{{ old('slug', $post->slug) }}" required maxlength="255"> </td>
                    <td>{{$post->content}} <input type="text" id="" class="display-none edit-post {{$post->id}}" name='content' value="{{ old('content', $post->content) }}" required maxlength="255"> </td>
                </form>
                <td>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Rimuovi" class="btn btn-danger">
                    </form>
                </td>
                <td> <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary edit-post-button" id="{{$post->id}}">Modifica</a></td>


            </tr>
        @endforeach
    </tbody>
</table>
@endsection