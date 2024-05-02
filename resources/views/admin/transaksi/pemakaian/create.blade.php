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
                        <div class="card-body p-12" id="form1">
                            <!-- Form 1 -->
                            <form id="stepForm1">
                                <div class="d-flex justify-content-end align-items-center">
                                    <div>
                                        <button onclick="nextStep(event)" class="btn btn-light ml-2" type="button">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Input Group with Three Columns -->
                                <div class="row mt-3" id="inputGroup">
                                    <div class="col">

                                        <div class="mb-5">
                                            <input type="text" name="namaMekanik"
                                                id="namaMekanik"class="form-control form-control-solid"
                                                placeholder="Nama Mekanik">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-5">
                                            <input type="text" name="jamKerja"
                                                id="jamKerja"class="form-control form-control-solid"
                                                placeholder="Jam Kerja">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" onclick="addDataToTable(event)">Tambah</button>
                                    </div>

                                </div>

                                <!-- Table to Display Added Data -->
                                <div class="mt-3">
                                    <button class="btn btn-primary" onclick="convertToJSON(event)">Convert to
                                        JSON</button>

                                    <table class="table" id="mekanikTable">
                                        <thead class="table-header">
                                            <tr>
                                                <th class="fs-4 fw-bold">No.</th>
                                                <th class="fs-4 fw-bold">Nama Mekanik</th>
                                                <th class="fs-4 fw-bold">Jam Kerja</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-end border-bottom border-bottom-dashed"></td>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody" class="table-body">
                                            <!-- Data will be added dynamically here -->
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="card-body p-12" id="form2" style="display: none;">
                            <form action="{{ route('admin.transaksi.pemakaian.store') }}" method="POST" id="form">
                                @csrf
                                <input type="hidden" name="tableData" id="tableData" value="{{ old('tableData') ?? '' }}">
                                <div class="">
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Tanggal :</label>
                                            <div class="input-group date">
                                                <input type="date" class="form-control"
                                                    value="{{ old('tanggal') ?? '' }}" placeholder="Select date"
                                                    id="tanggal" name="tanggal">
                                            </div>
                                            <x-forms.input-error name="tanggal" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Nomor
                                                Rekening</label>
                                            <div class="mb-5">
                                                <input type="text" name="norek" id="norek"
                                                    class="form-control form-control-solid" placeholder="Nomor Rekening"
                                                    value="{{ old('norek') ?? '' }}">
                                                <x-forms.input-error name="norek" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Nomor Bon :</label>
                                            <div class="input-group date">
                                                <input type="text" name="nobon" id="nobon"
                                                    class="form-control form-control-solid" placeholder="Nomor Bon"
                                                    value="{{ old('nobon') ?? '' }}">
                                                <x-forms.input-error name="nobon" />
                                            </div>
                                            <x-forms.input-error name="nobon" />

                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="mb-0">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Armada</label>
                                            <select class="form-select mb-2 select2" id="armada_id" name="armada_id">
                                                <option value="{{ $armada->id }}">{{ $armada->nopol }}</option>
                                            </select>
                                            <x-forms.input-error name="armada_id" />
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary" onclick="convertToJSON(event)">Convert to
                                                JSON</button>
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
                                                        type="text" name="asal" placeholder="Asal" value="">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="qty"
                                                        type="number" name="qty" placeholder="Qty" value="">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" id="uom"
                                                        type="text" name="uom" placeholder="Satuan"
                                                        value="">
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
                                        </table>
                                    </div>
                                    <div class="table-responsive mb-10" id="hidden_div2">
                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" id="sparepartTable">
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
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- "Previous" button -->
                                        <button onclick="prevStep(event)" class="btn btn-light">
                                            <i class="bi bi-arrow-left"></i> <!-- Bootstrap backward arrow icon -->
                                        </button>

                                        <!-- Buttons on the right -->
                                        <div>
                                            <button class="btn btn-light me-3"><a href="">Cancel</a></button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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
    let currentStep = 1;
    var jsonData = {};

    function addRow(event) {
        event.preventDefault();
        var nama = document.getElementById("nama");
        var asal = document.getElementById("asal");
        var qty = document.getElementById("qty");
        var uom = document.getElementById("uom");
        var harga = document.getElementById("harga");
        var total_harga = document.getElementById("total_harga");

        var table = document.getElementById("sparepartTable");
        var row = table.insertRow();
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var cell6 = row.insertCell(6);
        var cell7 = row.insertCell(7);

        // Set the cell values
        cell0.innerHTML = nama.options[nama.selectedIndex].value;
        cell0.style.display = 'none'
        cell1.innerHTML = nama.options[nama.selectedIndex].text;
        cell2.innerHTML = asal.value;
        cell3.innerHTML = qty.value;
        cell4.innerHTML = uom.value;
        cell5.innerHTML = 'Rp. ' + harga.value;
        cell6.innerHTML = 'Rp. ' + total_harga.value;
        cell7.innerHTML =
            '<button type="button" class="btn btn-danger btn-sm mt-4" onclick="deleteRow(this)">Delete</button>';

    }

    function addDataToTable(event) {
        event.preventDefault();

        var namaMekanik = document.getElementById("namaMekanik").value;
        var jamKerja = document.getElementById("jamKerja").value;

        var tableBody = document.getElementById("tableBody");
        var newRow = tableBody.insertRow();

        var cell0 = newRow.insertCell(0); // Index number cell
        var cell1 = newRow.insertCell(1); // Nama Mekanik cell
        var cell2 = newRow.insertCell(2); // Jam Kerja cell
        var cell3 = newRow.insertCell(3); // Delete button cell

        var rowIndex = tableBody.rows.length; // Calculate the index number

        cell0.innerHTML = rowIndex;
        cell1.innerHTML = namaMekanik;
        cell2.innerHTML = jamKerja;
        cell3.innerHTML =
            '<button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>'; // Add delete button

        // Clear input fields after adding data to the table
        document.getElementById("namaMekanik").value = "";
        document.getElementById("jamKerja").value = "";
    }

    function mekanikTableDataToJSON() {
        var tableRows = document.getElementById("mekanikTable").getElementsByTagName("tbody")[0].getElementsByTagName(
            "tr");
        var mekanikData = [];

        for (var i = 0; i < tableRows.length; i++) {
            var row = tableRows[i];
            var rowData = {
                "index": row.cells[0].innerHTML,
                "namaMekanik": row.cells[1].innerHTML,
                "jamKerja": row.cells[2].innerHTML
            };
            mekanikData.push(rowData);
        }

        return mekanikData;
    }

    function sparepartTableDataToJSON() {
        var tableRows = document.getElementById("sparepartTable").getElementsByTagName("tbody")[0].getElementsByTagName(
            "tr");
        var sparepartData = [];

        for (var i = 0; i < tableRows.length; i++) {
            var row = tableRows[i];
            var nama = row.cells[0].innerHTML;
            var namaText = row.cells[1].innerHTML;
            var asal = row.cells[2].innerHTML;
            var qty = row.cells[3].innerHTML;
            var uom = row.cells[4].innerHTML;
            var harga = row.cells[5].innerHTML;
            var total_harga = row.cells[6].innerHTML;

            var rowData = {
                "nama": nama,
                "namaText": namaText,
                "asal": asal,
                "qty": qty,
                "uom": uom,
                "harga": harga,
                "total_harga": total_harga
            };
            sparepartData.push(rowData);
        }

        return sparepartData;
    }

    function convertToJSON(event) {
        event.preventDefault();
        jsonData.data = [];

        jsonData.data.push({
            "mekanik": mekanikTableDataToJSON()
        });
        jsonData.data.push({
            "sparepart": sparepartTableDataToJSON()
        });

        console.log(jsonData);
    }

    function nextStep(event) {
        event.preventDefault(); // Prevent form submission
        document.getElementById('form1').style.display = 'none';
        document.getElementById('form2').style.display = 'block';
        currentStep = 2;
    }

    function prevStep() {
        event.preventDefault();
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form1').style.display = 'block';
        currentStep = 1;
    }

    window.onload = function() {
        refetch();
        updateTotals();
    };

    $(document).ready(function() {
        // Function to format number with Indonesian currency style
        function formatNumber(number) {
            return number.toLocaleString('id-ID', {
                maximumFractionDigits: 2
            });
        }

        // Function to calculate total and update total harga
        function calculateTotal() {
            var harga = parseFloat($('#harga').val().replaceAll('.', '') || 0);
            var qty = parseFloat($('#qty').val() || 0);
            var total_harga = qty * harga;
            $('#total_harga').val(formatNumber(total_harga));
        }

        // Event listeners for input fields
        $('#harga, #qty').on('input', function() {
            calculateTotal();
        });

        // Masking number input
        $('#harga').on('input', function() {
            var totalharga = parseInt($('#harga').val().replace(/\D/g, ''), 10);
            $('#harga').val(formatNumber(totalharga));
        });

        // Form submission event listener
        $('#form').on('submit', function() {
            const data = pushItemToArray();
            console.log(data);
        });
    });

    function extractNumericValue(value) {
        // Extract numeric value from a string (assuming 'Rp. xxx' format)
        return parseFloat(value.replace('Rp ', '').replace(',', ''));
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
        var table = document.getElementById("itemTable");
        var totalHarga = 0;

        for (var i = 0, row; row = table.rows[i]; i++) {
            if (i === 0) {
                continue;
            }
            var harga = parseFloat(row.cells[6].innerText.substring(3).replaceAll('.', ''));
            totalHarga += harga;
        }

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
</script>
