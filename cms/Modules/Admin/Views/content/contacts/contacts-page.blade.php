@extends('Admin::layouts.contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Contacts /</span> All
    </h4>

    {{-- Alert notification --}}
    @if (Session::has('success'))
        <div class="bs-toast toast toast-placement-ex m-1 fade bg-primary top-0 end-0 show" role="alert" id="success-alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-body">
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
    @endif
    <script>
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>

    <!-- Basic Bootstrap Table -->
    <div class="card">

        <h5 class="card-header">Contact list</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Schedule time</th>
                        <th>Full name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($contacts as $contact)
                        <tr>
                            <td style="white-space: pre-wrap;"></i> <strong>{{ $contact->reservation_time }}</strong></td>
                            <td>{{ $contact->fullname }}</td>
                            <td>{{ $contact->company_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>
                                @if ($contact->status == 'pending')
                                    <span class="badge bg-label-warning me-1">{{ $contact->status }}</span>
                                @elseif ($contact->status == 'in progress')
                                    <span class="badge bg-label-info me-1">{{ $contact->status }}</span>
                                @elseif ($contact->status == 'confirmed')
                                    <span class="badge bg-label-success me-1">{{ $contact->status }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('cms.contact.detail', ['id' => $contact->id]) }}"><i
                                                class='bx bx-detail'></i></i>
                                            Detail</a>
                                        {{-- Hidden form delete item --}}
                                        <form id="deleteForm"
                                            action="{{ route('cms.contact.delete', ['id' => $contact->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item" id="deleteButton"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>
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
