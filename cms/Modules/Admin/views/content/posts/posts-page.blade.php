@extends('Admin::layouts.contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Posts /</span> All
        <a href="{{ route('cms.post.create') }}"><button type="button" class="btn btn-primary float-end"">Create</button></a>
    </h4>

{{-- {{dd($posts->toArray())}} --}}
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Post list</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Publish date</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($posts as $post)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $post->title }}</strong></td>
                        <td>{{ $post->thumbnail }}</td>
                        <td>{{ $post->publish_date }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $post->view }}</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('cms.post.detail',['id'=>$post->id] ) }}"><i class='bx bx-detail'></i></i>
                                        Detail</a>
                                    <a class="dropdown-item" href="{{ route('cms.post.edit',['id'=>$post->id] ) }}"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" id="deleteButton"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                        <form id="deleteForm" action="{{ route('cms.post.delete', ['id'=>$post->id]) }}" method="POST">
                                            @csrf
                                        </form>
                                        <script>
                                            document.getElementById("deleteButton").addEventListener("click", function() {
                                              document.getElementById("deleteForm").submit();
                                            });
                                        </script>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

@endsection
