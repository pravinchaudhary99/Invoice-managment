@extends('layouts.header')

@section('title', 'Role View')

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
					<li class="breadcrumb-item text-muted">
                        <a href="{{ route('role.index') }}" class="text-muted text-hover-primary">Roles</a>
                    </li>
					<!--end::Item-->
                    <!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
                    <!--begin::Item-->
					<li class="breadcrumb-item text-muted">View</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="{{ route('role.index') }}" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
                    </svg>
                    <!--end::Svg Icon-->Back</a>
                    <!--end::Menu toggle-->
                </div>
            </div>
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->

    <!--begin::Container-->
    <div id="kt_content_container" class="app-content flex-column-fluid">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row app-container container-flui">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
                @isset($role)
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="mb-0">{{ $role['name'] ?? '-' }}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Permissions-->
                            <div class="d-flex flex-column text-gray-600">
                                @foreach ($role['permissions'] as $index => $permission)
                                    @if ($index < 7)
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> {{ ucfirst(str_replace('-',' ',$permission['name'])) }}
                                        </div>
                                    @endif
                                @endforeach

                                @if (count($role['permissions']) > 6)
                                    <div class='d-flex align-items-center py-2'><span
                                            class='bullet bg-primary me-3'></span> <em>and 7 more...</em>
                                    </div>
                                @endif

                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Card body-->

                        <!--begin::Card footer-->
                        <div class="card-footer pt-0">
                            <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_role">Edit Role</button>
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                @endisset

                <!--begin::Modal-->

                <!--begin::Modal - Update role-->
                <div class="modal fade" id="kt_modal_update_role" tabindex="-1" style="display: none;"
                    aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-750px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Update Role</h2>
                                <!--end::Modal title-->

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-roles-modal-action="close" id="kt_modal_add_customer_close">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->

                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_update_role_form"
                                    class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                        id="kt_modal_update_role_scroll" data-kt-scroll="true"
                                        data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_update_role_header"
                                        data-kt-scroll-wrappers="#kt_modal_update_role_scroll"
                                        data-kt-scroll-offset="300px" style="max-height: 245px;">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-bold form-label mb-2">
                                                <span class="required">Role name</span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                placeholder="Enter a role name" name="role_name" value="Developer">
                                            <!--end::Input-->
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Permissions-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                            <!--end::Label-->

                                            <!--begin::Table wrapper-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                    <!--begin::Table body-->
                                                    <tbody class="text-gray-600 fw-semibold">
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <td class="text-gray-800">
                                                                Administrator Access
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    aria-label="Allows a full access to the system"
                                                                    data-bs-original-title="Allows a full access to the system"
                                                                    data-kt-initialized="1">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </td>
                                                            <td>
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="kt_roles_select_all">
                                                                    <span class="form-check-label"
                                                                        for="kt_roles_select_all">
                                                                        Select all
                                                                    </span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </td>
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">User Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="user_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="user_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="user_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Content Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="content_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="content_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="content_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Financial Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="financial_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="financial_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="financial_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Reporting</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="reporting_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="reporting_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="reporting_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Payroll</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="payroll_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="payroll_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="payroll_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Disputes Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="disputes_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="disputes_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="disputes_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">API Controls</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="api_controls_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="api_controls_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="api_controls_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Database Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="database_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="database_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="database_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                            <!--begin::Label-->
                                                            <td class="text-gray-800">Repository Management</td>
                                                            <!--end::Label-->

                                                            <!--begin::Input group-->
                                                            <td>
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex">
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="repository_management_read">
                                                                        <span class="form-check-label">
                                                                            Read
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="repository_management_write">
                                                                        <span class="form-check-label">
                                                                            Write
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="checkbox" value=""
                                                                            name="repository_management_create">
                                                                        <span class="form-check-label">
                                                                            Create
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </td>
                                                            <!--end::Input group-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table wrapper-->
                                        </div>
                                        <!--end::Permissions-->
                                    </div>
                                    <!--end::Scroll-->

                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3"
                                            data-kt-roles-modal-action="cancel">
                                            Discard
                                        </button>

                                        <button type="submit" class="btn btn-primary"
                                            data-kt-roles-modal-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Update role-->
                <!--end::Modal-->
            </div>
            <!--end::Sidebar-->

            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-10">
                <!--begin::Card-->
                <div class="card card-flush mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header pt-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="d-flex align-items-center"> Users Assigned<span
                                    class="text-gray-600 fs-6 ms-1">(@isset($role) {{ count($role['users']) }} @endisset)</span></h2>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1"
                                data-kt-view-roles-table-toolbar="base">
                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                        class="path1"></span><span class="path2"></span></i> <input
                                    type="text" data-kt-roles-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15"
                                    placeholder="Search Users">
                            </div>
                            <!--end::Search-->

                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-view-roles-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-view-roles-table-select="selected_count"></span>
                                    Selected
                                </div>

                                <button type="button" class="btn btn-danger"
                                    data-kt-view-roles-table-select="delete_selected">
                                    Delete Selected
                                </button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_roles_view_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table
                                    class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                    id="kt_roles_view_table">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                                                colspan="1" aria-label=" " style="width: 29.8785px;">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        data-kt-check="true"
                                                        data-kt-check-target="#kt_roles_view_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-50px sorting" tabindex="0"
                                                aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                aria-label="ID: activate to sort column ascending"
                                                style="width: 80.2778px;">ID</th>
                                            <th class="min-w-150px sorting" tabindex="0"
                                                aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                aria-label="User: activate to sort column ascending"
                                                style="width: 283.299px;">User</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                aria-label="Joined Date: activate to sort column ascending"
                                                style="width: 217.014px;">Joined Date</th>
                                            <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Actions" style="width: 135.885px;">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content wrapper-->
@endsection


@section('script')
    <script src="{{ asset('assets/js/roles/role_table.js') }}"></script>
    <script src="{{ asset('assets/js/model_show.js') }}"></script>
@endsection