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
                        <h4>Add Armada</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('admin.master.armada.store') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Input 1 -->
                                    <x-forms.input id="namapemilik" label="Nama Pemilik" :required="'required'" :name="'namapemilik'"
                                        :type="'text'" :placeholder="'Masukkan nama pemilik...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="namapemilik" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 3 -->
                                    <x-forms.input id="namapemilik" label="Nomor Polisi" :required="'required'" :name="'nopol'"
                                        :type="'text'" :placeholder="'Masukkan nama pemilik...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="nopol" />
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row">

                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="nama" label="Nomor Mesin" :required="'required'" :name="'nomesin'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="nomesin" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 5 -->
                                    <x-forms.input id="nama" label="Nomor Rangka" :required="'required'" :name="'norangka'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="norangka" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 7 -->
                                    <x-forms.input id="nama" label="BBM" :required="'required'" :name="'bbm'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="bbm" />
                                </div>
                            </div>
                            <!-- Row 3 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold form-label mt-3">Categories</label>
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="merk">
                                        <option></option>
                                        <option value="MITSUBISHI" selected="selected">MITSUBISHI</option>
                                        <option value="SUZUKI">SUZUKI</option>
                                        <option value="ISUZU">ISUZU</option>
                                        <option value="TOYOTA">TOYOTA</option>
                                        <option value="KIA" ">KIA</option>
                                        <option value="DAIHATSU">DAIHATSU</option>
                                        <option value="HONDA">HONDAd</option>
                                        <option value="FORD">FORD</option>
                                        <option value="LANDROVER" >LANDROVER</option>
                                        <option value="WRANGLER">WRANGLER</option>
                                        <option value="MERCEDES">MERCEDES</option>
                                        <option value="HINO">HINO</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <!-- Input 7 -->
                                    <x-forms.input id="nama" label="Tahun Produksi" :required="'required'"
                                        :name="'tahunproduksi'" :type="'text'" :placeholder="'Masukkan nama...'" :func="''"
                                        :isiFunc="''" :value="''" />
                                    <x-forms.input-error name="tahunproduksi" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="nama" label="Golongan" :required="'required'" :name="'gol'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="gol" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <br>
                                    <br>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 6 -->
                                    <x-forms.input id="namapemilik" label="Karoseri" :required="'required'" :name="'karoseri'"
                                        :type="'text'" :placeholder="'Masukkan nama pemilik...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="karoseri" />
                                </div>

                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="nama" label="Inventaris" :required="'required'" :name="'inv'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="inv" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="nama" label="Operasional" :required="'required'" :name="'ops'"
                                        :type="'text'" :placeholder="'Masukkan nama...'" :func="''" :isiFunc="''"
                                        :value="''" />
                                    <x-forms.input-error name="ops" />

                                </div>
                                <div class="row">
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">Mulai KIR</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" placeholder="Select date" name="lastkir">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">AKHIR KIR</label>
                                        <div class="input-group date">

                                            <input type="date" class="form-control" placeholder="Select date" name="futurekir">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">MULAI STNK</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" placeholder="Select date" name="laststnk">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">AKHIR STNK</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" placeholder="Select date" name="futurestnk">
                                        </div>
                                    </div>
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
                                    href="{{ route('admin.master.armada.index') }}">Cancel</a></button>
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
