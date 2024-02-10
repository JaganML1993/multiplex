@extends('admin.header')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">Enquries</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>Serial ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Message</th>
                        <th>Department</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Created on</th>
                        <th class="exclude">Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach($enquiries as $enquiry)
                    <tr>
                        <td>{{$enquiry->serial_id??''}}</td>
                        <td>{{$enquiry->name}}</td>
                        <td>{{$enquiry->phone}}</td>
                        <td>{{$enquiry->email}}</td>
                        <td>{{$enquiry->location}}</td>
                        <td>{{$enquiry->message}}</td>
                        <td>{{$enquiry->department}}</td>
                        <td>{{$enquiry->remarks}}</td>
                        <td style="color: {{ $enquiry->status ? 'red' : 'green' }}">
                            {{ $enquiry->status ? 'closed' : 'open' }}
                        </td>
                        <td>{{date('d-m-Y h:i A', strtotime($enquiry->created_at))}}</td>
                        <td class="exclude">
                            <!-- Button trigger modal -->
                            <a href="{{ route('update.remark', ['id' => $enquiry->id]) }}" class="btn btn-primary">
                                Update Remark
                            </a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- / Content -->
@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function() {
        $('#tablePagination').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'csv',
                    exportOptions: {
                        columns: ':not(.exclude)'
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':not(.exclude)'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':not(.exclude)'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':not(.exclude)'
                    }
                }
            ]
        });
    });
</script>

@endsection