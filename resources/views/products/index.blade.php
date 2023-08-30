@extends('layouts.header')

@section('title', 'Products')

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Default</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('products.list') }}" class="text-muted text-hover-primary">Products</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Index</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="{{ route('products.list') }}"
                            class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="11" width="13" height="2"
                                    rx="1" fill="currentColor"></rect>
                                <path
                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                    fill="currentColor"></path>
                            </svg>
                            <!--end::Svg Icon-->Back</a>
                        <!--end::Menu toggle-->
                    </div>
                </div>
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class=" container-xxl ">
                    <!--begin::Form-->
                    <form id="product_form" class="form d-flex flex-column flex-lg-row"
                        data-kt-redirect="{{ route('products.index') }}" action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Aside column-->
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Thumbnail</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('/assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('/assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <!--end::Image input placeholder-->

                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->

                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
                                        <!--end::Cancel-->

                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg
                                        image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <div class="rounded-circle bg-success w-15px h-15px"
                                            id="product_status"></div>
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" name="status"
                                        data-placeholder="Select an option" id="product_status_select">
                                        <option></option>
                                        <option value="published" selected>Published</option>
                                        <option value="draft">Draft</option>
                                        <option value="scheduled">Scheduled</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <!--end::Select2-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product status.</div>
                                    <!--end::Description-->

                                    <!--begin::Datepicker-->
                                    <div class="d-none mt-10">
                                        <label for="product_status_datepicker" class="form-label">Select
                                            publishing date and time</label>
                                        <input class="form-control" id="product_status_datepicker"
                                            placeholder="Pick date & time" />
                                    </div>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Status-->

                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Product Details</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label">categorie</label>
                                    <!--end::Label-->

                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option"
                                        data-allow-clear="true" multiple="multiple" name="category">
                                        <option></option>
                                        <option value="Computers">Computers</option>
                                        <option value="Watches">Watches</option>
                                        <option value="Headphones">Headphones</option>
                                        <option value="Footwear">Footwear</option>
                                        <option value="Cameras">Cameras</option>
                                        <option value="Shirts">Shirts</option>
                                        <option value="Household">Household</option>
                                        <option value="Handbags">Handbags</option>
                                        <option value="Wines">Wines</option>
                                        <option value="Sandals">Sandals</option>
                                    </select>
                                    <!--end::Select2-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Tags</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input id="product_tags" name="product_tags"
                                        class="form-control mb-2" value="" />
                                    <!--end::Input-->

                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Add tags to a product.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Category & tags-->
                        </div>
                        <!--end::Aside column-->

                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin:::Tabs-->
                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                        href="#product_general">General</a>
                                </li>
                                <!--end:::Tab item-->

                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                        href="#product_advanced">Advanced</a>
                                </li>
                                <!--end:::Tab item-->

                            </ul>
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="product_general"
                                    role="tab-panel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">

                                        <!--begin::General options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>General</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Product Name</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="product_name" class="form-control mb-2"
                                                        placeholder="Product name" value="" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">A product name is required and recommended to
                                                        be unique.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div>
                                                    <!--begin::Label-->
                                                    <label class="form-label">Description</label>
                                                    <!--end::Label-->

                                                    <!--begin::Editor-->
                                                    <div id="product_description"
                                                        name="product_description" class="min-h-200px mb-2">
                                                    </div>
                                                    <!--end::Editor-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a description to the product for better
                                                        visibility.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::General options-->
                                        <!--begin::Media-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Media</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-2">
                                                    <!--begin::Dropzone-->
                                                    <div class="dropzone" id="product_media">
                                                        <!--begin::Message-->
                                                        <div class="dz-message needsclick">
                                                            <!--begin::Icon-->
                                                            <i class="ki-duotone ki-file-up text-primary fs-3x"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or
                                                                    click to upload.</h3>
                                                                <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                                    files</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                    </div>
                                                    <!--end::Dropzone-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product media gallery.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Media-->

                                        <!--begin::Pricing-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Pricing</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Base Price</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="product_price" class="form-control mb-2"
                                                        placeholder="Product price" value="" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product price.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">
                                                        Discount Type


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Select a discount type that will be applied to this product">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>
                                                    <!--End::Label-->

                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                        data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="product_discount_type" value="1"
                                                                        checked="checked" />
                                                                </span>
                                                                <!--end::Radio-->

                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">No
                                                                        Discount</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary  d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="product_discount_type" value="2" />
                                                                </span>
                                                                <!--end::Radio-->

                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Percentage
                                                                        %</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                                data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="product_discount_type" value="3" />
                                                                </span>
                                                                <!--end::Radio-->

                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Fixed
                                                                        Price</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="d-none mb-10 fv-row"
                                                    id="product_discount_percentage">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Set Discount Percentage</label>
                                                    <!--end::Label-->

                                                    <!--begin::Slider-->
                                                    <div class="d-flex flex-column text-center mb-5">
                                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                                            <span class="fw-bold fs-3x"
                                                                id="product_discount_label">0</span>
                                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                        </div>
                                                        <div id="product_discount_slider" class="noUi-sm">
                                                        </div>
                                                    </div>
                                                    <!--end::Slider-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a percentage discount to be applied on
                                                        this product.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="d-none mb-10 fv-row" id="product_discount_fixed">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Fixed Discounted Price</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="product_discount" class="form-control mb-2"
                                                        placeholder="Discounted price" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the discounted product price. The product
                                                        will be reduced at the determined fixed price</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Tax-->
                                                <div class="d-flex flex-wrap gap-5">

                                                    <!--begin::Input group-->
                                                    <div class="fv-row w-100 flex-md-root">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Tax Amount (%)</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control mb-2" value="" name="product_tax"/>
                                                        <!--end::Input-->

                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product Tax about.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end:Tax-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Pricing-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="product_advanced" role="tab-panel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">

                                        <!--begin::Inventory-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Inventory</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">SKU</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="sku" class="form-control mb-2"
                                                        placeholder="SKU Number" value="" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Enter the product SKU.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Barcode</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" name="barcode" class="form-control mb-2"
                                                        placeholder="Barcode Number" value="" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Enter the product barcode number.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Quantity</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <div class="d-flex gap-3">
                                                        <input type="number" name="product_qty" class="form-control mb-2"
                                                            placeholder="product qty" value="" />
                                                    </div>
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Enter the product quantity.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Inventory-->

                                        <!--begin::Variations-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Variations</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Add Product Variations</label>
                                                    <!--end::Label-->

                                                    <!--begin::Repeater-->
                                                    <div id="product_types">
                                                        <!--begin::Form group-->
                                                        <div class="form-group">
                                                            <div data-repeater-list="product_types"
                                                                class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <!--begin::Select2-->
                                                                    <div class="w-100 w-md-200px">
                                                                        <select class="form-select" name="product_type"
                                                                            data-placeholder="Select a variation"
                                                                            data-kt-ecommerce-catalog-add-product="product_type">
                                                                            <option></option>
                                                                            <option value="color">Color</option>
                                                                            <option value="size">Size</option>
                                                                            <option value="material">Material</option>
                                                                            <option value="style">Style</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Select2-->
                                                                    <div data-repeater-item class="form-group d-flex flex-wrap align-items-center gap-5">

                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control mw-100 w-200px"
                                                                            name="product_type_value" placeholder="Variation" />
                                                                        <!--end::Input-->

                                                                        <button type="button" data-repeater-delete
                                                                            class="btn btn-sm btn-icon btn-light-danger">
                                                                            <i class="ki-duotone ki-cross-square">
                                                                            <i class="path1"></i>
                                                                            <i class="path2"></i>
                                                                            </i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Form group-->

                                                        <!--begin::Form group-->
                                                        <div class="form-group mt-5">
                                                            <button type="button" data-repeater-create
                                                                class="btn btn-sm btn-light-primary">
                                                                <i class="ki-duotone ki-plus fs-2"></i> Add another variation
                                                            </button>
                                                        </div>
                                                        <!--end::Form group-->
                                                    </div>
                                                    <!--end::Repeater-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Variations-->

                                        <!--begin::Meta options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Meta Options</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Meta Tag Title</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mb-2" name="meta_title"
                                                        placeholder="Meta tag name" />
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                                        and precise keywords.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Meta Tag Description</label>
                                                    <!--end::Label-->

                                                    <!--begin::Editor-->
                                                    <div id="product_meta_description"
                                                        name="product_meta_description"
                                                        class="min-h-100px mb-2"></div>
                                                    <!--end::Editor-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a meta tag description to the product for
                                                        increased SEO ranking.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div>
                                                    <!--begin::Label-->
                                                    <label class="form-label">Meta Tag Keywords</label>
                                                    <!--end::Label-->

                                                    <!--begin::Editor-->
                                                    <input id="product_meta_keywords"
                                                        name="product_meta_keywords"
                                                        class="form-control mb-2" />
                                                    <!--end::Editor-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set a list of keywords that the product is
                                                        related to. Separate the keywords by adding a comma <code>,</code>
                                                        between each keyword.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Meta options-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                            </div>
                            <!--end::Tab content-->

                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ route('products.index') }}"
                                    id="product_cancel" class="btn btn-light me-5">
                                    Cancel
                                </a>
                                <!--end::Button-->

                                <!--begin::Button-->
                                <button type="submit" id="" class="btn btn-primary">
                                    <span class="indicator-label">
                                        Save Changes
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->

    </div>
@endsection
@section('script')
<script src="{{ asset('/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
<script src="{{ asset('/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
@endsection