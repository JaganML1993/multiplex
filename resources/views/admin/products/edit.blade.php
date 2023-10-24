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
                                <label class="col-form-label" for="basic-default-name">Name<span class="required_star">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}"/>
                                @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
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

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Benefits<span class="required_star">*</span></label>
                                <textarea class="form-control" name="benefits" id="benefits" rows="4">{{$data->benefits}}</textarea>
                                @if($errors->has('benefits'))
                                <div class="error">{{ $errors->first('benefits') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Category<span class="required_star">*</span></label>
                                <select class="form-control" name="category" id="category">
                                    @foreach($category as $item)    
                                    <option value="{{$item->id}}" @if($data->category_id == $item->id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Sub Category</label>
                                <select class="form-control" name="subcategory" id="subcategory">
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

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Catelog Link</label>
                                <input type="text" class="form-control" name="catelog_link" value="{{$data->catelog_link}}" />
                                @if($errors->has('catelog_link'))
                                <div class="error">{{ $errors->first('catelog_link') }}</div>
                                @endif
                            </div>

                        </div>
                        <br>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Crop</label>
                                <textarea class="form-control" name="crop" id="crop" rows="4">{{$data->crop}}</textarea>
                                @if($errors->has('crop'))
                                <div class="error">{{ $errors->first('crop') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Dosage & Methods of Application</label>
                                <textarea class="form-control" name="dosage" id="dosage" rows="4">{{$data->dosage}}</textarea>
                                @if($errors->has('dosage'))
                                <div class="error">{{ $errors->first('dosage') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Available Packing</label>
                                <textarea class="form-control" name="packing" id="packing" rows="4">{{$data->packing}}</textarea>
                                @if($errors->has('packing'))
                                <div class="error">{{ $errors->first('packing') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Composition</label>
                                <textarea class="form-control" name="composition" id="composition" rows="4">{{$data->composition}}</textarea>
                                @if($errors->has('composition'))
                                <div class="error">{{ $errors->first('composition') }}</div>
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
</script>

@endsection