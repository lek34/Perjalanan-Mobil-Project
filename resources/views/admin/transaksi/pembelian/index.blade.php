@extends('layouts.temp')

@section('title', 'Pembelian')
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">List Pembelian</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                {{-- <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Catalog</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Products</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb--> --}}
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                <option></option>
                                <option value="all">All</option>
                                <option value="lock">Lock</option>
                                <option value="unlock">Unlock</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--begin::Add product-->
                        <a href="{{ route('admin.transaksi.pembelian.create') }}" class="btn btn-primary">Add
                            Pembelian</a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example_5">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">No</th>
                                <th class="min-w-125px">Tanggal</th>
                                <th class="min-w-125px">Supplier</th>
                                <th class="min-w-125px">No DO</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                            @foreach ($pembelians as $pembelian)
                                <tr class="text-start">
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-gray-800 text-hover-primary mb-1">
                                        {{ $pembelian->tanggal }}
                                    </td>
                                    <td class="text-gray-800 text-hover-primary mb-1">
                                        {{ $pembelian->supplier }}
                                    </td>
                                    <td class="text-gray-800 text-hover-primary mb-1">
                                        {{ $pembelian->no_do }}
                                    </td>

                                    <td>
                                        <!--begin::Badges-->
                                        @if (is_null($pembelian->deleted_at))
                                            <div class="badge badge-light-success">Unlock</div>
                                        @else
                                            <div class="badge badge-light-danger">Lock</div>
                                        @endif

                                    </td>
                                    <!--end::SKU=-->
                                    <!--begin::Action=-->
                                    <td>
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <!--begin::Badges-->
                                            @if (is_null($pembelian->deleted_at))
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('admin.transaksi.pembelian.show', $pembelian->id) }}"
                                                        class="menu-link px-3">Show</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('admin.transaksi.pembelian.edit', $pembelian->id) }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $pembelian->id }}"
                                                        class="btn btn-danger btn-sm delete">
                                                        <i class="fas fa-trash"></i>Delete
                                                    </button>
                                                </div>
                                            @else
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('admin.transaksi.pembelian.show', $pembelian->id) }}"
                                                        class="menu-link px-3">Show</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('admin.transaksi.pembelian.restore', $pembelian->id) }}"
                                                        class="menu-link px-3">Restore</a>
                                                </div>
                                            @endif
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                                <x-confirm-delete :id="$pembelian->id" :route="route('admin.master.pembelian.delete', $pembelian->id)" :model="$pembelian" :modelAttribute="'no_do'" />
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
