<form class="p-4 pt-3" method="post" action="{{ route('cases.updatecourt') }}">
    @include('errors')

    {{ csrf_field() }}
         
    <div class="form-group" style="display:none;">
        <label class="col-md-3 control-label">Court ID:</label>
        <div class="col-md-9">
            <input type="text" name="court_id" value="{{ old('court_id') ?? $casefileCourt->court_id ?? '' }}" placeholder="" class="form-control">
        </div>
    </div>
    <div class="form-group" style="display:none;">
        <label class="col-md-3 control-label">Case File ID:</label>
        <div class="col-md-9">
            <input type="text" name="case_file_id" value="{{ old('case_file_id') ?? $casefileCourt->case_file_id }}" placeholder="" class="form-control">
        </div>
    </div>
    <div class="form-group" style="display:none;">
        <label class="col-md-3 control-label">judge_id:</label>
        <div class="col-md-9">
            <input type="text" name="judge_id" value="{{ old('judge_id') ?? $casefileCourt->judge_id }}" placeholder="" class="form-control">
        </div>
    </div>
    

    <div class="form-group mb-2 mb-lg-2">
        <label for="complaint_filed" class="form-label">Complaint Filed</label>
        <div class="col-sm-9">
            <input class="form-control datepicker-input" type="text" value="{{ old('complaint_filed', $casefileCourt->complaint_filed ?? '') }}" id="complaint_filed" name="complaint_filed">
        </div>
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="ded" class="form-label">Initial Discovery End Date</label>
        <div class="col-sm-9">
            <input class="form-control datepicker-input" type="text" value="{{ old('ded', $casefileCourt->ded ?? '') }}" id="ded" name="ded">
        </div>
    </div>

    
    <div class="form-group mb-2 mb-lg-2">
        <label for="arbitration_date" class="form-label">Arbitration Date</label>
        <div class="col-sm-9">
            <input class="form-control datepicker-input" type="text" value="{{ old('arbitration_date', $casefileCourt->arbitration_date ?? '') }}" id="arbitration_date" name="arbitration_date">
        </div>
    </div>
    
    <div class="form-group mb-2 mb-lg-2">
        <label for="trial_date" class="form-label">Trial Date</label>
        <div class="col-sm-9">
            <input class="form-control datepicker-input" type="text" value="{{ old('trial_date', $casefileCourt->trial_date ?? '') }}" id="trial_date" name="trial_date">
        </div>
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label for="court_address1" class="form-label">Street Address</label>
        <input type="text" class="form-control" id="court_address1" name="court_address1" value="{{ old('court_address1') ?? $court->court_address1 }}">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Plaintiff Caption:</label>
        <input type="text" name="plaintiff_caption" value="{{ old('plaintiff_caption') ?? $casefileCourt->plaintiff_caption }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Defendant Caption:</label>
        <input type="text" name="defendant_caption" value="{{ old('defendant_caption') ?? $casefileCourt->defendant_caption }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Track Coord Name:</label>
        <input type="text" name="track_coord_name" value="{{ old('track_coord_name') ?? $casefileCourt->track_coord_name }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Track Coord Phone:</label>
        <input type="text" name="track_coord_phone" value="{{ old('track_coord_phone') ?? $casefileCourt->track_coord_phone }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Track Coord Extension:</label>
        <input type="text" name="track_coord_extension" value="{{ old('track_coord_extension') ?? $casefileCourt->track_coord_extension }}" placeholder="" class="form-control">
    </div>


    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Docket Number:</label>
        <input type="text" name="docket_number" value="{{ old('docket_number') ?? $casefileCourt->docket_number }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Docket Number 2:</label>
        <input type="text" name="docket_number2" value="{{ old('docket_number2') ?? $casefileCourt->docket_number2 }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Docket Number 3:</label>
        <input type="text" name="docket_number3" value="{{ old('docket_number3') ?? $casefileCourt->docket_number3 }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Law Clerk:</label>
        <input type="text" name="law_clerk" value="{{ old('law_clerk') ?? $casefileCourt->law_clerk }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Law Clerk Phone:</label>
        <input type="text" name="law_clerk_phone" value="{{ old('law_clerk_phone') ?? $casefileCourt->law_clerk_phone }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Law Clerk Extension:</label>
        <input type="text" name="law_clerk_extension" value="{{ old('law_clerk_extension') ?? $casefileCourt->law_clerk_extension }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Law Clerk Fax:</label>
        <input type="text" name="law_clerk_fax" value="{{ old('law_clerk_fax') ?? $casefileCourt->law_clerk_fax }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Law Clerk Fax:</label>
        <input type="text" name="law_clerk_fax" value="{{ old('law_clerk_fax') ?? $casefileCourt->law_clerk_fax }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Civil Case Manager Name:</label>
        <input type="text" name="civil_case_manager_name" value="{{ old('civil_case_manager_name') ?? $casefileCourt->civil_case_manager_name }}" placeholder="" class="form-control">
    </div>

    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Civil Case Manager Phone:</label>
        <input type="text" name="civil_case_manager_phone" value="{{ old('civil_case_manager_phone') ?? $casefileCourt->civil_case_manager_phone }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Civil Case Manager Extension:</label>
        <input type="text" name="civil_case_manager_extension" value="{{ old('civil_case_manager_extension') ?? $casefileCourt->civil_case_manager_extension }}" placeholder="" class="form-control">
    </div>
    <div class="form-group mb-2 mb-lg-2">
        <label class="form-label">Civil Case Manager Fax:</label>
        <input type="text" name="civil_case_manager_fax" value="{{ old('civil_case_manager_fax') ?? $casefileCourt->civil_case_manager_fax }}" placeholder="" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Update Court</button>
    <a href="{{ empty($case_file_id) ? route('courts.index') : route('cases.show', $case_file_id) }}" type="button" class="btn btn-secondary">Cancel</a>

</form>