@extends('admin.header')

@section('content')
<style>
.table td {
    padding: 0 rem !important;

}
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Department</h4>

    <h4 class="fw-bold py-3 mb-4"> <a href="{{ url('admin/departments') }}" type="button" class="btn btn-success btn-lg" style="float: right;">Back</a></h4>


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('departments.update', $department->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Department<span class="required_star">*</span></label>
                                <input type="text" class="form-control" required name="name" value="{{ $department->name }}" />
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Type<span class="required_star">*</span></label>
                                <select class="form-control"  name="type">
                                    <option value="1" @if($department->type == 1) selected @endif>Enquiry</option>
                                    <option value="2" @if($department->type == 2) selected @endif>Job</option>
                                </select>
                              
                            </div>
                    
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Email Address<span class="required_star">*</span></label>
                                <input type="email" class="form-control" required name="email" value="{{ $department->email }}" />
                            </div>
                        </div>
                    
                        <br>
                    
                        <div class="row justify-content-start">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Update</button>
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