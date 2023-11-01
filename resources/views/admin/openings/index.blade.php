@extends('admin.header')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">Openings <a href="{{ route('opening.create') }}" type="button" class="btn btn-danger btn-lg" style="float: right;">Create</a></h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Location</th>
                        <th>Position</th>
                        <th>Vacancies</th>
                        <th>Created on</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->locations->location}}</td>
                        <td>{{$item->position}}</td>
                        <td>{{$item->vacancies}}</td>
                        <td>{{date('d-m-Y h:i A', strtotime($item->created_at))}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('opening.edit',$item->id) }}"><i
                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('opening.delete',$item->id) }}"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                                </div>
                            </div>
                        </td>
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