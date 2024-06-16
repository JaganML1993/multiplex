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

    <h4 class="fw-bold py-3 mb-4">Bannner<a href="{{ url('admin/banner/create') }}" type="button" class="btn btn-success btn-lg" style="float: right;">Update Banner</a></h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($banner as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>
                                @if ($gallery->image)
                                    <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->image }}" style="max-width: 100px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ date('Y-m-d h:i A', strtotime($gallery->created_at)) }}</td>
                            <td>{{ date('Y-m-d h:i A', strtotime($gallery->updated_at)) }}</td>
                            <!-- <td>
                                <a href="{{ route('banner.edit', $gallery->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('banner.destroy', $gallery->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                </form>
                            </td> -->
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
    $(document).ready(function () {
        $('#tablePagination').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>

@endsection