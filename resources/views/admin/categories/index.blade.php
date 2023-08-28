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
    <h4 class="fw-bold py-3 mb-4">Categories <a href="{{ route('admin.create.category') }}" type="button" class="btn btn-danger btn-lg" style="float: right;">Create Category</a></h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Created On</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $item)
                    @php
                        if($item->status == 1){
                            $status = '<span class="badge bg-label-success me-1">Active</span>';
                        }else{
                            $status = '<span class="badge bg-label-warning me-1">In-Active</span>';
                        }
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{$item->name}}</td>
                        <td><?php echo $status ?></td>
                        <td>{{ date('d-m-Y',strtotime($item->created_at)) }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.edit.category',$item->id) }}"><i
                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('admin.delete.category',$item->id) }}"><i class="bx bx-trash me-1"></i>
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