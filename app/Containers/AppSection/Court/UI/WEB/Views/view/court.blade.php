<div class="p-4 pt-3">

<div class="table-responsive">
    <table class="table mb-0">
        <tbody>
            <tr>
                <td>County</td>
                <td><b>{{ $court->court_county_lowcaps }}</b></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><b>{{ $court->court_name }}</b></td>
            </tr>
            <tr>
                <td>Street Address</td>
                <td><b>{{ $court->court_address1 }}</b></td>
            </tr>
            <tr>
                <td>PO Box</td>
                <td><b>{{ $court->court_address2 }}</b></td>
            </tr>
            <tr>
                <td>City</td>
                <td><b>{{ $court->court_city }}</b></td>
            </tr>
            <tr>
                <td>State</td>
                <td><b>{{ $court->court_state }}</b></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><b>{{ $court->court_zip }}</b></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><b>{{ $court->court_phone }}</b></td>
            </tr>
            <tr>
                <td>Fax</td>
                <td><b>{{ $court->court_fax }}</b></td>
            </tr>
            <tr>
                <td>Extension</td>
                <td><b>{{ $court->court_extension }}</b></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><b>{{ $court->court_contact }}</b></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><b>{{ $court->court_email }}</b></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <b>@if($court->court_type == 'S') State @elseif($court->court_type == 'F') Federal @else {{ $court->court_type }} @endif</b>
                </td>
            </tr>
        </tbody>
    </table><!--end /table--> 
</div>

</div>