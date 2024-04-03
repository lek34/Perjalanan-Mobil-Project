@extends('layouts.temp')
@section('title', 'Berbengkel')

@section('content')
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div class="d-flex align-items-center gap-2 gap-lg-3">
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Form Berbengkel</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            </div>
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                    <div class="card">
                        <div class="card-body p-12">
                            <form action="{{ route('admin.transaksi.pemakaian.store') }}" method="POST" id="form">
                                @csrf
                                <input type="hidden" name="tableData" id="tableData" value="{{ old('tableData') ?? '' }}">
                                <div class="">
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Tanggal :</label>
                                            <div class="input-group date">
                                                <input type="date" class="form-control"
                                                    value="{{ old('tanggal') ?? date('Y-m-d') }}" placeholder="Select date"
                                                    id="tanggal" name="tanggal">
                                            </div>
                                            <x-forms.input-error name="tanggal" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Kebun</label>
                                            <div class="mb-5">
                                                <input type="text" name="kebun" id="kebun"
                                                    class="form-control form-control-solid" placeholder="Nomor Rekening"
                                                    value="{{ old('kebun') ?? 'SIBISA MANGATUR' }}">
                                                <x-forms.input-error name="kebun" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Status Mobil</label>
                                            <select class="form-select mb-2 select2-hidden-accessible" id="nama"
                                                data-control="select2" data-hide-search=""
                                                data-placeholder="Select an option" tabindex="-1" aria-hidden="true">
                                                <option value="1" {{ old('status_mobil') == '1' ? 'selected' : '' }}>
                                                    POOL</option>
                                                <option value="2" {{ old('status_mobil') == '2' ? 'selected' : '' }}>
                                                    AFD</option>
                                                <option value="3" {{ old('status_mobil') == '3' ? 'selected' : '' }}>
                                                    NON KEBUN</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="mb-0">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Armada</label>

                                            <input type="text" name="namamekanik" id="namamekanik"
                                                class="form-control form-control-solid" value="{{ $armada->nopol }}"
                                                placeholder="Nama Mekanik" readonly>
                                            <x-forms.input-error name="namamekanik" />


                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Nama Mekanik</label>
                                            <div class="mb-5">
                                                <input type="text" name="namamekanik" id="namamekanik"
                                                    class="form-control form-control-solid"
                                                    value="{{ old('namamekanik') ?? '' }}" placeholder="Nama Mekanik">
                                                <x-forms.input-error name="namamekanik" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Pemakaian Sparepart
                                            </label>
                                            <div class="mb-5">
                                                <select class="form-select mb-2" data-control="select2" id="status"
                                                    name="status" data-placeholder="Pemakaian Sparepart" tabindex="-1"
                                                    onchange="showDiv('', this)"">

                                                    <option value="Y" {{ old('status') == 'Y' ? 'selected' : '' }}>
                                                        Ada</option>
                                                    <option value="N" {{ old('status') == 'N' ? 'selected' : '' }}>
                                                        Tidak Ada</option>
                                                </select>
                                                <x-forms.input-error name="status" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-bottom border-bottom-dashed text-end">

                                    </div>

                                    <div class="table-responsive mb-10" id="hidden_div1">
                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700">
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                    <th class="min-w-150 w-250">Nama Barang</th>
                                                    <th class="min-w-100 w-200">Asal</th>
                                                    <th class="min-w-100px w-100px">QTY</th>
                                                    <th class="min-w-100px w-100px">Satuan</th>
                                                    <th class="min-w-150px w-150px">Harga</th>
                                                    <th class="min-w-100px w-150px ">Total</th>
                                                    <th class="min-w-75px w-75px ">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>

                                                <tr>
                                                    <td class="pe-7">
                                                        <select class="form-select mb-2 select2-hidden-accessible"
                                                            id="nama" data-control="select2" data-hide-search=""
                                                            data-placeholder="Select an option" tabindex="-1"
                                                            aria-hidden="true" on="resetSelect()">
                                                            <option disabled selected value>-- Pilih Barang--</option>
                                                            <option value="1">Barang 1</option>
                                                            <option value="2">Barang 2</option>
                                                            <option value="3">Barang 3</option>
                                                            <option value="4">Barang 4</option>
                                                            <option value="5">Jasa</option>
                                                        </select>
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" id="asal"
                                                            type="text" name="asal" placeholder="Asal"
                                                            value="">
                                                    </td>

                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" id="qty"
                                                            type="text" name="qty" placeholder="Qty">
                                                    </td>


                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" id="uom"
                                                            type="text" name="uom" placeholder="Satuan"
                                                            value="">
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" id="harga"
                                                            type="text" name="harga" placeholder="Harga" value="0">
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
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive mb-10" id="hidden_div2">
                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" id="itemTable">
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                    <th style="display: none;">id</th>
                                                    <th class="min-w-200 w-300">Item</th>
                                                    <th class="min-w-100 w-200">Asal</th>
                                                    <th class="min-w-100px w-100px">QTY</th>
                                                    <th class="min-w-100px w-100px">Satuan</th>
                                                    <th class="min-w-150px w-150px">Harga</th>
                                                    <th class="min-w-100px w-150px">Total</th>
                                                    <th class="min-w-75px w-75px text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                            <tfoot>

                                            </tfoot>

                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Keterangan</label>
                                            <div class="form-group mb-1">
                                                <textarea class="form-control form-control-solid" rows="5" name="keterangan">{{ old('keterangan') ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4">
                                            {{-- <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Sub Total</label>
                                            <div class="mb-5">
                                                <input class="form-control form-control-solid" id="subtotal"
                                                    type="text" name="subtotal" placeholder="Rp 0.00" value=""
                                                    readonly>
                                            </div> --}}
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Jumlah Rupiah
                                                Terpakai</label>
                                            <div class="mb-5">
                                                <input class="form-control form-control-solid" id="total"
                                                    type="text" name="total" placeholder="Rp 0.00" value=""
                                                    readonly>
                                            </div>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    window.onload = function() {
        refetch();
        updateTotals();
        setTodayAsDefaultValue();
    };
    $(document).ready(function() {
        // const data = [];

        function maskingNumber() {
            var totalharga = parseInt($('#harga').val().replace(/\D/g, ''), 10);
            $('#harga').val(formatNumber(totalharga));
        }

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
        $('#harga').on('input', function() {
            maskingNumber();
        });
        $('#form').on('submit', function() {
            const data = getTableData();
            console.log(data);
        });
    });


    function extractNumericValue(value) {
        // Extract numeric value from a string (assuming 'Rp. xxx' format)
        return parseFloat(value.replace('Rp ', '').replace(',', ''));
    }


    // function getTableData() {
    //     // document.getElementById("tableData").value = tableToJSON();
    //     // console.log(tableToJSON(document.getElementById('itemTable')))
    //     document.getElementById("tableData").value = formatTableToJson(document.getElementById('itemTable'))
    //     console.log(formatTableToJson(document.getElementById('itemTable')))
    // }


    function pushItemToArray() {
        var table = document.getElementById("itemTable");
        var dataArray = [];

        // Iterate over rows in the table
        for (var i = 1; i < table.rows.length; i++) {
            var row = table.rows[i];
            var rowData = {};

            // Iterate over cells in the row
            for (var j = 0; j < row.cells.length - 1; j++) { // Exclude the last cell containing the delete button
                var cell = row.cells[j];
                var cellText = cell.textContent.trim(); // Get the trimmed text content of the cell
                var columnHeader = table.rows[0].cells[j].textContent.trim(); // Get the corresponding header text

                // If the cell is in column 5 or 6, trim any word and periods
                if (j === 5 || j === 6) {
                    cellText = cellText.replace(/Rp|\./g, "");
                }

                // Add the cell value to the rowData object with the header as key
                rowData[columnHeader] = cellText;
            }

            // Push rowData object to the dataArray
            dataArray.push(rowData);

        }
        console.log(dataArray);
        return dataArray;
    }

    function refetch() {
        // Data JSON dari variabel atau sumber data lainnya
        var jsonString = document.getElementById("tableData").value;

        // Parse the JSON string into a JSON object
        var jsonData = JSON.parse(jsonString);
        console.log(jsonData)

        // Ambil tabel HTML
        var table = document.getElementById("itemTable");

        for (var index = 0; index < jsonData.length; index++) {
            (function(index) {
                var item = jsonData[index];
                // Buat baris baru dalam tabel
                var row = table.insertRow();

                // Masukkan nilai-nilai ke dalam sel-sel baris tersebut
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                var cell4 = row.insertCell(4);
                var cell5 = row.insertCell(5);
                var cell6 = row.insertCell(6);
                var cell7 = row.insertCell(7);

                cell0.textContent = item.id;
                cell0.style.display = 'none';
                cell1.textContent = item.Item;
                cell2.textContent = item.Asal;
                cell3.textContent = item.QTY;
                cell4.textContent = item.Uom;
                var hargaFormatted = parseFloat(item.Harga).toLocaleString('id-ID');
                var totalFormatted = parseFloat(item.Total).toLocaleString('id-ID');
                cell5.textContent = 'Rp. ' + hargaFormatted;
                cell6.textContent = 'Rp. ' + totalFormatted;
                cell7.innerHTML =
                    '<button type="button" class="btn btn-danger btn-sm mt-4" onclick="deleteOldRow(this)">Delete</button>';
                cell7.setAttribute("data-index", index); // Set custom attribute to store the index
            })(index);
        }
        // console.log(document.getElementById("tableData").value)
    }



    function setTodayAsDefaultValue() {
        // Get today's date in YYYY-MM-DD format
        const today = new Date().toISOString().split('T')[0];
        // Set the input value to today's date
        document.getElementById("tanggal").value = today;
    }

    function addRow() {
        // const data = [];
        // Get values from the input fields
        var nama = document.getElementById("nama");
        var asal = document.getElementById("asal");
        var qty = document.getElementById("qty");
        var uom = document.getElementById("uom");
        var harga = document.getElementById("harga");
        var total_harga = document.getElementById("total_harga");


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
        var cell7 = row.insertCell(7);

        // Disable the input fields after adding an item
        // document.getElementById("id_supplier").value = document.getElementById('id_supp').value
        // document.getElementById("tanggal").readOnly = true;

        // document.getElementById("id_supp").disabled = true;
        // document.getElementById("jatuh_tempo").readOnly = true;
        // Get existing table data (if any)

        // Set the cell values
        cell0.innerHTML = nama.options[nama.selectedIndex].value;
        cell0.style.display = 'none'
        cell1.innerHTML = nama.options[nama.selectedIndex].text;
        // cell2.innerHTML =  '<span class="clickable" onclick="fetchHistoryPembelian('+barang.options[barang.selectedIndex].value+')">' + barang.options[barang.selectedIndex].text + '</span>';
        cell2.innerHTML = asal.value;
        cell3.innerHTML = qty.value;
        cell4.innerHTML = uom.value;
        cell5.innerHTML = 'Rp. ' + harga.value;
        cell6.innerHTML = 'Rp. ' + total_harga.value;
        cell7.innerHTML =
            '<button type="button" class="btn btn-danger btn-sm mt-4" onclick="deleteRow(this)">Delete</button>';

        // Clear input fields after adding a row


        var status = document.getElementById("status").value

        if (status === "N") {
            $("#nama").val(null).trigger("change");
            nama.value = "2"
            asal.value = "-";
            qty.value = "0";
            uom.value = "-";
            harga.value = "0";
            total_harga.value = "0";
        } else {
            $("#nama").val(null).trigger("change");
            asal.value = "";
            qty.value = "";
            uom.value = "";
            harga.value = "";
            total_harga.value = "";
        }


        // Call pushItemToArray to get the table data as an array of objects

        var tableDataArray = pushItemToArray();

        // Convert the array of objects to a JSON string
        var jsonDataString = JSON.stringify(tableDataArray);

        // Set the JSON string as the value of the hidden input field
        document.getElementById("tableData").value = jsonDataString;

        updateTotals();
    }


    function deleteOldRow(btn) {

        var dataIndex = btn.parentNode.getAttribute("data-index"); // Get the custom data-index attribute value
        var tableData = JSON.parse(document.getElementById("tableData").value);

        // Delete the row from the table
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);

        // Remove the corresponding item from the jsonData array
        tableData.splice(dataIndex, 1);

        // Update the value of tableData input with the modified jsonData array
        document.getElementById("tableData").value = JSON.stringify(tableData);

        updateTotals(); // Call the function to update totals if needed
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
        // var subTotal = 0;
        var totalHarga = 0;

        for (var i = 0, row; row = table.rows[i]; i++) {
            // console.log(row.cells[5].innerText.substring(3).replaceAll('.', ''));
            // Skip the header row
            if (i === 0) {
                continue;
            }

            // var sub = parseFloat(row.cells[5].innerText.substring(3).replaceAll('.', ''));
            var harga = parseFloat(row.cells[6].innerText.substring(3).replaceAll('.', ''));

            // subTotal += sub;
            totalHarga += harga;
        }

        // Display totals
        // document.getElementById("subtotal").value = 'Rp ' + formatNumber(subTotal);
        document.getElementById("total").value = 'Rp ' + formatNumber(totalHarga);
    }

    function showDiv(divId, element) {
        // Set values and readonly properties based on the value of the element
        document.getElementById("merk").value = element.value == "N" ? '-' : '';
        document.getElementById('merk').readOnly = element.value == "N" ? true : false;

        document.getElementById("qty").value = element.value == "N" ? '0' : '';
        document.getElementById('qty').readOnly = element.value == "N" ? true : false;

        document.getElementById("uom").value = element.value == "N" ? '-' : '';
        document.getElementById('uom').readOnly = element.value == "N" ? true : false;

        document.getElementById("harga").value = element.value == "N" ? '0' : '';
        document.getElementById('harga').readOnly = element.value == "N" ? true : false;

        document.getElementById("total_harga").value = element.value == "N" ? '0' : '';
        document.getElementById('total_harga').readOnly = element.value == "N" ? true : false;

        document.getElementById("harga").value = element.value == "N" ? '0' : '';
        document.getElementById('harga').readOnly = element.value == "N" ? true : false;

        var namaElement = document.getElementById("nama");

        // Check if 'namaElement' is valid before setting value and readOnly property
        if (namaElement) {
            namaElement.value = element.value == "N" ? '2' : '';
            namaElement.readOnly = element.value == "N" ? true : false;
        } else {
            console.error("Element with ID 'nama' not found.");
        }
    }

    function restrictToNumbers(inputField) {
        inputField.addEventListener("input", function(event) {
            var value = event.target.value;
            var newValue = value.replace(/\D/g, ''); // Remove non-numeric characters
            event.target.value = newValue; // Set the input value to the cleaned value
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        var qtyInput = document.getElementById("qty");
        var hargaInput = document.getElementById("harga");
        restrictToNumbers(qtyInput);
        restrictToNumbers(hargaInput); // Apply the restriction on page load
    });
</script>
