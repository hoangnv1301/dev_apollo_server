@extends('Admin::layouts.contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a
                href="{{ route('cms.contact.page') }}">Contacts</a>/</span> Detail</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Contact information</h5> <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Schedule time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-title" placeholder="Title"
                                value="{{ $contact->reservation_time }}" disabled />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-title" placeholder="Title"
                                value="{{ $contact->fullname }}" disabled />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Company name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-title" placeholder="Title"
                                value="{{ $contact->company_name }}" disabled />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-title" placeholder="Title"
                                value="{{ $contact->email }}" disabled />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-title" placeholder="Title"
                                value="{{ $contact->phone }}" disabled />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-title">Status</label>
                        <div class="col-sm-3">
                            <form id="status" action="{{ route('cms.contact.update', $contact->id) }}" method="POST">
                                @csrf
                                <select name="status" class="form-select @if ($contact->status == 'pending') bg-label-warning @elseif ($contact->status == 'in progress') bg-label-info @elseif ($contact->status == 'confirmed') bg-label-success @endif"
                                    aria-label="Default select example" id="statusOption">
                                    <option value="pending" @if ($contact->status == 'pending') selected @endif>pending</option>
                                    <option value="in progress" @if ($contact->status == 'in progress') selected @endif>in progress
                                    </option>
                                    <option value="confirmed" @if ($contact->status == 'confirmed') selected @endif>confirmed
                                    </option>
                                </select>
                            </form>
                            {{-- submit when change --}}
                            <script>
                                const statusOption = document.getElementById('statusOption');
                                const status = document.getElementById('status');
                                statusOption.addEventListener('change', function() {
                                    console.log(status)
                                    status.submit();
                                });
                            </script>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="content-input">Description</label>
                        <div class="col-sm-10">
                            <textarea id="content-input" class="form-control" placeholder="Content"
                                aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" rows="5"
                                disabled>{{ $contact->description }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div> --}}
                </div>
            </div>

        </div>
        <div class="col-lg">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Memo</h5> <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                    <form action="{{ route('cms.contact.update', $contact->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <textarea name="memo" id="content-input" class="form-control" placeholder="memo" aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2" rows="10">{{ $contact->memo }}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
