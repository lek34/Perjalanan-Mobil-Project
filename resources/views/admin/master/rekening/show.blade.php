@extends('layouts.temp')
@section('title', 'Armada')

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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Form Armada</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
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
                        <h4>Show Armada ({{ $armada->nopol }})</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold">
                            Details
                        </div>

                        <!--begin::Badge-->

                        @if (is_null($armada->deleted_at))
                            <div class="badge badge-light-success d-inline">Unlock</div>
                        @else
                            <div class="badge badge-light-danger d-inline">Lock</div>
                        @endif

                    </div>
                    <!--end::Details toggle-->

                    <div class="separator separator-dashed my-3"></div>

                    <!--begin::Details content-->
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Nama Pemilik</div>
                        <div class="text-gray-600">{{ $armada->namapemilik }}</div>
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">No Pol</div>
                        <div class="text-gray-600">{{ $armada->nopol }}</div>
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Kir Awal</div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($armada->lastkir)->format('d-m-Y') }}</div>
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Kir Akhir</div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($armada->futurekir)->format('d-m-Y') }}</div>
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Stnk Awal</div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($armada->laststnk)->format('d-m-Y') }}</div>
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Stnk Akhir</div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($armada->futurestnk)->format('d-m-Y') }}</div>


                    </div>
                    <!--end::Details content-->
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
                {{-- <!--begin::Card footer-->
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="reset" class="btn btn-secondary ">Back</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
                <!--end::Card footer--> --}}
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection
