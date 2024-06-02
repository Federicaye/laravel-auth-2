@extends('layouts.admin')

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>title</th>
                <th>slug</th>
                <th>content</th>
                <th>save</th>
                <th>edit</th>
                <th>cancel</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>
                            <p class="td {{$post->id}}">{{$post->title}} </p>
                            <input type="text" name="title" class="display-none edit-post {{$post->id}}"
                                value="{{ old('title', $post->title) }}" required maxlength="255">
                        </td>
                        <td>
                            <p class="td {{$post->id}}">{{$post->slug}}</p>
                            <input type="text" name="slug" class="display-none edit-post {{$post->id}}"
                                value="{{ old('slug', $post->slug) }}" required maxlength="255">
                        </td>
                        <td>
                            <p class="td {{$post->id}}">{{$post->content}}</p>
                            <input type="text" name="content" class="display-none edit-post {{$post->id}}"
                                value="{{ old('content', $post->content) }}" required maxlength="255">
                        </td>
                        <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>
                        </td>
                    </form>

                    <td> <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary edit-post-button"
                            id="{{$post->id}}"><i class="fa-solid fa-pencil"></i></a></td>

                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Rimuovi" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @endforeach
            <tr id="new-post"></tr>
            <tr>
                <td><button class="btn btn-primary" id="create-button"><i class="fa-solid fa-plus"></i></button></td>

            </tr>
            <tr>
                <form action="{{route('admin.posts.store')}}" method="POST"> <input type="hidden" name="_token"
                        value="DMPSXwuOHhV5k90JX016YDfP8Y0Tf4m8BiURCGAb" autocomplete="off">


                    <td><input type="text" name="title" class="edit-post" required></td>
                    <td><input type="text" name="slug" class="edit-post" required></td>
                    <td><input type="text" name="content" class="edit-post" required></td>
                    <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                    <td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
<div>

</div>
@endsection