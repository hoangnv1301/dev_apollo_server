@extends('Admin::layouts.contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('cms.post.page') }}">Posts</a>/</span> Create</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Post information</h5> <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <form action="{{ route('cms.post.update', ['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-title">Post Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-title" placeholder="Title" value="{{ $post->title }}" name="title"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Banner image</label>
                            <div class="col-sm-10">
                                <input onchange="previewImage(this)" class="form-control" type="file" id="formFile" accept="image/*" name="thumbnail">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <span class="col-sm-2 col-form-label"></span>
                            <div class="col-sm-10">
                                <img class="form-control" id="preview" src="{{ cxl_asset($post->thumbnail) }}">
                            </div>
                            <script>
                                function previewImage(input) {
                                    var preview = document.getElementById('preview');
                                    preview.src = URL.createObjectURL(input.files[0]);
                                    preview.style.display = 'block';
                                    preview.onload = function() {
                                        URL.revokeObjectURL(preview.src); // release memory
                                    }
                                }
                            </script>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="date-input">Publish date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="date-input" value="{{ $post->publish_date }}" name="publish_date"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="content-input">Content</label>
                            <div class="col-sm-10">
                                {{-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> --}}
                                <script src="{{ cxl_asset('assets_cms/vendor/libs/ckeditor/ckeditor.js') }}"></script>
                                <textarea id="content-input" class="form-control" placeholder="Content"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" name="content">{{ $post->content }}</textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.replace('content-input', {
                                            filebrowserUploadUrl: "{{route('cms.image.upload', ['_token' => csrf_token() ])}}",
                                            filebrowserUploadMethod: 'form'
                                        });
                                    </script>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
