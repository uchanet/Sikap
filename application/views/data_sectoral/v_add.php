<div id="wrapper">

    <div class="normalheader transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li>
                            <span>Tables</span>
                        </li>
                        <li class="active">
                            <span>DataTables</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    <?= $title; ?>
                </h2>
                <small>Advanced interaction controls to any HTML table</small>
            </div>
        </div>
    </div>


    <div class="content animate-panel">

        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Form data sectoral
                    </div>
                    <div class="panel-body">

                        <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                            <div class="text-center m-b-md" id="wizardControl">

                                <a class="btn btn-primary" href="#step1" data-toggle="tab">Step 1 -
                                    Data Pendidikan</a>
                                <a class="btn btn-default" href="#step2" data-toggle="tab">Step 2 -
                                    Data Kesehatan</a>
                                <a class="btn btn-default" href="#step3" data-toggle="tab">Step 3 -
                                    Data Ekonomi</a>
                                <a class="btn btn-default" href="#step4" data-toggle="tab">Step 4 -
                                    Konfirmasi</a>

                            </div>

                            <div class="tab-content">
                                <div id="step1" class="p-m tab-pane active">

                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <img src="<?= base_url() ?>template/login/img/education.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-user fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>Data Pendidikan</strong> is simply dummy text of the printing and typesetting industry.
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Nama Sekolah</label>
                                                    <input type="text" value="" id="" class="form-control" name="NIK" placeholder="Nama Sekolah">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah Pengajar</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Jumlah" name="nama">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah Murid</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="nama" name="nama">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Tahun Berdiri</label>
                                                    <input id="datapicker2" type="text" value="02-16-2012" class="form-control">
                                                </div>

                                                <div class="form-group col-lg-12">
                                                    <label>Fasilitas Sekolah</label>
                                                    <div class="checkbox checkbox-circle">
                                                        <input id="checkbox7" type="checkbox">
                                                        <label for="checkbox7">
                                                            Lapangan
                                                        </label>
                                                        <div>
                                                            <input id="checkbox8" type="checkbox">
                                                            <label for="checkbox">
                                                                Perpustakaan
                                                            </label>
                                                        </div>
                                                        <input id="checkbox9" type="checkbox">
                                                        <label for="checkbox9">
                                                            Ruang Kelas
                                                        </label>
                                                        <div>

                                                            <input id="checkbox10" type="checkbox">
                                                            <label for="checkbox9">
                                                                Komputer
                                                            </label>
                                                        </div>
                                                        <input id="checkbox9" type="checkbox">
                                                        <label for="checkbox9">
                                                            MCK
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="form-group"><label class="col-sm-2 control-label">Jenis Sekolah</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>SD</option>
                                                            <option>SMP </option>
                                                            <option>SMA </option>
                                                            <option>SMK </option>
                                                            <option>S1 / D3 </option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group"><label class="col-sm-2 control-label">Kondisi</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>Rusak</option>
                                                            <option>Baik </option>
                                                            <option>Sangat Baik</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Nama Desa</label>
                                                    <input type="" value="" id="" class="form-control" name="" placeholder="Desa" name="email">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Alamat</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Alamat" name="company">
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right m-t-xs">
                                        <a class="btn btn-default prev" href="#">Previous</a>
                                        <a class="btn btn-default next" href="#">Next</a>
                                    </div>

                                </div>

                                <div id="step2" class="p-m tab-pane">

                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <img src="<?= base_url() ?>template/login/img/hospital.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-credit fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>Data Kesehatan</strong>
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Nama Rumah Sakit</label>
                                                    <input type="text" value="" id="" class="form-control" name="NIK" placeholder="Nama Sekolah">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah Petugas</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Jumlah" name="nama">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah Bidan</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="nama" name="nama">
                                                </div>
                                                <div class="col-xs-4 form-group">
                                                    <label>Tahun Bangunan</label>
                                                    <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                                </div>

                                                <div class="form-group col-lg-12">
                                                    <label>Fasilitas RS</label>
                                                    <div class="checkbox checkbox-circle">
                                                        <input id="checkbox7" type="checkbox">
                                                        <label for="checkbox7">
                                                            Alat Medis
                                                        </label>
                                                        <div>
                                                            <input id="checkbox8" type="checkbox">
                                                            <label for="checkbox">
                                                                Lab
                                                            </label>
                                                        </div>
                                                        <input id="checkbox9" type="checkbox">
                                                        <label for="checkbox9">
                                                            Ruang Kelas
                                                        </label>
                                                        <div>

                                                            <input id="checkbox10" type="checkbox">
                                                            <label for="checkbox9">
                                                                Komputer
                                                            </label>
                                                        </div>
                                                        <input id="checkbox9" type="checkbox">
                                                        <label for="checkbox9">
                                                            MCK
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="form-group"><label class="col-sm-2 control-label">Fasilitas Kesehatan</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>PUSTU</option>
                                                            <option>Puskesmas</option>
                                                            <option>RUmah Sakit </option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group"><label class="col-sm-2 control-label">Kondisi</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>Rusak</option>
                                                            <option>Baik </option>
                                                            <option>Sangat Baik</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Nama Desa</label>
                                                    <input type="" value="" id="" class="form-control" name="" placeholder="Desa" name="email">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Alamat</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Alamat" name="company">
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-right m-t-xs">
                                        <a class="btn btn-default prev" href="#">Previous</a>
                                        <a class="btn btn-default next" href="#">Next</a>
                                    </div>

                                </div>

                                <div id="step3" class="p-m tab-pane">

                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <img src="<?= base_url() ?>template/login/img/economic.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-credit fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>Data Ekonomi</strong> established fact that a reader will be distracted by the readable
                                                <br /><br />Many desktop publishing packages and web page editors now use
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Nama Desa</label>
                                                    <input type="" value="" id="" class="form-control" name="card_name">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Potensi SDA</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Produk Unggulan</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jenis Usaha</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Nama BUMDES</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah UMKM</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right m-t-xs">
                                        <a class="btn btn-default prev" href="#">Previous</a>
                                        <a class="btn btn-default next" href="#">Next</a>
                                    </div>

                                </div>

                                <div id="step4" class="tab-pane">
                                    <div class="row text-center m-t-lg m-b-lg">
                                        <div class="col-lg-12">
                                            <i class="pe-7s-check fa-5x text-muted"></i>
                                            <p class="small m-t-md">
                                                <strong>Data akan disimpan pada database sistem </strong>
                                                <br>Apakah anda sudah menginputkan data dengan benar?
                                            </p>
                                        </div>
                                        <div class="checkbox col-lg-12">
                                            <input type="checkbox" class="i-checks approveCheck" name="approve"> Ya, Data Sudah Benar!
                                        </div>
                                    </div>
                                    <div class="text-right m-t-xs">
                                        <a class="btn btn-default prev" href="#">Previous</a>
                                        <a class="btn btn-default next" href="#">Next</a>
                                        <a class="btn btn-success submitWizard" href="#">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>

        </div>

    </div>





    <script>
        $(function() {

            $('#datepicker').datepicker();
            $("#datepicker").on("changeDate", function(event) {
                $("#my_hidden_input").val(
                    $("#datepicker").datepicker('getFormattedDate')
                )
            });

            $('#datapicker2').datepicker();

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $('a[data-toggle="tab"]').removeClass('btn-primary');
                $('a[data-toggle="tab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('.next').click(function() {
                var nextId = $(this).parents('.tab-pane').next().attr("id");
                $('[href=#' + nextId + ']').tab('show');
            })

            $('.prev').click(function() {
                var prevId = $(this).parents('.tab-pane').prev().attr("id");
                $('[href=#' + prevId + ']').tab('show');
            })

            $('.submitWizard').click(function() {

                var approve = $(".approveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');

                    // Serialize data to post method
                    var datastring = $("#simpleForm").serialize();

                    // Show notification
                    swal({
                        title: "Thank you!",
                        text: "You approved our example form!",
                        type: "success"
                    });
                    //            Example code for post form
                    //            $.ajax({
                    //                type: "POST",
                    //                url: "your_link.php",
                    //                data: datastring,
                    //                success: function(data) {
                    //                    // Notification
                    //                }
                    //            });
                } else {
                    // Show notification
                    swal({
                        title: "Error!",
                        text: "You have to approve form checkbox.",
                        type: "error"
                    });
                }
            })
        });
    </script>

    <script src="<?= base_url() ?>template/homer/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>