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
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form"
                    class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                    data-kt-redirect="">
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"
                        data-select2-id="select2-data-118-jwrc">
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
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        aria-label="Change avatar" data-bs-original-title="Change avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-pencil fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                        data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
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
                                        id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                    data-hide-search="true" data-placeholder="Select an option"
                                    id="kt_ecommerce_add_product_status_select"
                                    data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1"
                                    aria-hidden="true" data-kt-initialized="1">
                                    <option></option>
                                    <option value="published" selected="" data-select2-id="select2-data-2-nyve">
                                        Published</option>
                                    <option value="draft">Draft</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-1-3uwv" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select mb-2"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false"
                                            aria-labelledby="select2-kt_ecommerce_add_product_status_select-container"
                                            aria-controls="select2-kt_ecommerce_add_product_status_select-container"><span
                                                class="select2-selection__rendered"
                                                id="select2-kt_ecommerce_add_product_status_select-container"
                                                role="textbox" aria-readonly="true"
                                                title="Published">Published</span><span class="select2-selection__arrow"
                                                role="presentation"><b role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product status.</div>
                                <!--end::Description-->

                                <!--begin::Datepicker-->
                                <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                        publishing date and time</label>
                                    <input class="form-control flatpickr-input"
                                        id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time"
                                        type="text" readonly="readonly">
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
                                <label class="form-label">Categories</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true" multiple=""
                                    data-select2-id="select2-data-3-8hy8" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
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
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-4-4ot9" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--multiple form-select mb-2"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered" id="select2-u8hl-container"></ul><span
                                                class="select2-search select2-search--inline">
                                                <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                                    spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                                    aria-describedby="select2-u8hl-container" placeholder="Select an option" style="width: 100%;"></textarea>
                                            </span>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                                <!--end::Description-->
                                <!--end::Input group-->

                                <!--begin::Button-->
                                <a href="/metronic8/demo25/../demo25/apps/ecommerce/catalog/add-category.html"
                                    class="btn btn-light-primary btn-sm mb-10">
                                    <i class="ki-outline ki-plus fs-2"></i> Create new category
                                </a>
                                <!--end::Button-->

                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                                    <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder=""
                                        class="tagify__input" role="textbox" aria-autocomplete="both"
                                        aria-multiline="false"></span>
                                    ​
                                </tags><input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                                    class="form-control mb-2" value="" tabindex="-1">
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
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                            role="tablist">
                            <!--begin:::Tab item-->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_general" aria-selected="true"
                                    role="tab">General</a>
                            </li>
                            <!--end:::Tab item-->

                            <!--begin:::Tab item-->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_advanced" aria-selected="false" role="tab"
                                    tabindex="-1">Advanced</a>
                            </li>
                            <!--end:::Tab item-->

                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general"
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
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Product Name</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="Product name" value="">
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">A product name is required and recommended to
                                                    be unique.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label">Description</label>
                                                <!--end::Label-->

                                                <!--begin::Editor-->
                                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                            class="ql-header ql-picker"><span class="ql-picker-label"
                                                                tabindex="0" role="button" aria-expanded="false"
                                                                aria-controls="ql-picker-options-0"><svg
                                                                    viewBox="0 0 18 18">
                                                                    <polygon class="ql-stroke"
                                                                        points="7 11 9 13 11 11 7 11"></polygon>
                                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                    </polygon>
                                                                </svg></span><span class="ql-picker-options"
                                                                aria-hidden="true" tabindex="-1"
                                                                id="ql-picker-options-0"><span tabindex="0"
                                                                    role="button" class="ql-picker-item"
                                                                    data-value="1"></span><span tabindex="0"
                                                                    role="button" class="ql-picker-item"
                                                                    data-value="2"></span><span tabindex="0"
                                                                    role="button"
                                                                    class="ql-picker-item ql-selected"></span></span></span><select
                                                            class="ql-header" style="display: none;">
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                            <option selected="selected"></option>
                                                        </select></span><span class="ql-formats"><button type="button"
                                                            class="ql-bold"><svg viewBox="0 0 18 18">
                                                                <path class="ql-stroke"
                                                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                                </path>
                                                                <path class="ql-stroke"
                                                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                                </path>
                                                            </svg></button><button type="button" class="ql-italic"><svg
                                                                viewBox="0 0 18 18">
                                                                <line class="ql-stroke" x1="7" x2="13"
                                                                    y1="4" y2="4"></line>
                                                                <line class="ql-stroke" x1="5" x2="11"
                                                                    y1="14" y2="14"></line>
                                                                <line class="ql-stroke" x1="8" x2="10"
                                                                    y1="14" y2="4"></line>
                                                            </svg></button><button type="button"
                                                            class="ql-underline"><svg viewBox="0 0 18 18">
                                                                <path class="ql-stroke"
                                                                    d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                                </path>
                                                                <rect class="ql-fill" height="1" rx="0.5"
                                                                    ry="0.5" width="12" x="3"
                                                                    y="15"></rect>
                                                            </svg></button></span><span class="ql-formats"><button
                                                            type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                                <rect class="ql-stroke" height="10" width="12"
                                                                    x="3" y="4"></rect>
                                                                <circle class="ql-fill" cx="6" cy="7"
                                                                    r="1"></circle>
                                                                <polyline class="ql-even ql-fill"
                                                                    points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                                </polyline>
                                                            </svg></button><button type="button"
                                                            class="ql-code-block"><svg viewBox="0 0 18 18">
                                                                <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                                </polyline>
                                                                <polyline class="ql-even ql-stroke"
                                                                    points="13 7 15 9 13 11"></polyline>
                                                                <line class="ql-stroke" x1="10" x2="8"
                                                                    y1="5" y2="13"></line>
                                                            </svg></button></span></div>
                                                <div id="kt_ecommerce_add_product_description"
                                                    name="kt_ecommerce_add_product_description"
                                                    class="min-h-200px mb-2 ql-container ql-snow">
                                                    <div class="ql-editor ql-blank" data-gramm="false"
                                                        contenteditable="true" data-placeholder="Type your text here...">
                                                        <p><br></p>
                                                    </div>
                                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1">
                                                    </div>
                                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                            rel="noopener noreferrer" target="_blank"
                                                            href="about:blank"></a><input type="text"
                                                            data-formula="e=mc^2" data-link="https://quilljs.com"
                                                            data-video="Embed URL"><a class="ql-action"></a><a
                                                            class="ql-remove"></a></div>
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
                                                <div class="dropzone dz-clickable" id="kt_ecommerce_add_product_media">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <!--begin::Icon-->
                                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
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
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Base Price</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="price" class="form-control mb-2"
                                                    placeholder="Product price" value="">
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product price.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    Discount Type


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        aria-label="Select a discount type that will be applied to this product"
                                                        data-bs-original-title="Select a discount type that will be applied to this product"
                                                        data-kt-initialized="1">
                                                        <i
                                                            class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>
                                                </label>
                                                <!--End::Label-->

                                                <!--begin::Row-->
                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                    data-kt-buttons="true"
                                                    data-kt-buttons-target="[data-kt-button='true']"
                                                    data-kt-initialized="1">
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 active"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="1"
                                                                    checked="checked">
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
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="2">
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
                                                                    name="discount_option" value="3">
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
                                            <div class="mb-10 fv-row d-none"
                                                id="kt_ecommerce_add_product_discount_percentage">
                                                <!--begin::Label-->
                                                <label class="form-label">Set Discount Percentage</label>
                                                <!--end::Label-->

                                                <!--begin::Slider-->
                                                <div class="d-flex flex-column text-center mb-5">
                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                        <span class="fw-bold fs-3x"
                                                            id="kt_ecommerce_add_product_discount_label">10</span>
                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                    </div>
                                                    <div id="kt_ecommerce_add_product_discount_slider"
                                                        class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                        <div class="noUi-base">
                                                            <div class="noUi-connects"></div>
                                                            <div class="noUi-origin"
                                                                style="transform: translate(-90.9091%, 0px); z-index: 4;">
                                                                <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                                    tabindex="0" role="slider"
                                                                    aria-orientation="horizontal" aria-valuemin="1.0"
                                                                    aria-valuemax="100.0" aria-valuenow="10.0"
                                                                    aria-valuetext="10.00">
                                                                    <div class="noUi-touch-area"></div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                            <div class="mb-10 fv-row d-none" id="kt_ecommerce_add_product_discount_fixed">
                                                <!--begin::Label-->
                                                <label class="form-label">Fixed Discounted Price</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                    placeholder="Discounted price">
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
                                                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Tax Class</label>
                                                    <!--end::Label-->

                                                    <!--begin::Select2-->
                                                    <select class="form-select mb-2 select2-hidden-accessible"
                                                        name="tax" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select an option"
                                                        data-select2-id="select2-data-7-b2f6" tabindex="-1"
                                                        aria-hidden="true" data-kt-initialized="1">
                                                        <option data-select2-id="select2-data-9-rrwv"></option>
                                                        <option value="0">Tax Free</option>
                                                        <option value="1">Taxable Goods</option>
                                                        <option value="2">Downloadable Product</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-8-hj1z"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select mb-2"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-tax-jl-container"
                                                                aria-controls="select2-tax-jl-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-tax-jl-container" role="textbox"
                                                                    aria-readonly="true" title="Select an option"><span
                                                                        class="select2-selection__placeholder">Select an
                                                                        option</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <!--end::Select2-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product tax class.</div>
                                                    <!--end::Description-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="form-label">VAT Amount (%)</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mb-2" value="">
                                                    <!--end::Input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product VAT about.</div>
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
                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
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
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">SKU</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="sku" class="form-control mb-2"
                                                    placeholder="SKU Number" value="">
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product SKU.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Barcode</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="text" name="sku" class="form-control mb-2"
                                                    placeholder="Barcode Number" value="">
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product barcode number.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Quantity</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <div class="d-flex gap-3">
                                                    <input type="number" name="shelf" class="form-control mb-2"
                                                        placeholder="On shelf" value="">
                                                    <input type="number" name="warehouse" class="form-control mb-2"
                                                        placeholder="In warehouse">
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product quantity.</div>
                                                <!--end::Description-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Allow Backorders</label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <div class="form-check form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label">
                                                        Yes
                                                    </label>
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Allow customers to purchase products that are
                                                    out of stock.</div>
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
                                                <div id="kt_ecommerce_add_product_options">
                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <div data-repeater-list="kt_ecommerce_add_product_options"
                                                            class="d-flex flex-column gap-3">
                                                            <div data-repeater-item=""
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <!--begin::Select2-->
                                                                <div class="w-100 w-md-200px">
                                                                    <select class="form-select select2-hidden-accessible"
                                                                        name="kt_ecommerce_add_product_options[0][product_option]"
                                                                        data-placeholder="Select a variation"
                                                                        data-kt-ecommerce-catalog-add-product="product_option"
                                                                        data-select2-id="select2-data-112-c33j"
                                                                        tabindex="-1" aria-hidden="true">
                                                                        <option data-select2-id="select2-data-114-bp8e">
                                                                        </option>
                                                                        <option value="color">Color</option>
                                                                        <option value="size">Size</option>
                                                                        <option value="material">Material</option>
                                                                        <option value="style">Style</option>
                                                                    </select><span
                                                                        class="select2 select2-container select2-container--bootstrap5"
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-113-0bdr"
                                                                        style="width: 100%;"><span class="selection"><span
                                                                                class="select2-selection select2-selection--single form-select"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="0"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-kt_ecommerce_add_product_options0product_option-98-container"
                                                                                aria-controls="select2-kt_ecommerce_add_product_options0product_option-98-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-kt_ecommerce_add_product_options0product_option-98-container"
                                                                                    role="textbox" aria-readonly="true"
                                                                                    title="Select a variation"><span
                                                                                        class="select2-selection__placeholder">Select
                                                                                        a variation</span></span><span
                                                                                    class="select2-selection__arrow"
                                                                                    role="presentation"><b
                                                                                        role="presentation"></b></span></span></span><span
                                                                            class="dropdown-wrapper"
                                                                            aria-hidden="true"></span></span>
                                                                </div>
                                                                <!--end::Select2-->

                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control mw-100 w-200px"
                                                                    name="kt_ecommerce_add_product_options[0][product_option_value]"
                                                                    placeholder="Variation">
                                                                <!--end::Input-->

                                                                <button type="button" data-repeater-delete=""
                                                                    class="btn btn-sm btn-icon btn-light-danger">
                                                                    <i class="ki-outline ki-cross fs-1"></i> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Form group-->

                                                    <!--begin::Form group-->
                                                    <div class="form-group mt-5">
                                                        <button type="button" data-repeater-create=""
                                                            class="btn btn-sm btn-light-primary">
                                                            <i class="ki-outline ki-plus fs-2"></i> Add another variation
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

                                </div>
                            </div>
                            <!--end::Tab pane-->

                        </div>
                        <!--end::Tab content-->

                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="/metronic8/demo25/../demo25/apps/ecommerce/catalog/products.html"
                                id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                Cancel
                            </a>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
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
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
