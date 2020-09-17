@extends('dashboard.master')
@section('content')

<a class="btn btn-success btn-sm mt-3 mb-3" href="{{ route('post.create')}}">
    Create
</a>
    <table class="table">
        <thead>
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Title
                </td>
                <td>
                    Posted
                </td>
                <td>
                    Date Created
                </td>
                <td>
                    Update
                </td>
                <td>
                    Actions
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->posted}}</td>
                    <td>{{ $post->created_at->format('Y-M-d')}}</td>
                    <td>{{ $post->updated_at->format('Y-M-d')}}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">See</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{ $posts->links() }}
@endsection
