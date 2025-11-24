@extends('Court.UI.WEB.Views.form.wrapper', [
    'header' => __('View Court Information'),
    'title' => __('Court ') . $court->court_name
])

@section('form')

@include('Court.UI.WEB.Views.view.court', ['court' => $court])


<h4 class="card-title fs-16 mb-0 pt-3 ps-4">Judge {{ $judge->judge_title }}</h4>
@includeIf('Court.UI.WEB.Views.view.judge', ['judge' => $judge])


<h4 class="card-title fs-16 mb-0 pt-3 ps-4">Case Specific Court Information</h4>
@includeIf('Court.UI.WEB.Views.view.court-xref', ['casefileCourt' => $casefileCourt])



@endsection