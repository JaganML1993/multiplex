@extends('admin.header')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    @if (session('status'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h4 class="fw-bold py-3 mb-4">Departments <a href="{{ url('admin/departments/create') }}" type="button" class="btn btn-success btn-lg" style="float: right;">Create Department</a></h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Department Name</th>
                        <th>Email</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($departments as $item)
                    
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{$item->name??''}}</td>
                        <td>{{ $item->email??'' }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('departments.edit',$item->id) }}"><i
                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('departments.destroy',$item->id) }}"><i class="bx bx-trash me-1"></i>
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