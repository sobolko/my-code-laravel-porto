@extends('layouts.vertical', ['title' => 'Courts'])

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Courts</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <a href="{{ route('courts.create') }}" class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add Court</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                @if (session('status'))
                <x-message-alert>{{ session('message') }}</x-message-alert>
                @endif
                <div class="table-responsive">
                    <table class="table mb-0" id="datatable_1">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>County</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courts as $court)
                            <tr>
                                <td>{{ $court->court_name }}</td>
                                <td>{{ $court->court_county_lowcaps }}</td>
                                <td>{{ $court->court_phone }}</td>
                                <td>{{ $court->court_fax }}</td>
                                <td>{{ $court->court_email }}</td>
                                <td class="text-end text-nowrap">
                                    <a href="{{ route('courts.edit', $court->court_id) }}" class="btn btn-sm btn-outline-secondary"><i class="las la-pen text-secondary font-16"></i> Edit</a>
                                    <a href="{{ route('courts.destroy', $court->court_id) }}"
                                        title="{{ $court->court_name }}"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalDelete"><i class="las la-trash-alt text-secondary font-16"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
