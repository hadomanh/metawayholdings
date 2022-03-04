@extends('layouts.admin')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Image</h3>
    </div>

    <form class="card-body" action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input type="text" name="title" class="form-control" id="titleInput" placeholder="Title" required>
        </div>

        <input type="hidden" name="position" value="homeBanner">
    
        <label for="uploadWrapper">Image</label>
        <div id="uploadWrapper">
            <label class="upload-trigger" for="js--upload">
                <div class="uploader">
                    <img src=""  
                        data-target="#js--upload" 
                        class="img-fluid upload-preview" 
                        data-content="uploadPreview">
                        
                    <span data-content="uploadPlus" class="upload-plus">
                        <i class="fas fa-plus"></i>
                    </span>
                </div>
            </label>
    
            <input type="file" name="image" class="d-none" id="js--upload" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="" class="btn btn-outline-secondary">Cancel</a>
    </form>

</div>

@endsection

@push('script')
<script>
initUpload('#js--upload', '#uploadWrapper')
</script>
@endpush
