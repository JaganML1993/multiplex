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

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Benefits</label>
                                <textarea class="form-control" name="benefits" id="benefits" rows="4"></textarea>
                                @if($errors->has('benefits'))
                                <div class="error">{{ $errors->first('benefits') }}</div>
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
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Crop</label>
                                <textarea class="form-control" name="crop" id="crop" rows="4"></textarea>
                                @if($errors->has('crop'))
                                <div class="error">{{ $errors->first('crop') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Dosage & Methods of Application</label>
                                <textarea class="form-control" name="dosage" id="dosage" rows="4"></textarea>
                                @if($errors->has('dosage'))
                                <div class="error">{{ $errors->first('dosage') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Available Packing</label>
                                <textarea class="form-control" name="packing" id="packing" rows="4"></textarea>
                                @if($errors->has('packing'))
                                <div class="error">{{ $errors->first('packing') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Composition</label>
                                <textarea class="form-control" name="composition" id="composition" rows="4"></textarea>
                                @if($errors->has('composition'))
                                <div class="error">{{ $errors->first('composition') }}</div>
                                @endif
                            </div>
                            

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-active-ingredients">Active Ingredients</label>
                                <textarea class="form-control" name="active_ingredients" id="active_ingredients" rows="4"></textarea>
                                @if($errors->has('active_ingredients'))
                                    <div class="error">{{ $errors->first('active_ingredients') }}</div>
                                @endif
                            </div>
                            
                            <!-- Repeat the above block for each additional field -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-mode-of-action">Mode Of Action</label>
                                <textarea class="form-control" name="mode_of_action" id="mode_of_action" rows="4"></textarea>
                                @if($errors->has('mode_of_action'))
                                    <div class="error">{{ $errors->first('mode_of_action') }}</div>
                                @endif
                            </div>

                            <!-- Precautions -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-precautions">Precautions</label>
                                <textarea class="form-control" name="precautions" id="precautions" rows="4"></textarea>
                                @if($errors->has('precautions'))
                                    <div class="error">{{ $errors->first('precautions') }}</div>
                                @endif
                            </div>

                            <!-- Special Features -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-special-features">Special Features</label>
                                <textarea class="form-control" name="special_features" id="special_features" rows="4"></textarea>
                                @if($errors->has('special_features'))
                                    <div class="error">{{ $errors->first('special_features') }}</div>
                                @endif
                            </div>

                            <!-- Time of Erection -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-time-of-erection">Time of Erection</label>
                                <textarea class="form-control" name="time_of_erection" id="time_of_erection" rows="4"></textarea>
                                @if($errors->has('time_of_erection'))
                                    <div class="error">{{ $errors->first('time_of_erection') }}</div>
                                @endif
                            </div>

                            <!-- Note -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-note">Note</label>
                                <textarea class="form-control" name="note" id="note" rows="4"></textarea>
                                @if($errors->has('note'))
                                    <div class="error">{{ $errors->first('note') }}</div>
                                @endif
                            </div>

                            <!-- Plant Type -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-plant-type">Plant Type</label>
                                <textarea class="form-control" name="plant_type" id="plant_type" rows="4"></textarea>
                                @if($errors->has('plant_type'))
                                    <div class="error">{{ $errors->first('plant_type') }}</div>
                                @endif
                            </div>

                            <!-- Plant Height -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-plant-height">Plant Height</label>
                                <input type="text" class="form-control" name="plant_height" id="plant_height">
                                @if($errors->has('plant_height'))
                                    <div class="error">{{ $errors->first('plant_height') }}</div>
                                @endif
                            </div>

                            <!-- Duration -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-duration">Duration</label>
                                <input type="text" class="form-control" name="duration" id="duration">
                                @if($errors->has('duration'))
                                    <div class="error">{{ $errors->first('duration') }}</div>
                                @endif
                            </div>

                            <!-- Fruit Shape -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-fruit-shape">Fruit Shape</label>
                                <input type="text" class="form-control" name="fruit_shape" id="fruit_shape">
                                @if($errors->has('fruit_shape'))
                                    <div class="error">{{ $errors->first('fruit_shape') }}</div>
                                @endif
                            </div>

                            <!-- Fruit Weight -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-fruit-weight">Fruit Weight</label>
                                <input type="text" class="form-control" name="fruit_weight" id="fruit_weight">
                                @if($errors->has('fruit_weight'))
                                    <div class="error">{{ $errors->first('fruit_weight') }}</div>
                                @endif
                            </div>

                            <!-- Crud weight -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-crud-weight">Crud Weight</label>
                                <input type="text" class="form-control" name="crud_weight" id="crud_weight">
                                @if($errors->has('crud_weight'))
                                    <div class="error">{{ $errors->first('crud_weight') }}</div>
                                @endif
                            </div>

                            <!-- Fruit Color -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-fruit-color">Fruit Color</label>
                                <input type="text" class="form-control" name="fruit_color" id="fruit_color">
                                @if($errors->has('fruit_color'))
                                    <div class="error">{{ $errors->first('fruit_color') }}</div>
                                @endif
                            </div>

                            <!-- Fruit Length -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-fruit-length">Fruit Length</label>
                                <input type="text" class="form-control" name="fruit_length" id="fruit_length">
                                @if($errors->has('fruit_length'))
                                    <div class="error">{{ $errors->first('fruit_length') }}</div>
                                @endif
                            </div>

                            <!-- Pod Length -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-pod-length">Pod Length</label>
                                <input type="text" class="form-control" name="pod_length" id="pod_length">
                                @if($errors->has('pod_length'))
                                    <div class="error">{{ $errors->first('pod_length') }}</div>
                                @endif
                            </div>

                            <!-- Flowering -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-flowering">Flowering</label>
                                <input type="text" class="form-control" name="flowering" id="flowering">
                                @if($errors->has('flowering'))
                                    <div class="error">{{ $errors->first('flowering') }}</div>
                                @endif
                            </div>

                            <!-- Fruit Bearing -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-fruit-bearing">Fruit Bearing</label>
                                <input type="text" class="form-control" name="fruit_bearing" id="fruit_bearing">
                                @if($errors->has('fruit_bearing'))
                                    <div class="error">{{ $errors->first('fruit_bearing') }}</div>
                                @endif
                            </div>

                            <!-- Root Length -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-root-length">Root Length</label>
                                <input type="text" class="form-control" name="root_length" id="root_length">
                                @if($errors->has('root_length'))
                                    <div class="error">{{ $errors->first('root_length') }}</div>
                                @endif
                            </div>

                            <!-- Harvesting -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-harvesting">Harvesting</label>
                                <input type="text" class="form-control" name="harvesting" id="harvesting">
                                @if($errors->has('harvesting'))
                                    <div class="error">{{ $errors->first('harvesting') }}</div>
                                @endif
                            </div>

                            <!-- Package Of Practices -->
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Package Of Practices</label>
                                <input type="text" class="form-control" name="package_of_practices" id="package_of_practices">
                                @if($errors->has('package_of_practices'))
                                    <div class="error">{{ $errors->first('package_of_practices') }}</div>
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
    ClassicEditor
        .create(document.querySelector('#benefits'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#crop'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#dosage'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#packing'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#composition'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#active_ingredients'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#mode_of_action'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#precautions'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#special_features'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#time_of_erection'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#note'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });


        ClassicEditor
        .create(document.querySelector('#plant_type'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#role_description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#deficiency_description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection