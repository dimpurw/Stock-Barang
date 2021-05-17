 <!-- plugins:js -->
 <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendors/chartist/chartist.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#BarangKeluar').DataTable( {
        fixedHeader: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Barang Keluar',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'pdf',
                title: 'Data Barang Keluar',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'csv',
                title: 'Data Barang Keluar',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'print',
                title: 'Data Barang Keluar',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
        ],
    } );
} );

$(document).ready(function() {
    var table = $('#BarangMasuk').DataTable( {
        fixedHeader: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Barang Masuk',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'pdf',
                title: 'Data Barang Masuk',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'csv',
                title: 'Data Barang Masuk',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'print',
                title: 'Data Barang Masuk',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
        ],
    } );
} );

$(document).ready(function() {
    var table = $('#StokBarang').DataTable( {
        fixedHeader: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Stok Barang',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'pdf',
                title: 'Stok Barang',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'csv',
                title: 'Stok Barang',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
            {
                extend: 'print',
                title: 'Stok Barang',
                text: window.csvButtonTrans,
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7],
                }
            },
        ],
    } );
} );
</script>