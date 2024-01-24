@extends('admin.header')

@section('content')
<style>
    .table td {
        padding: 0 rem !important;

    }
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Create Product</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Product Name<span class="required_star">*</span></label>
                                <input type="text" class="form-control" name="name" />
                                @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Main Image<span class="required_star">*</span></label>
                                <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">
                                @if($errors->has('image'))
                                <div class="error">{{ $errors->first('image') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Front Image<span class="required_star">*</span></label>
                                <input type="file" class="form-control" name="front_image" accept="image/png, image/jpeg">
                                @if($errors->has('front_image'))
                                <div class="error">{{ $errors->first('front_image') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Back Image</label>
                                <input type="file" class="form-control" name="back_image" accept="image/png, image/jpeg">
                                @if($errors->has('back_image'))
                                <div class="error">{{ $errors->first('back_image') }}</div>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Benefits</label>
                                <textarea class="form-control" name="benefits" id="benefits" rows="4"></textarea>
                                @if($errors->has('benefits'))
                                <div class="error">{{ $errors->first('benefits') }}</div>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Special Features</label>
                                <textarea class="form-control" name="special_features" id="special_features" rows="4"></textarea>
                                @if($errors->has('special_features'))
                                <div class="error">{{ $errors->first('special_features') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Product Leaflet</label>
                                <input type="file" class="form-control" name="catelog_link" accept=".pdf" />
                                @if($errors->has('catelog_link'))
                                    <div class="error">{{ $errors->first('catelog_link') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Category<span class="required_star">*</span></label>
                                <select class="form-control" name="category" id="category">
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Sub Category</label>
                                <select class="form-control" name="subcategory" id="subcategory">
                                    <option value="">Please Select</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Status<span class="required_star">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Video Link</label>
                                <input type="text" class="form-control" name="video_link" />
                                @if($errors->has('video_link'))
                                <div class="error">{{ $errors->first('video_link') }}</div>
                                @endif
                            </div>


                        </div>

                        <div class="gap1" style="margin-top:20px;">
                            <hr style="background-color:green; height:2px;">
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Specifications</label>
                                <textarea class="form-control" name="composition" id="composition" rows="4"></textarea>
                                @if($errors->has('composition'))
                                <div class="error">{{ $errors->first('composition') }}</div>
                                @endif
                            </div>
                            
                            <div class="gap1" style="margin-top:20px;">
                                <hr style="background-color:green; height:2px;">
                            </div>
                            

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Type of Deficiency</label>
                                <input type="text" class="form-control" name="type_of_deficiency" id="type_of_deficiency">
                                @if($errors->has('type_of_deficiency'))
                                    <div class="error">{{ $errors->first('type_of_deficiency') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Image 1</label>
                                <input type="file" class="form-control" name="image1" id="image1">
                                @if($errors->has('image1'))
                                    <div class="error">{{ $errors->first('image1') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Image 2</label>
                                <input type="file" class="form-control" name="image2" id="image2">
                                @if($errors->has('image2'))
                                    <div class="error">{{ $errors->first('image2') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="basic-default-package-of-practices">Role of Deficiency</label>
                                <input type="text" class="form-control" name="role_of_deficiency" id="role_of_deficiency">
                                @if($errors->has('role_of_deficiency'))
                                    <div class="error">{{ $errors->first('role_of_deficiency') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="basic-default-time-of-erection">Role of Deficiency Description</label>
                                <textarea class="form-control" name="role_description" id="role_description" rows="4"></textarea>
                                @if($errors->has('role_description'))
                                    <div class="error">{{ $errors->first('role_description') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label class="col-form-label" for="basic-default-package-of-practices">Deficiency</label>
                                <input type="text" class="form-control" name="deficiency" id="deficiency">
                                @if($errors->has('deficiency'))
                                    <div class="error">{{ $errors->first('deficiency') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="basic-default-time-of-erection">Deficiency Description</label>
                                <textarea class="form-control" name="deficiency_description" id="deficiency_description" rows="4"></textarea>
                                @if($errors->has('deficiency_description'))
                                    <div class="error">{{ $errors->first('deficiency_description') }}</div>
                                @endif
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
    $(document).ready(function() {
        getSubCategory($("#category option:selected").val());

        $('#category').on('change', function(e) {
            var cat_id = e.target.value;
            getSubCategory(cat_id);
        });
    });

    function getSubCategory(cat_id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{!! route('ajax.subcat','') !!}",
            type: 'post',
            dataType: 'json',
            data: {
                _token: CSRF_TOKEN,
                id: cat_id,
            },
            success: function(response) {

                var subCategory = '<option value="">Please Select</option>';
                for (var i in response) {
                    subCategory += '<option value="' + response[i].id + '">' + response[i].name + '</option>';
                }
                $('#subcategory').html(subCategory);

            }
        });
    }
</script>

<script>
    CKEDITOR.replace('composition', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('benefits', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('special_features', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('role_description', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('deficiency_description', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });
</script>

@endsection