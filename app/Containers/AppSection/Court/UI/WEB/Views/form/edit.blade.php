@extends('Court.UI.WEB.Views.form.wrapper', ['title' => 'Edit Court ' . $court->court_name])

@section('form')

@include('Court.UI.WEB.Views.form.form', ['court' => $court])

@endsection
