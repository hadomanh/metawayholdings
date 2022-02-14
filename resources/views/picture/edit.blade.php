@extends('layouts.admin')

@section('content')

<form action="{{ route('image.update', $image->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titleInput">Title</label>
        <input type="text" name="title" class="form-control" id="titleInput" placeholder="Title" value="{{ $image->title }}" required>
    </div>


    <input type="hidden" name="position" value="{{ $image->position }}">

    <label for="uploadWrapper">Image</label>
    <div id="uploadWrapper">
        <label class="upload-trigger" for="js--upload">
            <div class="uploader">
                <img src="{{ $image->url }}"  
                    data-target="#js--upload" 
                    class="img-fluid upload-preview" 
                    data-content="uploadPreview">
                    
                <span data-content="uploadPlus" class="upload-plus">
                </span>
            </div>
        </label>

        <input type="file" name="image" class="d-none" id="js--upload">
    </div>

    <button type="submit" class="btn btn-warning">Submit</button>
</form>

@endsection

@push('script')
<script>
initUpload('#js--upload', '#uploadWrapper')
</script>
@endpush
