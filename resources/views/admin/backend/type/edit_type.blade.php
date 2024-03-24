@extends('admin.body.app')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="page-content">


        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Edit Property Type</h6>

                            <form method="post" action="{{ route('propertyTypes.update', $propertyType->id) }}"
                                class="forms-sample">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Type Name</label>
                                    <input type="text"
                                        class="form-control @error('type_name')
                                        is-invalid
                                    @enderror"
                                        name="type_name" id="type_name" autocomplete="off"
                                        value="{{ $propertyType->type_name }}">
                                    @error('type_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Type Icon</label>
                                    <input type="text"
                                        class="form-control @error('type_icon')
                                        is-invalid
                                    @enderror"
                                        name="type_icon" id="type_icon" autocomplete="off"
                                        value="{{ $propertyType->type_icon }}">
                                    @error('type_icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>





                                <button type="submit" class="btn btn-primary me-2">Update Changes</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->

            <!-- right wrapper end -->
        </div>

    </div>
@endsection
