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
                    <h1
                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
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
                        <li class="breadcrumb-item text-muted">Products</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                                    data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid select2-hidden-accessible"
                                    data-control="select2" data-hide-search="true" data-placeholder="Status"
                                    data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-1-w6by"
                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-3-0w7a"></option>
                                    <option value="all">All</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-2-x211" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-otda-container"
                                            aria-controls="select2-otda-container"><span class="select2-selection__rendered"
                                                id="select2-otda-container" role="textbox" aria-readonly="true"
                                                title="Status"><span
                                                    class="select2-selection__placeholder">Status</span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <!--end::Select2-->
                            </div>

                            <!--begin::Add product-->
                            <a href="{{ route('products.index') }}"
                                class="btn btn-primary">
                                Add Product
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">

                        <!--begin::Table-->
                        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="" style="width: 29.8785px;">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-200px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="Product: activate to sort column ascending"
                                                style="width: 274.913px;">Product</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="SKU: activate to sort column ascending"
                                                style="width: 139.201px;">SKU</th>
                                            <th class="text-end min-w-70px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="Qty: activate to sort column ascending"
                                                style="width: 125.747px;">Qty</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="Price: activate to sort column ascending"
                                                style="width: 139.201px;">Price</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="Rating: activate to sort column ascending"
                                                style="width: 139.201px;">Rating</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 139.201px;">Status</th>
                                            <th class="text-end min-w-70px sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Actions" style="width: 141.736px;">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr class="odd">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/1.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">04634007</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="31">
                                                <span class="fw-bold ms-3">31</span>
                                            </td>
                                            <td class="text-end pe-0">173.00</td>
                                            <td class="text-end pe-0" data-order="rating-3">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Scheduled">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-primary">Scheduled</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/2.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">04410003</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="50">
                                                <span class="fw-bold ms-3">50</span>
                                            </td>
                                            <td class="text-end pe-0">236.00</td>
                                            <td class="text-end pe-0" data-order="rating-5">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/3.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">03131004</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="48">
                                                <span class="fw-bold ms-3">48</span>
                                            </td>
                                            <td class="text-end pe-0">271.00</td>
                                            <td class="text-end pe-0" data-order="rating-4">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/4.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">02431001</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="12">
                                                <span class="fw-bold ms-3">12</span>
                                            </td>
                                            <td class="text-end pe-0">264.00</td>
                                            <td class="text-end pe-0" data-order="rating-5">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/5.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">03717008</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="26">
                                                <span class="fw-bold ms-3">26</span>
                                            </td>
                                            <td class="text-end pe-0">156.00</td>
                                            <td class="text-end pe-0" data-order="rating-4">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Published">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-success">Published</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/6.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">03851001</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="4">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">4</span>
                                            </td>
                                            <td class="text-end pe-0">63.00</td>
                                            <td class="text-end pe-0" data-order="rating-5">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/7.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">03759004</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="21">
                                                <span class="fw-bold ms-3">21</span>
                                            </td>
                                            <td class="text-end pe-0">144.00</td>
                                            <td class="text-end pe-0" data-order="rating-5">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Scheduled">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-primary">Scheduled</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/8.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">01277006</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="47">
                                                <span class="fw-bold ms-3">47</span>
                                            </td>
                                            <td class="text-end pe-0">52.00</td>
                                            <td class="text-end pe-0" data-order="rating-4">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/9.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">04375003</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="17">
                                                <span class="fw-bold ms-3">17</span>
                                            </td>
                                            <td class="text-end pe-0">224.00</td>
                                            <td class="text-end pe-0" data-order="rating-5">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('products.edit',1) }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/10.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">03739008</span>
                                            </td>
                                            <td class="text-end pe-0" data-order="26">
                                                <span class="fw-bold ms-3">26</span>
                                            </td>
                                            <td class="text-end pe-0">154.00</td>
                                            <td class="text-end pe-0" data-order="rating-4">
                                                <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label ">
                                                        <i class="ki-outline ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-danger">Inactive</div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit',1) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select
                                                name="kt_ecommerce_products_table_length"
                                                aria-controls="kt_ecommerce_products_table"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="kt_ecommerce_products_table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="kt_ecommerce_products_table_previous"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="0"
                                                    tabindex="0" class="page-link"><i class="previous"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="1"
                                                    tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="2"
                                                    tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="3"
                                                    tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="4"
                                                    tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="5"
                                                    tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item next"
                                                id="kt_ecommerce_products_table_next"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="6"
                                                    tabindex="0" class="page-link"><i class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

    <!--end::Content wrapper-->
@endsection
