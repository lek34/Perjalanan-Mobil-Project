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
                                                    class="form-control form-control-solid" placeholder="Nama Kebun"
                                                    value="{{ old('kebun') ?? 'SIBISA MANGATUR' }}">
                                                <x-forms.input-error name="kebun" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-6 fw-bold form-label">Status Mobil</label>
                                            <div class="input-group date">
                                                <select class="form-select mb-2 select2-hidden-accessible" id="status_mobil"
                                                    data-control="select2" data-hide-search=""
                                                    data-placeholder="Select an option" tabindex="-1" aria-hidden="true"
                                                    on="resetSelect()">
                                                    <option value="1">POOL</option>
                                                    <option value="2">AFD</option>
                                                    <option value="3">NON KEBUN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                <div class="mb-0">
                                    <div class="row gx-10 mb-5">
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Nomor Polisi</label>
                                            <div class="mb-5">
                                                <input type="text" name="nopol" id="nopol"
                                                    class="form-control form-control-solid" value="{{ $armada->nopol }}"
                                                    placeholder="Nomor P" readonly>
                                                <x-forms.input-error name="nopol" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Nama Supir</label>
                                            <div class="mb-5">
                                                <input type="text" name="nama_supir" id="nama_supir"
                                                    class="form-control form-control-solid"
                                                    value="{{ old('nama_supir') ?? '' }}" placeholder="Nama Supir">
                                                <x-forms.input-error name="nama_supir" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Nama Kernek</label>
                                            <div class="mb-5">
                                                <input type="text" name="nama_kernek" id="nama_kernek"
                                                    class="form-control form-control-solid"
                                                    value="{{ old('nama_kernek') ?? '' }}" placeholder="Nama Kernek ">
                                                <x-forms.input-error name="nama_kernek" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-bottom border-bottom-dashed text-end">

                                    </div>

                                    <div class="table-responsive mb-10" id="hidden_div1">
                                        <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700">
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                    <th class="min-w-150">Jam Mulai</th>
                                                    <th class="min-w-150">Jam Selesai</th>
                                                    <th class="min-w-150">Lokasi Asal</th>
                                                    <th class="min-w-150"></th>
                                                    <th class="min-w-150">Tujuan</th>
                                                    <th class="min-w-150"></th>
                                                    <th class="min-w-150">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pe-2">
                                                        <div class="input-group mb-3">
                                                            <input type="time" class="form-control" id="jam_mulai"
                                                                name="jam_mulai">
                                                        </div>
                                                    </td>
                                                    <td class="pe-2">
                                                        <div class="input-group mb-3">
                                                            <input type="time" class="form-control" id="jam_selesai"
                                                                name="jam_selesai">
                                                        </div>
                                                    </td>
                                                    <td class="ps-2" colspan="2">
                                                        <select class="form-select mb-2 select2-hidden-accessible"
                                                            id="asal_lokasi" data-control="select2" data-hide-search=""
                                                            data-placeholder="Pilih Lokasi Asal" tabindex="-1"
                                                            aria-hidden="true" on="resetSelect()">
                                                            <option disabled selected value> </option>
                                                            <option value="1">AFD.01</option>
                                                            <option value="2">AFD.02</option>
                                                            <option value="3">AFD.03</option>
                                                            <option value="4">AFD.04</option>
                                                            <option value="5">AFD.05</option>
                                                        </select>
                                                    </td>
                                                    <td class="ps-2" colspan="2">
                                                        <select class="form-select mb-2 select2-hidden-accessible"
                                                            id="tujuan_lokasi" data-control="select2" data-hide-search=""
                                                            data-placeholder="Pilih Lokasi Tujuan" tabindex="-1"
                                                            aria-hidden="true" on="resetSelect()">
                                                            <option disabled selected value> </option>
                                                            <option value="1">PKS.01</option>
                                                            <option value="2">PKS.02</option>
                                                            <option value="3">PKS.03</option>
                                                            <option value="4">PKS.04</option>
                                                            <option value="5">PKS.05</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-5">
                                                        <select class="form-select mb-2 select2-hidden-accessible"
                                                            id="nomor_rekening" data-control="select2"
                                                            data-hide-search="" data-placeholder="Pilih No Rekening"
                                                            tabindex="-1" aria-hidden="true" on="resetSelect()">
                                                            <option disabled selected value> </option>
                                                            <option value="1">BRT.01</option>
                                                            <option value="2">BRT.02</option>
                                                            <option value="3">BRT.03</option>
                                                            <option value="4">BRT.04</option>
                                                            <option value="5">BRT.05</option>
                                                        </select>
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control" id="jarak_mulai" type="text"
                                                            name="jarak_mulai" placeholder="Jarak Mulai" value=""
                                                            oninput="formatInput(this); calculateTotalJarak()">
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control" id="jarak_selesai" type="text"
                                                            name="jarak_selesai" placeholder="Jarak Selesai"
                                                            value=""
                                                            oninput="formatInput(this); calculateTotalJarak()">
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" id="total_jarak"
                                                            type="text" name="total_jarak" placeholder="Total Jarak"
                                                            value="" readonly>
                                                    </td>
                                                    <td class="ps-0">
                                                        <select class="form-select mb-2 select2-hidden-accessible"
                                                            id="satuan" data-control="select2"
                                                            data-hide-search="" data-placeholder="Pilih Satuan"
                                                            tabindex="-1" aria-hidden="true" on="resetSelect()">
                                                            <option disabled selected value> </option>
                                                            <option value="1">Ton</option>
                                                            <option value="2">Orang</option>
                                                            <option value="3">Kg</option>
                                                            <option value="4">Buah</option>
                                                            <option value="5">Jam</option>
                                                        </select>
                                                        
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control" id="jumlah_produksi" type="text"
                                                            name="jumlah_produksi" placeholder="Jumlah" value="">
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
                                                    <th class="min-w-150">Jam Mulai</th>
                                                    <th class="min-w-150">Jam Selesai</th>
                                                    <th class="min-w-150">Lokasi Asal</th>
                                                    <th class="min-w-150"></th>
                                                    <th class="min-w-150">Tujuan</th>
                                                    <th class="min-w-150"></th>
                                                    <th class="min-w-150">Aksi</th>
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
                                    <div class="modal fade" id="errorMessageModal" tabindex="-1"
                                        aria-labelledby="errorMessageModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="errorMessageModalLabel">Error Message</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p id="errorMessageText"></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
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
    function restrictToNumbers(inputField) {
        inputField.addEventListener("input", function(event) {
            var value = event.target.value;
            var newValue = value.replace(/\D/g, ''); // Remove non-numeric characters
            event.target.value = newValue; // Set the input value to the cleaned value
        });
    }
    document.addEventListener("DOMContentLoaded", function() {
        var jumlahInput = document.getElementById("jumlah_produksi");
        // var hargaInput = document.getElementById("harga1");
        restrictToNumbers(jumlahInput); // Apply the restriction on page load to qty input
        // restrictToNumbers(hargaInput); // Apply the restriction on page load to harga input
    });
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

        $('#harga').on('input', function() {
            maskingNumber();
        });
        $('#form').on('submit', function() {
            const data = getTableData();
            console.log(data);
        });
    });

    function formatInput(input) {
        // Remove non-numeric characters and parse the input value as a float
        var value = parseFloat(input.value.replace(/[^\d.-]/g, ''));

        // Format the value with thousand separators using toLocaleString()
        input.value = value.toLocaleString();
    }

    function calculateTotalJarak() {
        // Get the values of "jarak_mulai" and "jarak_selesai"
        var jarak_mulai = parseFloat(document.getElementById("jarak_mulai").value.replace(/[^\d.-]/g, ''));
        var jarak_selesai = parseFloat(document.getElementById("jarak_selesai").value.replace(/[^\d.-]/g, ''));

        // Calculate the difference
        var total_jarak = isNaN(jarak_selesai) || isNaN(jarak_mulai) ? '' : (jarak_selesai - jarak_mulai);

        // Format total_jarak with thousand separators
        var formatted_total_jarak = total_jarak.toLocaleString();

        // Update the value of "total_jarak" input
        document.getElementById("total_jarak").value = formatted_total_jarak;
    }

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
                var row1 = table.insertRow();
                var cell8 = row.insertCell(6);
                var cell9 = row.insertCell(7);
                var cell10 = row.insertCell(6);
                var cell11 = row.insertCell(7);
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


    window.onload = function() {
        refetch();
        updateTotals();
    };


    function addRow() {
        // const data = [];
        // Get values from the input fields
        var nomor_rekening = document.getElementById("nomor_rekening");
        var asal_lokasi = document.getElementById("asal_lokasi");
        var tujuan_lokasi = document.getElementById("tujuan_lokasi");
        var jam_mulai = document.getElementById("jam_mulai");
        var jam_selesai = document.getElementById("jam_selesai");

        var asal = document.getElementById("asal");
        var qty = document.getElementById("qty");
        var uom = document.getElementById("uom");
        var harga = document.getElementById("harga");
        var total_harga = document.getElementById("total_harga");

        var nomor_rekening_v = document.getElementById("nomor_rekening").value.trim();
        var asal_lokasi_v = document.getElementById("asal_lokasi").value.trim();
        var tujuan_lokasi_v = document.getElementById("tujuan_lokasi").value.trim();
        var jam_mulai_v = document.getElementById("jam_mulai").value.trim();
        var jam_selesai_v = document.getElementById("jam_selesai").value.trim();
        var jarak_mulai_v = document.getElementById("jarak_mulai").value.trim();
        var jarak_selesai_v = document.getElementById("jarak_selesai").value.trim();
        var satuan_v = document.getElementById("satuan").value.trim();
        var jumlah_produksi_v = document.getElementById("jumlah_produksi").value.trim();

        // Check if all required fields are not empty
        if (nomor_rekening_v === '' || asal_lokasi_v === '' || tujuan_lokasi_v === '' || jam_mulai_v === '' ||
            jam_selesai_v === '' || jarak_mulai_v === '' || jarak_selesai_v === '' || satuan_v === '' ||
            jumlah_produksi_v === '') {
            var errorMessageText = "Harap isi semua field   ";
            document.getElementById("errorMessageText").textContent = errorMessageText;
            var errorMessageModal = new bootstrap.Modal(document.getElementById('errorMessageModal'), {
                keyboard: false
            });
            errorMessageModal.show();
            return;
        }

        // Create a new row in the table
        var table = document.getElementById("itemTable");
        var row1 = table.insertRow(table.rows.length);
        var cell12 = row1.insertCell(0);
        var cell8 = row1.insertCell(1);
        var cell9 = row1.insertCell(2);
        var cell10 = row1.insertCell(3);
        var cellgap = row1.insertCell(4);
        var cell11 = row1.insertCell(5);

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

        cell12.innerHTML = nomor_rekening.options[nomor_rekening.selectedIndex].value;
        cell12.style.display = 'none'
        cell8.innerHTML = jam_mulai.value;
        cell9.innerHTML = jam_selesai.value;

        cell10.innerHTML = asal_lokasi.options[asal_lokasi.selectedIndex].text;
        cell11.innerHTML = tujuan_lokasi.options[tujuan_lokasi.selectedIndex].text;

        cell0.innerHTML = nomor_rekening.options[nomor_rekening.selectedIndex].value;
        cell0.style.display = 'none'
        cell1.innerHTML = nomor_rekening.options[nomor_rekening.selectedIndex].text;
        // cell2.innerHTML =  '<span class="clickable" onclick="fetchHistoryPembelian('+barang.options[barang.selectedIndex].value+')">' + barang.options[barang.selectedIndex].text + '</span>';
        cell2.innerHTML = jarak_mulai.value;
        cell3.innerHTML = jarak_selesai.value;
        cell4.innerHTML = total_jarak.value;
        cell5.innerHTML = satuan.options[satuan.selectedIndex].text;
        cell6.innerHTML = jumlah_produksi.value;
        cell7.innerHTML =
            '<button type="button" class="btn btn-danger btn-sm mt-4" onclick="deleteRow(this)">Delete</button>';

        // Clear input fields after adding a row
        $("#asal_lokasi").val(null).trigger("change");
        $("#tujuan_lokasi").val(null).trigger("change");
        $("#nomor_rekening").val(null).trigger("change");
        jam_mulai.value = "";
        jam_selesai.value = "";

        // Call pushItemToArray to get the table data as an array of objects
        var tableDataArray = pushItemToArray();

        // Convert the array of objects to a JSON string
        var jsonDataString = JSON.stringify(tableDataArray);

        // Set the JSON string as the value of the hidden input field
        document.getElementById("tableData").value = jsonDataString;

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
        // Get the current row
        var row = btn.parentNode.parentNode;
        var rowIndex = row.rowIndex;

        // Check if there's a previous row, then delete it along with the current row
        if (rowIndex > 1) {
            var table = row.parentNode;
            table.deleteRow(rowIndex); // Delete the current row
            table.deleteRow(rowIndex - 1); // Delete the row before the current row
        }

        // Update any totals or calculations after deleting rows
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
</script>
