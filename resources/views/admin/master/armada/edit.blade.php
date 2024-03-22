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
                        <h4>Edit Armada</h4>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('admin.master.armada.update',$armada->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 1 -->
                                    <x-forms.input id="namapemilik" label="Nama Pemilik" :required="'required'" name="namapemilik"
                                        type="text" :placeholder="'Masukkan Nama Pemilik...'" :func="''" :isiFunc="''"
                                        value=" {{old('namapemilik') ?? $armada->namapemilik }} " />
                                    <x-forms.input-error name="namapemilik" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 3 -->
                                    <x-forms.input id="nopol" label="Nomor Polisi" :required="'required'" name="nopol"
                                        type="text" :placeholder="'Masukkan Nomor Polisi...'" :func="''" :isiFunc="''"
                                        value=" {{old('nopol') ?? $armada->nopol }} " />
                                    <x-forms.input-error name="nopol" />
                                </div>
                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold form-label mt-3"> <span class="required">Merk</span></label>
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="merk" required>
                                        <option disabled selected>--Pilih Merk--</option>
                                        <option value="MITSUBISHI" {{$armada->merk == "MITSUBISHI" ? 'selected' : ''}} >MITSUBISHI</option>
                                        <option value="SUZUKI" {{$armada->merk == "SUZUKI" ? 'selected' : ''}}>SUZUKI</option>
                                        <option value="ISUZU" {{$armada->merk == "ISUZU" ? 'selected' : ''}}>ISUZU</option>
                                        <option value="TOYOTA" {{$armada->merk == "TOYOTA" ? 'selected' : ''}}>TOYOTA</option>
                                        <option value="KIA" {{$armada->merk == "KIA" ? 'selected' : ''}}>KIA</option>
                                        <option value="DAIHATSU" {{$armada->merk == "DAIHATSU" ? 'selected' : ''}} >DAIHATSU</option>
                                        <option value="HONDA" {{$armada->merk == "HONDA" ? 'selected' : ''}}>HONDA</option>
                                        <option value="FORD" {{$armada->merk == "FORD" ? 'selected' : ''}}>FORD</option>
                                        <option value="LANDROVER" {{$armada->merk == "LANDROVER" ? 'selected' : ''}}>LANDROVER</option>
                                        <option value="WRANGLER"{{$armada->merk == "WRANGLER" ? 'selected' : ''}}>WRANGLER</option>
                                        <option value="MERCEDES" {{$armada->merk == "MERCEDES" ? 'selected' : ''}}>MERCEDES</option>
                                        <option value="HINO" {{$armada->merk == "HINO" ? 'selected' : ''}}>HINO</option>
                                    </select>
                                    <x-forms.input-error name="merk" />
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row">

                                <div class="col-md-4">
                                    <!-- Input 4 -->
                                    <x-forms.input id="nomesin" label="Nomor Mesin" :required="'required'" name="nomesin"
                                        type="text" placeholder="Masukkan No Mesin..." :func="''" :isiFunc="''"
                                        value=" {{old('nomesin') ?? $armada->nomesin }} " />
                                    <x-forms.input-error name="nomesin" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 5 -->
                                    <x-forms.input id="norangka" label="Nomor Rangka" :required="'required'" name="norangka"
                                        type="text" placeholder="Masukkan No Rangka..." :func="''" :isiFunc="''"
                                        value=" {{old('norangka') ?? $armada->norangka }} " />

                                    <x-forms.input-error name="norangka" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 7 -->
                                    <x-forms.input id="bbm" label="BBM" :required="'required'" name="bbm"
                                        type="text" placeholder="Masukkan Jenis BBM..." :func="''" :isiFunc="''"
                                        value=" {{old('bbm') ?? $armada->bbm }} " />
                                    <x-forms.input-error name="bbm" />
                                </div>
                            </div>
                            <!-- Row 3 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Input 7 -->
                                    <x-forms.input id="tahunproduksi" label="Tahun Produksi" :required="'required'"
                                        name="tahunproduksi" type="text" placeholder="Masukkan Tahun Produksi..." :func="''"
                                        :isiFunc="''"
                                        value=" {{old('tahunproduksi') ?? $armada->tahunproduksi }} " />
                                    <x-forms.input-error name="tahunproduksi" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="gol" label="Golongan" :required="'required'" name="gol"
                                        type="text" placeholder="Masukkan Golongan..." :func="''" :isiFunc="''"
                                        value=" {{old('gol') ?? $armada->gol }} " />
                                    <x-forms.input-error name="gol" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 5 -->
                                    <x-forms.input id="tipe" label="Nomor Rangka" :required="'required'" name="tipe"
                                        type="text" placeholder="Masukkan Nomor Rangka..." :func="''" :isiFunc="''"
                                        value=" {{old('tipe') ?? $armada->tipe }} " />
                                    <x-forms.input-error name="tipe" />
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
                                    <x-forms.input id="karoseri" label="Karoseri" :required="'required'" name="karoseri"
                                        type="text" placeholder="Masukkan Jenis Karoseri..." :func="''" :isiFunc="''"
                                        value=" {{old('karoseri') ?? $armada->karoseri }} " />
                                    <x-forms.input-error name="karoseri" />
                                </div>

                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="inv" label="Inventaris" :required="'required'" name="inv"
                                        type="text" placeholder="Masukkan Jenis Inventaris..." :func="''" :isiFunc="''"
                                        value=" {{old('inv') ?? $armada->inv }} " />

                                    <x-forms.input-error name="inv" />
                                </div>
                                <div class="col-md-4">
                                    <!-- Input 8 -->
                                    <x-forms.input id="ops" label="Operasional" :required="'required'" name="ops"
                                        type="text" placeholder="Masukkan Jenis Operasional..." :func="''" :isiFunc="''"
                                        value=" {{old('ops') ?? $armada->ops }} " />

                                    <x-forms.input-error name="ops" />

                                </div>
                                <div class="row">
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">Mulai KIR</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" value="{{old('lastkir') ??
                                            \Carbon\Carbon::parse($armada->lastkir)->format('Y-m-d') }}" placeholder="Select date" name="lastkir"/>
                                            <x-forms.input-error name="lastkir" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">AKHIR KIR</label>
                                        <div class="input-group date">

                                            <input type="date" class="form-control" value="{{old('futurekir') ??
                                            \Carbon\Carbon::parse($armada->futurekir)->format('Y-m-d') }}" placeholder="Select date" name="futurekir"/>
                                            <x-forms.input-error name="futurekir" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">MULAI STNK</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" value="{{old('laststnk') ??
                                            \Carbon\Carbon::parse($armada->laststnk)->format('Y-m-d') }}" placeholder="Select date" name="laststnk">
                                            <x-forms.input-error name="laststnk" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="fs-6 fw-bold form-label mt-3">AKHIR STNK</label>
                                        <div class="input-group date">
                                            <input type="date" class="form-control" value="{{old('futurestnk') ??
                                            \Carbon\Carbon::parse($armada->futurestnk)->format('Y-m-d') }}" placeholder="Select date" name="futurestnk">
                                            <x-forms.input-error name="futurestnk" />
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
