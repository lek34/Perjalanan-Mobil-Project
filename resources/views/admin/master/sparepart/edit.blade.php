@extends('layouts.temp')
@section('title', 'Sparepart')

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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Form Sparepart</h1>
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
                        <h4>Edit Sparepart</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('admin.master.sparepart.update',$sparepart->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 1 -->
                                    <x-forms.input id="nama" label="Nama Sparepart" :required="'required'" name="nama"
                                        type="text" :placeholder="'Masukkan Nama Sparepart...'" :func="''" :isiFunc="''"
                                        value=" {{old('nama') ?? $sparepart->nama }} " />
                                    <x-forms.input-error name="nama" />
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="partnumber" label="Nomor Part" :required="'required'" name="partnumber"
                                        type="text" placeholder="Masukkan No Part..." :func="''" :isiFunc="''"
                                        value=" {{old('partnumber') ?? $sparepart->partnumber }} " />
                                    <x-forms.input-error name="partnumber" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="alias" label="Alias" :required="'required'" name="alias"
                                        type="text" placeholder="Masukkan Alias..." :func="''" :isiFunc="''"
                                        value=" {{old('alias') ?? $sparepart->alias }} " />
                                    <x-forms.input-error name="alias" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="qty" label="Qty" :required="'required'" name="qty"
                                        type="text" placeholder="Masukkan Qty..." :func="''" :isiFunc="''"
                                        value=" {{old('qty') ?? $sparepart->qty }} " />
                                    <x-forms.input-error name="qty" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="uom" label="Uom" :required="'required'" name="uom"
                                        type="text" placeholder="Masukkan Uom..." :func="''" :isiFunc="''"
                                        value=" {{old('uom') ?? $sparepart->uom }} " />
                                    <x-forms.input-error name="uom" />
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
                                    href="{{ route('admin.master.sparepart.index') }}">Cancel</a></button>
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
