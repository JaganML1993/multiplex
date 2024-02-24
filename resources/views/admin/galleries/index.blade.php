@extends('admin.header')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">Galleries<a href="{{ url('admin/galleries/create') }}" type="button" class="btn btn-success btn-lg" style="float: right;">Add Gallery</a></h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table" id="tablePagination">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>{{ $gallery->category }}</td>
                            <td>
                                @if ($gallery->image)
                                    <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->category }}" style="max-width: 100px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <!-- Add your action buttons here, e.g., Edit, Delete -->
                                <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gallery?')">Delete</button>
                                </form>
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
    $(document).ready(function () {
        $('#tablePagination').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>

@endsection