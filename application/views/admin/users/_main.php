
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Users Page</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive" style="overflow:unset;">
            <div class="row">
                <div class="col-12 d-flex justify-content-end align-items-right mb-5">
                    <a href="javascript:void(0);" class="btn btn-info btn-icon-split" id="importDataModalToggle" >
                        <span class="icon text-white-50">
                            <i class="fa fa-download" aria-hidden="true"></i>
                        </span>
                        <span class="text">Import Users</span>
                    </a>
                </div>
            </div>
            <table id="users_list_table" class="table align-items-center mb-0">
                <thead>
                    <tr class="">
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Birth Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Zip Code</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spouse Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spouse Email</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spouse Birth Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spouse Zip Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users_list as $key => $value) : ?>
                        <tr id="<?= $value["user_id"]; ?>" >

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["data"]['first_name']; ?> <?= $value["data"]['last_name']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["data"]['email']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["data"]['date_of_birth']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["data"]['zip_code']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["spouse"]['first_name']; ?> <?= $value["spouse"]['last_name']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["spouse"]['email']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["spouse"]['date_of_birth']; ?>
                                </p>
                            </td>

                            <td class="border-bottom">
                                <p class="text-xs font-weight-normal mb-0">
                                    <?= $value["spouse"]['zip_code']; ?>
                                </p>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function(){

    let table = new DataTable('#users_list_table',{
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ],
        columnDefs: [{
            targets: [4,5,6,7], /* column index */
            orderable: false, /* true or false */
        }],
        lengthMenu: [[50, 100, 200, -1], [50, 100, 200, "All"]],
        pageLength: 50,
        initComplete: function () {

        }
    });

    $("#importDataModalToggle").on("click", function(){
        $("#importDataModal").modal("toggle");
    });

});
</script>

<!-- Logout Modal-->
<div class="modal fade" id="importDataModal" tabindex="-1" role="dialog" aria-labelledby="importDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importDataModalLabel">Import Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url("admin/users/import") ?>" method="post" id="importForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <p class="text-center">
                        Note: In order to import data to this table. File type must be CSV and must have correponding columns and must be in order.
                        Columns: first_name, last_name, email , date_of_birth, zip_code, spouse_first_name, spouse_last_name, spouse_email, spouse_date_of_birth, spouse_zip_code.
                    </p>
                    <!-- Custom Bootstrap File Input -->
                    <div class="custom-file">
                        <label for="fileSelect">Spreadsheet</label>
                        <input id="fileSelect" name="file" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let current_swal = null;

    $(document).ready(function(){
        console.log("test");
        $("#importForm").on("submit", function(){
            _this_swal_loader("Importing...", "This might take a while please wait for the page to refresh");
        });
    });

    // swal loader
    function _this_swal_loader(doing,text) {
        current_swal = new swal({
            title: doing + ' ...',
            text: text,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
            }
        });
    };
</script>