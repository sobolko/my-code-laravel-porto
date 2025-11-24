<div class="p-4 pt-3">

<div class="table-responsive">
    <table class="table mb-0">
        <tbody>
            <tr>
                <td>Complaint Filed</td>
                <td><b>{{ $casefileCourt->complaint_filed }}</b></td>
            </tr>
            <tr>
                <td>Initial Discovery End Date</td>
                <td><b>{{ $casefileCourt->ded }}</b></td>
            </tr>
            <tr>
                <td>Arbitration Date</td>
                <td><b>{{ $casefileCourt->arbitration_date }}</b></td>
            </tr>
            <tr>
                <td>Trial Date</td>
                <td><b>{{ $casefileCourt->trial_date }}</b></td>
            </tr>
            <tr>
                <td>Plaintiff Caption</td>
                <td><b>{{ $casefileCourt->plaintiff_caption }}</b></td>
            </tr>
            <tr>
                <td>Defendant Caption</td>
                <td><b>{{ $casefileCourt->defendant_caption }}</b></td>
            </tr>
            <tr>
                <td>Track Coord Name</td>
                <td><b>{{ $casefileCourt->track_coord_name }}</b></td>
            </tr>
            <tr>
                <td>Track Coord Phone</td>
                <td><b>{{ $casefileCourt->track_coord_phone }}</b></td>
            </tr>
            <tr>
                <td>Track Coord Extension</td>
                <td><b>{{ $casefileCourt->track_coord_extension }}</b></td>
            </tr>
            <tr>
                <td>Docket Number</td>
                <td><b>{{ $casefileCourt->docket_number }}</b></td>
            </tr>
            <tr>
                <td>Docket Number 2</td>
                <td><b>{{ $casefileCourt->docket_number2 }}</b></td>
            </tr>
            <tr>
                <td>Docket Number 3</td>
                <td><b>{{ $casefileCourt->docket_number3 }}</b></td>
            </tr>
            <tr>
                <td>Law Clerk</td>
                <td><b>{{ $casefileCourt->law_clerk }}</b></td>
            </tr>
            <tr>
                <td>Law Clerk Phone</td>
                <td><b>{{ $casefileCourt->law_clerk_phone }}</b></td>
            </tr>
            <tr>
                <td>Law Clerk Extension</td>
                <td><b>{{ $casefileCourt->law_clerk_extension }}</b></td>
            </tr>
            <tr>
                <td>Law Clerk Fax</td>
                <td><b>{{ $casefileCourt->law_clerk_fax }}</b></td>
            </tr>
            <tr>
                <td>Civil Case Manager Name</td>
                <td><b>{{ $casefileCourt->civil_case_manager_name }}</b></td>
            </tr>
            <tr>
                <td>Civil Case Manager Phone</td>
                <td><b>{{ $casefileCourt->civil_case_manager_phone }}</b></td>
            </tr>
            <tr>
                <td>Civil Case Manager Extension</td>
                <td><b>{{ $casefileCourt->civil_case_manager_extension }}</b></td>
            </tr>
            <tr>
                <td>Civil Case Manager Fax</td>
                <td><b>{{ $casefileCourt->civil_case_manager_fax }}</b></td>
            </tr>
        </tbody>
    </table><!--end /table-->
</div>
<br><br>
<a href="{{ route('cases.show', $case_file_id) }}" type="button" class="btn btn-secondary">Back</a>
</div>