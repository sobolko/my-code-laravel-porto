@extends('Court.UI.WEB.Views.form.wrapper', [
    'header' => __('Edit Court Information'),
    'title' => __('Edit Court ') . $court->court_name
])

@section('form')

@include('Court.UI.WEB.Views.form.form', ['court' => $court])

@if($judge)
<h4 class="card-title fs-16 mb-0 pt-3 ps-4">Edit Judge {{ $judge->judge_title }}</h4>
@includeIf('Judge.UI.WEB.Views.form.form', ['judge' => $judge])
@endif


<h4 class="card-title fs-16 mb-0 pt-3 ps-4">Edit Case Specific Court Information</h4>
@includeIf('Court.UI.WEB.Views.form.form-xref', ['casefileCourt' => $casefileCourt])
@endsection