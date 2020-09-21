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
                    Category
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
                    <td>{{ $post->category->title}}</td>
                    <td>{{ $post->created_at->format('Y-M-d')}}</td>
                    <td>{{ $post->updated_at->format('Y-M-d')}}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">See</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        <button data-toggle="modal" data-target="#deleteModal" data-id="{{$post->id}}" class="btn btn-danger">Delete</button>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    

{{ $posts->links() }}

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete this record?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form id="formDelete" action="{{ route('post.destroy', 0) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            
        </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#deleteModal').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      
        action = $('#formDelete').attr('action').slice(0, -1)
        action += id
      
        console.log(action)
      
        $('#formDelete').attr('action', action)
      
        var modal = $(this)
        modal.find('.modal-title').text('You are going to delete the following record: ' + id)
      });
    };
    
</script>

@endsection
