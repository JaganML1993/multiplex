@extends('admin.header')

@section('content')
<style>
    .table td {
        padding: 0 rem !important;

    }
</style>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Openings</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('opening.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$openings->id}}">
                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Location<span class="required_star">*</span></label>
                                <select class="form-control" name="location" >
                                    @foreach($location as $item)
                                    <option value="{{$item->id}}" @if($item->id == $openings->location) selected @endif>{{$item->location}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @php

                            $departments = \App\Models\Department::where('type',2)->get();

                          @endphp
                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Department<span class="required_star">*</span></label>
                                <select class="form-control" name="department">
                                    @foreach($departments as $department)
                                       <option value="{{ $department->id }}" @if($department->id == $openings->department) selected @endif>{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Position<span class="required_star">*</span></label>
                                <input type="text" class="form-control" name="position" value="{{$openings->position}}"/>
                                @if($errors->has('position'))
                                <div class="error">{{ $errors->first('position') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Vacancies<span class="required_star">*</span></label>
                                <input type="number" class="form-control" name="vacancies" value="{{$openings->vacancies}}"/>
                                @if($errors->has('vacancies'))
                                <div class="error">{{ $errors->first('vacancies') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Job Description<span class="required_star">*</span></label>
                                <textarea class="form-control" name="description" id="description" rows="4"><?php echo $openings->description ?></textarea>
                                @if($errors->has('description'))
                                <div class="error">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Roles & Responsibilities<span class="required_star">*</span></label>
                                <textarea class="form-control" name="roles" id="roles" rows="4"><?php echo $openings->roles ?></textarea>
                                @if($errors->has('roles'))
                                <div class="error">{{ $errors->first('roles') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="col-form-label" for="basic-default-name">Qualification & Experience<span class="required_star">*</span></label>
                                <textarea class="form-control" name="qualification" id="qualification" rows="4"><?php echo $openings->qualification ?></textarea>
                                @if($errors->has('qualification'))
                                <div class="error">{{ $errors->first('qualification') }}</div>
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
    CKEDITOR.replace('description', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('roles', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });

    CKEDITOR.replace('qualification', {
        height: 200, // You can adjust the height as needed
        // Other CKEditor configuration options if needed
    });
</script>
@endsection