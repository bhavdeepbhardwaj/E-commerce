@extends('backend.layouts.master')

@section('title')
    @lang('messages.title')
@stop

@section('content')

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Edit Banner</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Banner
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
                            <h2>Edit Banner</h2>
                        </div>
                        <div class="card-body">
                            @include('backend.component.flush')

                            <form action="{{ route('banner.update',$banner->id) }}" enctype="multipart/form-data" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-2">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' name="webImage" value="/images/Banners/{{ $banner->webImage }}" id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('backend/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" value="/images/Banners/{{ $banner->webImage }}" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="/images/Banners/{{ $banner->webImage }}"
                                                            value="/images/Banners/{{ $banner->webImage }}" alt="{{ $banner->webImage }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' name="mobImage" value="/images/Banners/{{ $banner->mobImage }}" id="imageUpload" class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('backend/assets/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" value="/images/Banners/{{ $banner->mobImage }}" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="/images/Banners/{{ $banner->mobImage }}"
                                                            value="/images/Banners/{{ $banner->mobImage }}" alt="{{ $banner->mobImage }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="ec-vendor-upload-detail">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Banner Title</label>
                                                <input type="text" class="form-control slug-title" name="title" value="{{ $banner->title }}" id="inputEmail4">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Select Type</label>
                                                <select name="type" id="Categories" class="form-select">
                                                    <option value="{{ $banner->type}}">{{ $banner->type }}</option>
                                                    <option value="home">Home</option>
                                                    <option value="product">Product</option>
                                                    <option value="promo">Promo</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="2" name="description" value="{{ $banner->description }}">{{ $banner->description}}</textarea>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="slug" class="col-6 col-form-label">Slug</label>
                                                <input id="slug" name="slug" class="form-control here set-slug" type="text" value="{{ $banner->slug }}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="url" class="col-6 col-form-label">URL</label>
                                                <input type="text" class="form-control" id="price1" name="url" value="{{ $banner->url }}">
                                            </div>

                                            <div class="col-md-6">

                                                <label for="seq" class="col-6 col-form-label">Sequence</label>
                                                <input type="number" class="form-control" id="price1" name="seq" value="{{ $banner->seq }}">

                                            </div>

                                            <div class="col-md-6">
                                                <label  for="status" class="col-6 col-form-label">Status</label>
                                              <select name="status" id="status" value="" {{  ($banner->status == 'active' ? ' checked' : '') }} class="form-select">
                                                  <option value="{{ $banner->status }}">{{ $banner->status }}</option>
                                                  <option value="active">Active</option>
                                                  <option value="inactive">Inactive</option>
                                              </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" class="form-control" id="price1" name="startDate" value="{{ $banner->startDate }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">End Date</label>
                                                <input type="date" class="form-control" id="price1" name="endDate" value="{{ $banner->endDate }}">
                                            </div>
                                            <div class="col-md-12 py-2">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
