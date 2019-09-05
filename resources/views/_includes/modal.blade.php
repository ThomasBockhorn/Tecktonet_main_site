<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="Large Modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="POST" action="{{ route('comments.update', $comment->id)}}">
            @csrf
            @method('PUT')
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$post->title}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <textarea name="content" id="context">{{ $comment->content }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-main" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-main">Save changes</button>
            </div>
        </form>
    </div>
 </div>
