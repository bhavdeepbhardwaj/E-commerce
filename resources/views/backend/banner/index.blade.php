@extends('backend.layouts.master')

@section('title')
    @lang('Admin Dashbord')
@stop

@section('css')

    <!-- No Extra plugin used -->

    <link href="{{ asset('backend/assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('backend/assets/plugins/data-tables/responsive.datatables.min.css') }}" rel='stylesheet'>

    <style>

    </style>

@endsection

@section('content')

    <!-- CONTENT WRAPPER -->

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Banner</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin')}}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Banner
                    </p>
                </div>
                <div>
                    <a href="{{ route('banner.create')}}" class="btn btn-primary"> Add Banner</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            @include('backend.component.flush')
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Slug</th>
                                            <th>Type</th>
                                            <th>Web Banner</th>
                                            <th>Mob Banner</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Seq</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($banners as $banner)
                                        <tr>
                                            <td>{{ $banner->slug }}</td>
                                            <td>{{ $banner->type }}</td>
                                            <td class="pt-0"><img class="img-thumbnail"
                                                    src="/images/Banners/{{ $banner->webImage }}"
                                                    alt="Product Image" /></td>
                                            <td><img class="img-thumbnail"
                                                    src="/images/Banners/{{ $banner->mobImage }}"
                                                    alt="Product Image" /></td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->description }}</td>
                                            <td>{{ $banner->seq }}</td>
                                            <td><div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="active" {{  ($banner->status == 'active' ? ' checked' : '') }}>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                              </div></td>
                                            <td>{{ $banner->startDate }}</td>
                                            <td>

                                                <div class="">
                                                    <a class="dropdown-item" href="{{ route('banner.edit',$banner->id)}}"><i class="fa-icon fas fa-edit fa-lg"></i></a>
                                                    <a class="dropdown-item" href="{{ route('banner.edit',$banner->id)}}"><i class="fa-icon far fa-trash-alt fa-lg"></i></a>
                                                </div>

                                                {{-- <div class="btn-group mb-1">
                                                    <button type="button" class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('banner.edit',$banner->id)}}">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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


    <!-- Datatables -->
    <script src="{{ asset('backend/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>

@endsection
