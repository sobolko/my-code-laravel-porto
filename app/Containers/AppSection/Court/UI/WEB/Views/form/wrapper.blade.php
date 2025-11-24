@extends('layouts.vertical', ['title' => $header ?? ' Courts'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0 h-100">
                    <div class="col-lg-12">
                        <h4 class="card-title fs-16 mb-0 pt-3 ps-4">{{ $title }}</h4>

                        @yield('form')
                    </div><!--end col-->

                </div><!--end row-->
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
