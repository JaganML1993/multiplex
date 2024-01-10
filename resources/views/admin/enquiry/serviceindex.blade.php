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
                        <th>message</th>
                        <th>Remarks</th>
                        <th>Status</th>
                        <th>Created on</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach($enquiries as $enquiry)
                    <tr>
                        <td>{{$enquiry->serial_id??''}}</td>
                        <td>{{$enquiry->name}}</td>
                        <td>{{$enquiry->phone}}</td>
                        <td>{{$enquiry->email}}</td>
                        <td>{{$enquiry->location}}</td>
                        <td>{{$enquiry->message}}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <a href="{{ route('update.remark', ['id' => $enquiry->id]) }}" class="btn btn-primary" >
                                Update Remark
                            </a>
                
                        </td>
                        <td style="color: {{ $enquiry->status ? 'red' : 'green' }}">
                            {{ $enquiry->status ? 'closed' : 'open' }}
                        </td>
                        <td>{{date('d-m-Y h:i A', strtotime($enquiry->created_at))}}</td>
                    </tr>
                    @php 
                        $i++;
                    @endphp
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
    $(document).ready(function () {
        $('#tablePagination').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>

@endsection