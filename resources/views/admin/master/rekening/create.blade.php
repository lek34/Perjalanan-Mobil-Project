@extends('layouts.temp')
@section('title', 'Rekening')

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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Form Rekening</h1>
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
                        <h4>Add Rekening</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('admin.master.rekening.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 1 -->
                                    <x-forms.input id="kode_rekening" label="Kode Rekening" :required="'required'" name="kode_rekening"
                                        type="text" :placeholder="'Masukkan kode rekening...'" :func="''" :isiFunc="''"
                                        :value=" old('kode_rekening') !== null ? old('kode_rekening') : '' " />
                                    <x-forms.input-error name="kode_rekening" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input id="nama_rekening" label="Nama Rekening" :required="'required'" name="nama_rekening"
                                        type="text" :placeholder="'Masukkan nama rekening...'" :func="''" :isiFunc="''"
                                        :value=" old('nama_rekening') !== null ? old('nama_rekening') : '' " />
                                    <x-forms.input-error name="nama_rekening" />
                                </div>
                            </div>

                        </div>



                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button class="btn btn-light me-3"><a
                                    href="{{ route('admin.master.rekening.index') }}">Cancel</a></button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!--end::Button-->
                        </div>

                    </form>
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
