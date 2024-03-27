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
                        <h4>Add Sparepart</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('admin.master.sparepart.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 1 -->
                                    <x-forms.input id="nama" label="Nama Sparepart" :required="'required'" name="nama"
                                        type="text" :placeholder="'Masukkan nama sparepart...'" :func="''" :isiFunc="''"
                                        :value=" old('nama') !== null ? old('nama') : '' " />
                                    <x-forms.input-error name="nama" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input id="partnumber" label="No Part" :required="'required'" name="partnumber"
                                        type="text" :placeholder="'Masukkan no part...'" :func="''" :isiFunc="''"
                                        :value=" old('partnumber') !== null ? old('partnumber') : '' " />
                                    <x-forms.input-error name="partnumber" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input id="alias" label="Alias" :required="'required'" name="alias"
                                        type="text" :placeholder="'Masukkan alias...'" :func="''" :isiFunc="''"
                                        :value=" old('alias') !== null ? old('alias') : '' " />
                                    <x-forms.input-error name="alias" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input id="qtykecil" label="Qty Kecil" :required="'required'" name="qtykecil"
                                        type="number" :placeholder="'Masukkan qtykecil...'" :func="''" :isiFunc="''"
                                        :value=" old('qtykecil') !== null ? old('qtykecil') : '' " />
                                    <x-forms.input-error name="qtykecil" />
                                </div>
                                <div class="col-md-4">
                                    <x-forms.input id="uomkecil" label="Uom Kecil" :required="'required'" name="uomkecil"
                                        type="text" :placeholder="'Masukkan uomkecil...'" :func="''" :isiFunc="''"
                                        :value=" old('uomkecil') !== null ? old('uomkecil') : '' " />
                                    <x-forms.input-error name="uomkecil" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <x-forms.input id="qtybesar" label="Qty Besar" :required="'required'" name="qtybesar"
                                        type="number" :placeholder="'Masukkan qtybesar...'" :func="''" :isiFunc="''"
                                        :value=" old('qtybesar') !== null ? old('qtybesar') : '' " />
                                    <x-forms.input-error name="qtybesar" />
                                </div>
                                <div class="col-md-4">
                                    <x-forms.input id="uombesar" label="Uom Besar" :required="'required'" name="uombesar"
                                        type="text" :placeholder="'Masukkan uombesar...'" :func="''" :isiFunc="''"
                                        :value=" old('uombesar') !== null ? old('uombesar') : '' " />
                                    <x-forms.input-error name="uombesar" />
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
