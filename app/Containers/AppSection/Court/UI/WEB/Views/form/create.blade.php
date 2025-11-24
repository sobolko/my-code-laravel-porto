@extends('Court.UI.WEB.Views.form.wrapper', ['title' => 'Create Court'])

@section('form')

<form class="p-4 pt-3" method="post" action="{{ route('courts.store') }}">
    @include('errors')
    <input type="hidden" name="name" value="-">
    {{ csrf_field() }}
    <div class="form-group mb-2 mb-lg-2">
        <label for="court_county_lowcaps" class="form-label">County</label>
        <input type="text" class="form-control" id="court_county_lowcaps" name="court_county_lowcaps" value="{{ old('court_county_lowcaps') }}" required>
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label for="court_name" class="form-label">Name</label>
        <input type="text" class="form-control" id="court_name" name="court_name" value="{{ old('court_name') }}" required>
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_address1" class="form-label">Street Address</label>
        <input type="text" class="form-control" id="court_address1" name="court_address1" value="{{ old('court_address1') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_address2" class="form-label">PO Box</label>
        <input type="text" class="form-control" id="court_address2" name="court_address2" value="{{ old('court_address2') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_city" class="form-label">City</label>
        <input type="text" class="form-control" id="court_city" name="court_city" value="{{ old('court_city') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_state" class="form-label">State</label>
        @php $states = config('states'); $selectedState = old('court_state'); @endphp
        <select class="form-control" id="court_state" name="court_state">
            <option value="">Select</option>
            @foreach($states as $abbr => $name)
                <option value="{{ $abbr }}" {{ $selectedState == $abbr ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_zip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="court_zip" name="court_zip" value="{{ old('court_zip') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="court_phone" name="court_phone" value="{{ old('court_phone') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_fax" class="form-label">Fax</label>
        <input type="text" class="form-control" id="court_fax" name="court_fax" value="{{ old('court_fax') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_extension" class="form-label">Extension</label>
        <input type="text" class="form-control" id="court_extension" name="court_extension" value="{{ old('court_extension') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_contact" class="form-label">Contact</label>
        <input type="text" class="form-control" id="court_contact" name="court_contact" value="{{ old('court_contact') }}">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_email" class="form-label">Email</label>
        <input type="text" class="form-control" id="court_email" name="court_email" value="{{ old('court_email') }}">
    </div>

    <div class="form-group mb-4">
        <label class="col-md-3 my-1 control-label">Type</label>
        <div class="col-md-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="court_type" id="court_type_s" value="S" checked>
                <label class="form-check-label" for="inlineRadio1">State</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="court_type" id="court_type_f" value="F" >
                <label class="form-check-label" for="inlineRadio2">Federal</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Create Court</button>
    <a href="{{ route('courts.index') }}" type="button" class="btn btn-secondary">Cancel</a>
</form>  <!--end form-->
@endsection
