<x-admin>
    <div class="container-fluid p-0">

        <form method="POST" action="{{ route('portfolio.store') }}"
              enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30"
                          rows="6"></textarea>
            </div>
            <div class="mb-3">
                <label for="technologies" class="form-label">Teachnologies</label>
                <input type="text" class="form-control" id="technologies"
                       name="technologies">
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tag</label>
                <select class="form-control" name="tags" id="tags">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <input type="hidden" name="created_at" value="{{\Illuminate\Support\Carbon::now()}}">
            <input type="hidden" name="updated_at" value="{{\Illuminate\Support\Carbon::now()}}">


            <a type="button" href="/admin/portfolio" class="btn btn-secondary">Close
            </a>
            <button type="submit" class="btn btn-primary">Save changes</button>

        </form>
    </div>
</x-admin>
