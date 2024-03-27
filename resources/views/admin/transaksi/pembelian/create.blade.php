@extends('layouts.temp')
@section('title', 'Pembelian')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->

            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_624476097896b">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible"
                                        data-kt-select2="true" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_624476097896b" data-allow-clear="true"
                                        data-select2-id="select2-data-7-h90m" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-0kl3"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-8-p69p" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-u0jx-container"
                                                aria-controls="select2-u0jx-container"><span
                                                    class="select2-selection__rendered" id="select2-u0jx-container"
                                                    role="textbox" aria-readonly="true" title="Select option"><span
                                                        class="select2-selection__placeholder">Select
                                                        option</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Form Pembelian Sparepart</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
            </div>
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body p-12">
                            <!--begin::Form-->
                            <form action="" id="kt_invoice_form">
                                <!--begin::Wrapper-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-10"></div>
                                <!--end::Separator-->
                                <!--begin::Wrapper-->
                                <div class="mb-0">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">No DO</label>
                                            <!--begin::Input group-->
                                            <div class="mb-4">
                                                <input type="text" name="no_dp" id="no_dp"
                                                    class="form-control form-control-solid" placeholder="No DO">
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <div class="row gx-10 mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Supplier</label>
                                            <!--begin::Input group-->
                                            <div class="">
                                                <input type="text" name="supplier_id" id="supplier_id"
                                                    class="form-control form-control-solid" placeholder="Nama Supplier">
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-10">
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Tanggal :</label>
                                            <div class="input-group date">
                                                <input type="date" class="form-control" value=""
                                                    placeholder="Select date" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-bottom-dashed text-end">

                                    </div>

                                    <div class="table-responsive mb-10">
                                        <!--begin::Table-->
                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                    <th class="min-w-45 w-45">Item</th>
                                                    <th class="min-w-100px w-100px">Uom</th>
                                                    <th class="min-w-100px w-100px">QTY</th>
                                                    <th class="min-w-150px w-150">Harga</th>
                                                    <th class="min-w-200px w-200px">Total</th>
                                                    <th class="min-w-75px w-75px ">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <td class="pe-7">
                                                    <select class="form-select mb-2 select2-hidden-accessible"
                                                        id="nama" data-control="select2" data-hide-search=""
                                                        data-placeholder="Select an option" tabindex="-1"
                                                        aria-hidden="true" on="resetSelect()">
                                                        <option disabled selected value>-- Pilih Sparepart--</option>
                                                        @foreach ($spareparts as $sparepart)
                                                            <option value="{{ $sparepart->id }}">{{ $sparepart->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="uom"
                                                        type="text" name="uom" placeholder="Uom" value="">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="qty"
                                                        type="number" name="qty" placeholder="Qty" value="">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="harga"
                                                        type="text" name="harga" placeholder="Harga"
                                                        value="">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="total_harga"
                                                        type="text" name="total_harga" placeholder="Total Harga"
                                                        value="0" readonly>
                                                </td>
                                                <td class="ps-0">
                                                    <button type="button" class="btn btn-success"
                                                        onclick="addRow()">Tambah</button>
                                                </td>
                                            </tbody>
                                            <!--end::Table body-->

                                        </table>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive mb-10">
                                        <!--begin::Table-->

                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" id="itemTable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                    <th style="display: none;">id</th>
                                                    <th class="min-w-45 w-45">Item</th>
                                                    <th class="min-w-100px w-100px">Uom</th>
                                                    <th class="min-w-100px w-100px">QTY</th>
                                                    <th class="min-w-150px w-150px">Harga</th>
                                                    <th class="min-w-200px w-200px">Total</th>
                                                    <th class="min-w-75px w-75px">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                {{-- Add item dynamicly --}}
                                            </tbody>
                                            <!--end::Table body-->
                                            <!--begin::Table foot-->
                                            <tfoot>

                                            </tfoot>
                                            <!--end::Table foot-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">

                                        </div>
                                        <div class="col-md-4">
                                            {{-- <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Sub Total</label>
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input class="form-control form-control-solid" id="subtotal"
                                                    type="text" name="subtotal" placeholder="Rp 0.00" value=""
                                                    readonly>
                                            </div>
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Total</label>
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input class="form-control form-control-solid" id="total"
                                                    type="text" name="total" placeholder="Rp 0.00" value=""
                                                    readonly>
                                            </div> --}}
                                        </div>
                                    </div>


                                    <div class="separator separator-dashed my-10"></div>
                                    <!--begin::Action buttons-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button class="btn btn-light me-3"><a href="">Cancel</a></button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->

                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // const data = [];
        function formatNumber(number) {
            return number.toLocaleString('id-ID', {
                maximumFractionDigits: 2
            });
        }

        function calculateTotal() {

            var harga = parseFloat($('#harga').val().replaceAll('.', '') || 0);
            var qty = parseFloat($('#qty').val() || 0);



            // Calculate subtotal
            var total_harga = qty * harga;
            $('#total_harga').val(formatNumber(total_harga));

        }

        $('#harga, #qty').on('input', function() {
            calculateTotal();
        });
    });


    function extractNumericValue(value) {
        // Extract numeric value from a string (assuming 'Rp. xxx' format)
        return parseFloat(value.replace('Rp ', '').replace(',', ''));
    }

    function tableToJSON(table) {
        var data = [];
        var headers = [];

        // Get headers
        for (var i = 0; i < table.rows[0].cells.length; i++) {
            headers[i] = table.rows[0].cells[i].textContent.toLowerCase();
        }

        // Iterate through rows (start from index 1 to skip the header row)
        for (var i = 1; i < table.rows.length; i++) {
            var row = table.rows[i];
            var rowData = {};

            // Iterate through cells
            for (var j = 0; j < row.cells.length; j++) {
                rowData[headers[j]] = row.cells[j].textContent;
            }

            data.push(rowData);
        }

        return JSON.stringify(data);

    }

    function getTableData() {
        document.getElementById("tableData").value = tableToJSON(document.getElementById('itemTable'))
        console.log(tableToJSON(document.getElementById('itemTable')))
    }


    function addRow() {
        // const data = [];
        // Get values from the input fields
        var nama = document.getElementById("nama");
        var qty = document.getElementById("qty");
        var uom = document.getElementById("uom");
        var harga = document.getElementById("harga");
        var total_harga = document.getElementById("total_harga");

        // data.push({id:id,nama:nama,merk:merk,qty:qty,uom:uom,harga:harga,total_harga});

        // Create a new row in the table
        var table = document.getElementById("itemTable");
        var row = table.insertRow(table.rows.length);
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var cell6 = row.insertCell(6);
        // var cell7 = row.insertCell(7);

        // Disable the input fields after adding an item
        // document.getElementById("id_supplier").value = document.getElementById('id_supp').value
        // document.getElementById("tanggal").readOnly = true;

        // document.getElementById("id_supp").disabled = true;
        // document.getElementById("jatuh_tempo").readOnly = true;

        // Set the cell values
        cell0.innerHTML = nama.options[nama.selectedIndex].value;
        cell0.style.display = 'none'
        cell1.innerHTML = nama.options[nama.selectedIndex].text;
        // cell2.innerHTML =  '<span class="clickable" onclick="fetchHistoryPembelian('+barang.options[barang.selectedIndex].value+')">' + barang.options[barang.selectedIndex].text + '</span>';
        cell2.innerHTML = uom.value;
        cell3.innerHTML = qty.value;
        cell4.innerHTML = 'Rp ' + harga.value;
        cell5.innerHTML = 'Rp ' + total_harga.value;
        cell6.innerHTML =
            '<button type="button" class="btn btn-danger btn-sm mt-4" onclick="deleteRow(this)">Delete</button>';



        // Clear input fields after adding a row
        $("#nama").val(null).trigger("change");
        qty.value = "";
        uom.value = "";
        harga.value = "";
        total_harga.value = "";

        // getTableData();
        
        updateTotals();
    }

    function deleteRow(btn) {
        // Delete the row from the table
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
        updateTotals();

    }

    function formatNumber(number) {
        return number.toLocaleString('id-ID', {
            maximumFractionDigits: 2
        });
    }

    function updateTotals() {
        // Update totals
        var table = document.getElementById("itemTable");
        var subTotal = 0;
        var totalHarga = 0;

        for (var i = 0, row; row = table.rows[i]; i++) {
            // Skip the header row
            if (i === 0) {
                continue;
            }

            var sub = parseFloat(row.cells[5].innerText.replace('Rp ', '').replaceAll('.', ''));
            var harga = parseFloat(row.cells[6].innerText.replace('Rp ', '').replaceAll('.', ''));

            subTotal += sub;
            totalHarga += harga;
        }

        // Display totals
        document.getElementById("subtotal").value = 'Rp ' + formatNumber(subTotal);
        document.getElementById("total").value = 'Rp ' + formatNumber(totalHarga);
    }
</script>
<script>
    $(document).ready(function() {
        function formatNumber(number) {
            return number.toLocaleString('id-ID', {
                maximumFractionDigits: 0
            });
        }

        function maskingNumber() {
            var totalharga = parseInt($('#harga').val().replace(/\D/g, ''), 10);
            $('#harga').val(formatNumber(totalharga));
        }

        $('#harga').on('input', function() {
            maskingNumber();
        });
        $('#form').on('submit', function() {
            var totalharga = $('#harga').val().replaceAll('.', '');
            $('#harga').val(totalharga)
        });
    });
</script>
