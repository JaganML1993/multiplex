@extends('admin.header')

@section('content')
<style>
    .table td {
        padding: 0 rem !important;

    }
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Update Banner</h4>
    <h4 class="fw-bold py-3 mb-4"> </h4>


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Image<span class="required_star">*</span></label>
                                <input type="file" class="form-control" name="image" accept="image/*" required>
                            </div>
                        </div>

                        @if(!empty($banner))
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label">Current Image</label>
                                <br>
                                @if ($banner->image)
                                <img src="{{ asset('images/' . $banner->image) }}" alt="{{ $banner->category }}" style="max-width: 200px;">
                                @else
                                No Image
                                @endif
                            </div>
                        </div>
                        @endif

                        <br>

                        <div class="row justify-content-start">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- / Content -->
@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection