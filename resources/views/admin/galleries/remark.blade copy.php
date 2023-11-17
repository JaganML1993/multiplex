@extends('admin.header')

@section('content')
<style>
.table td {
    padding: 0 rem !important;

}
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Remark Update</h4>
    <h4 class="fw-bold py-3 mb-4"> </h4>


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('update.remark-update', ['id' => $enquiry->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Remarks<span class="required_star">*</span></label>
                                <textarea type="text" class="form-control" value="" required name="remarks" />{{ $enquiry->remarks??''}}</textarea>
                            </div>

                    
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Status<span class="required_star">*</span></label>
                                <select class="form-control"  name="status">
                                    <option value="0" @if($enquiry->status == 0) selected @endif>Open</option>
                                    <option value="1" @if($enquiry->status == 1) selected @endif>Close</option>
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