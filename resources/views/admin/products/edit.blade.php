@extends('admin.header')

@section('content')
<style>
    .table td {
        padding: 0 rem !important;

    }
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Product</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Product Name<span class="required_star">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" />
                                @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Main Image<span class="required_star">*</span></label>
                                <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">
                                @if ($data->image)
                                <a href="{{ url('').'/'.$data->image }}" target="_blank"><img src="{{ url('').'/'.$data->image }}" style="width:40%; margin-top: 10px;"></a>
                                @endif
                                @if($errors->has('image'))
                                <div class="error">{{ $errors->first('image') }}</div>
                                @endif
                            </div>

                            @php
                            if ($data->front_image){
                            $required = '';
                            }else{
                            $required = 'required';
                            }
                            @endphp
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Front Image<span class="required_star">*</span></label>
                                <input type="file" class="form-control" name="front_image" accept="image/png, image/jpeg" {{ $required }}>
                                @if ($data->front_image)
                                <a href="{{ url('').'/'.$data->front_image }}" target="_blank"><img src="{{ url('').'/'.$data->front_image }}" style="width:40%; margin-top: 10px;"></a>
                                @endif
                                @if($errors->has('front_image'))
                                <div class="error">{{ $errors->first('front_image') }}</div>
                                @endif
                            </div>

                            @php
                            if ($data->back_image){
                            $required = '';
                            }else{
                            $required = 'required';
                            }
                            @endphp
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Back Image</label>
                                <input type="file" class="form-control" name="back_image" accept="image/png, image/jpeg">
                                @if ($data->back_image)
                                <a href="{{ url('').'/'.$data->back_image }}" target="_blank"><img src="{{ url('').'/'.$data->back_image }}" style="width:40%; margin-top: 10px;"></a>
                                @endif
                                @if($errors->has('back_image'))
                                <div class="error">{{ $errors->first('back_image') }}</div>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Benefits</label>
                                <textarea class="form-control" name="benefits" id="benefits" rows="4">{{$data->benefits}}</textarea>
                                @if($errors->has('benefits'))
                                <div class="error">{{ $errors->first('benefits') }}</div>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Special Features</label>
                                <textarea class="form-control" name="special_features" id="special_features" rows="4">{{$data->special_features}}</textarea>
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
                                @if($data->catelog_link)
                                <span>{{ $data->catelog_link }}</span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Category<span class="required_star">*</span></label>
                                <select class="form-control" name="category_id" id="category">
                                    @foreach($category as $item)
                                    <option value="{{$item->id}}" @if($data->category_id == $item->id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Sub Category</label>
                                <select class="form-control" name="sub_category_id" id="subcategory">
                                    <option value="">Please Select</option>
                                    @foreach($subCategory as $item)
                                    <option value="{{$item->id}}" @if($data->sub_category_id == $item->id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Status<span class="required_star">*</span></label>
                                <select class="form-control" name="status">
                                    <option value="1" @if($data->status == 1) selected @endif>Active</option>
                                    <option value="0" @if($data->status == 0) selected @endif>Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Video Link</label>
                                <input type="text" class="form-control" name="video_link" value="{{$data->video_link}}" />
                                @if($errors->has('video_link'))
                                <div class="error">{{ $errors->first('video_link') }}</div>
                                @endif
                            </div>



                        </div>
                        <br>
                        <hr>

                            <div class="col-md-12">
                                <label class="col-form-label" for="basic-default-name">Specifications</label>
                                <textarea class="form-control" name="composition" id="composition" rows="4">{{$data->composition}}</textarea>
                                @if($errors->has('composition'))
                                <div class="error">{{ $errors->first('composition') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Type of Deficiency</label>
                                <input type="text" class="form-control" name="type_of_deficiency" id="type_of_deficiency" value="{{$data->type_of_deficiency ?? ''}}">
                                @if($errors->has('type_of_deficiency'))
                                <div class="error">{{ $errors->first('type_of_deficiency') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Image 1</label>
                                <input type="file" class="form-control" name="image1" id="image1">
                                @if ($data->image1)
                                <a href="{{ url('').'/'.$data->image1 }}" target="_blank"><img src="{{ url('').'/'.$data->image1 }}" style="width:40%; margin-top: 10px;"></a>
                                @endif
                                @if($errors->has('image1'))
                                <div class="error">{{ $errors->first('image1') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Image 2</label>
                                <input type="file" class="form-control" name="image2" id="image2">
                                @if ($data->image2)
                                <a href="{{ url('').'/'.$data->image2 }}" target="_blank"><img src="{{ url('').'/'.$data->image2 }}" style="width:40%; margin-top: 10px;"></a>
                                @endif
                                @if($errors->has('image2'))
                                <div class="error">{{ $errors->first('image2') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Role of Deficiency</label>
                                <input type="text" class="form-control" name="role_of_deficiency" id="role_of_deficiency" value="{{$data->role_of_deficiency ?? ''}}">
                                @if($errors->has('role_of_deficiency'))
                                <div class="error">{{ $errors->first('role_of_deficiency') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-time-of-erection">Role of Deficiency Description</label>
                                <textarea class="form-control" name="role_description" id="role_description" rows="4">{{$data->role_description ?? ''}}</textarea>
                                @if($errors->has('role_description'))
                                <div class="error">{{ $errors->first('role_description') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-package-of-practices">Deficiency</label>
                                <input type="text" class="form-control" name="deficiency" id="deficiency" value="{{$data->deficiency ?? ''}}">
                                @if($errors->has('deficiency'))
                                <div class="error">{{ $errors->first('deficiency') }}</div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-time-of-erection">Deficiency Description</label>
                                <textarea class="form-control" name="deficiency_description" id="deficiency_description" rows="4">{{$data->deficiency_description ?? ''}}</textarea>
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
        getSubCategory($('#category').val());
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