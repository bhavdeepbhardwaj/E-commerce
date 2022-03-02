@extends('backend.layouts.master')

@section('title')
    @lang('Admin Dashbord')
@stop

@section('css')

    <!-- No Extra plugin used -->



@endsection

@section('content')

    <!-- CONTENT WRAPPER -->

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Banner</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span> Add Banner
                    </p>
                </div>
                <div>
                    <a href="{{ route('banner.index') }}" class="btn btn-primary"> View All
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add Product</h2>
                        </div>

                        <div class="card-body">
                            @include('backend.component.flush')
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-12">
                                    <div class="ec-vendor-upload-detail">
                                        <form class="row g-3" action="{{ route('banner.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control slug-title" id="title" name="title">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Type</label>
                                                <select name="type" id="type" class="form-select">
                                                    <option value="">----------</option>
                                                    <option value="home">Home</option>
                                                    <option value="product">Product</option>
                                                    <option value="promo">Promo</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Slug</label>
                                                <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Url</label>
                                                <input type="text" class="form-control" id="url" name="url">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="2" name="description"
                                                    id="description"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-25">
                                                <label class="form-label">Website Banner Image </label>
                                                <div class="ec-vendor-img-upload">
                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" id="webImage" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" name="webImage">
                                                                <label for="webImage"><img
                                                                        src="{{ asset('backend/assets/img/icons/edit.svg') }}"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <img class="ec-image-preview"
                                                                        src="{{ asset('backend/assets/img/products/web.jpg') }}"
                                                                        alt="edit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                            class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text"
                                                        name="webImage">
                                                </div>
                                                <div id="holder" class="" style="margin-top:15px;height:100px;"></div> --}}
                                            </div>
                                            <div class="col-md-6 mb-25">
                                                <label class="form-label">Mobile Banner Image</label>
                                                <div class="ec-vendor-img-upload">
                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" id="mobImage" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" name="mobImage">
                                                                <label for="mobImage"><img
                                                                        src="{{ asset('backend/assets/img/icons/edit.svg') }}"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <img class="ec-image-preview"
                                                                        src="{{ asset('backend/assets/img/products/mob.png') }}"
                                                                        alt="edit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Banner Sequence</label>
                                                <input type="number" class="form-control" id="seq" name="seq">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">status</label>
                                                {{-- <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked
                                                        switch checkbox input</label>
                                                </div> --}}
                                                <select name="status" id="status" class="form-select">
                                                    <option value="">----------</option>
                                                    <option value="acitve">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" class="form-control" id="startDate" name="startDate">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">End Date</label>
                                                <input type="date" class="form-control" id="endDate" name="endDate">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div>

    <!-- End Content Wrapper -->

@endsection

@section('js')

    <!-- File Upload Rescource -->
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>

    <!-- Datatables -->
    <script src="{{ asset('backend/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>

@endsection
