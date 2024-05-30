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
            </tr>
        @endforeach
    </tbody>
</table>
@endsection