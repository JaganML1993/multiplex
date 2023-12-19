@extends('admin.header')

@section('content')
<style>
.table td {
    padding: 0 rem !important;

}
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Create Category</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.save.category') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Category<span class="required_star">*</span></label>
                                <input type="text" class="form-control" required name="name" />
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Description<span class="required_star">*</span></label>
                                <textarea class="form-control" name="description" rows="4" required></textarea>
                            </div>


                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Catalog PDF</label>
                                <input type="file" class="form-control" name="catelog_link" accept=".pdf" />
                                @if($errors->has('catelog_link'))
                                    <div class="error">{{ $errors->first('catelog_link') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Category Thumbnail<span class="required_star">*</span></label>
                                <input type="file" class="form-control" required name="image" accept="image/png, image/jpeg">
                            </div>
                      
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Status<span class="required_star">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

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