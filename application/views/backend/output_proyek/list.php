
<!-- Form -->
<?php $this->load->view($form); ?>
<!-- End Form -->


<div class="row list-view" style="margin-top: 2%;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row page-data list" data-url="<?= $url ?>" data-module="<?= $module ?>">
                    <div class="col-md-9 align-self-center">
                        <h4 class="form-text v-list">CARI OUTPUT BERDASARKAN KATEGORI INPUT</h4>
                    </div>
                    <div class="col-md-3 align-self-center text-right">
                        <?php $this->load->view($filter); ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="table-list" class="tablesaw table-bordered table-hover table-cursor table table-responsive-lg dataTables-Normal" style="width:100% !important">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>NAMA KEGIATAN</th>
                            <th>PENGGUNA JASA</th>
                            <th>TANGGAL TENDER</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

<script src="<?= base_url('assets/node_modules/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- Plugin -->
<link href="<?= base_url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet') ?>">
<script src="<?= base_url('assets/node_modules/moment/moment.js') ?>"></script>
<script src="<?= base_url('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>
<link href="<?= base_url('assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>" rel="stylesheet" type="text/css" />
<script src="<?= base_url('assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>

<!-- <script src="<?= base_url('asset/js/custom/backend/output_proyek.js') ?>"></script> -->

<script src="<?= base_url('asset/js/custom/backend/output_proyek.js').$this->main->version_js() ?>"></script>

<style>
    .btn-custom{
        padding: 10px 50px 10px 50px;
    }
    .form-text{
        color: #000000;
        font-weight: 600;
        font-size: large;
    }
    .form-text1{
        color: #4660E8;
        font-weight: 600;
        font-size: large;
    }

    .id-form{
        color: #000000;
        font-weight: 500;
    }
    .card-footer, .card-header {
        padding: 1.75rem 1.25rem;
        background-color: rgb(255 255 255);
        border-bottom: 1px solid lightgrey;
    }
    .page-titles {
        background: #E6E9FB;
        padding: 14px;
        margin: 5px 0px 20px 0px;
        border-radius: 2px;
    }
    .margin-right{
        margin-right: 10%;
    }
    .btn-browse{
        background: rgb(69,90,228);
        background: linear-gradient(90deg, rgba(69,90,228,1) 0%, rgba(72,134,255,1) 100%);
    }
    .btn-save-custom{
        background: rgb(69,90,228);
        background: linear-gradient(90deg, rgba(69,90,228,1) 0%, rgba(72,134,255,1) 100%);
        color: #fff;
        font-size: 10px;
    }
    .btn-cancel-custom{
        background: rgb(255 255 255);
        color: #000;
        font-size: 10px;
        border: solid 1px;
    }
    .datepicker table thead {
        background: #ffffff;
        color: black;
        /* border: none !important; */
    }
</style>

<script>
    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
    }).mask("9999-99-99");
    // open_form('form');
</script>