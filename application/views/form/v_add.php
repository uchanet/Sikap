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
                        Form data sosial
                    </div>
                    <div class="panel-body">

                        <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                            <div class="text-center m-b-md" id="wizardControl">

                                <a class="btn btn-primary" href="#step1" data-toggle="tab">Step 1 -
                                    Data Keluarga</a>
                                <a class="btn btn-default" href="#step2" data-toggle="tab">Step 2 -
                                    Data Rumah</a>
                                <a class="btn btn-default" href="#step3" data-toggle="tab">Step 3 -
                                    Data Pengeluaran</a>
                                <a class="btn btn-default" href="#step4" data-toggle="tab">Step 4 -
                                    Konfirmasi</a>

                            </div>

                            <div class="tab-content">
                                <div id="step1" class="p-m tab-pane active">

                                    <div class="row">
                                        <div class="col-lg-3 text-center">
                                            <img src="<?= base_url() ?>template/login/img/family.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-user fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>Foto Profil</strong> Data Kepala Keluarga.
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>No.KK</label>
                                                    <input type="text" value="" id="" class="form-control" name="NIK" placeholder="NIK">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Nama KK</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="nama" name="nama">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label class="control-label">Tanggal Pernikahan</label>
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="10/06/2020">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Alamat</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Alamat" name="company">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>RT/RW</label>
                                                    <input type="" value="" id="" class="form-control" name="" placeholder="RT/RW" name="email">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Jumlah Jiwa</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="Jumlah" placeholder="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>No. HP</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="08xxx. ">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Pendapatan/bln</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Rp. ">
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                                    <div class="col-sm-6"><select class="form-control m-b" name="account">
                                                            <option>Lajang</option>
                                                            <option>Menikah </option>
                                                            <option>Cerai </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Asuransi Kesehatan</label>
                                                    <input type="text" value="" id="" class="form-control" name="" placeholder="Nama Asuransi">
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                                                    <div class="col-lg-6"><select class="form-control m-b" name="account">
                                                            <option>Laki-Laki</option>
                                                            <option>Perempuan </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-12 control-label">Agama</label>
                                                    <div class="col-sm-6"><select class="form-control m-b" name="account">
                                                            <option>Islam</option>
                                                            <option>Kristen </option>
                                                            <option>Katholik </option>
                                                            <option>Hindu </option>
                                                            <option>Budha </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-12 control-label">Pendidikan Terakhir</label>
                                                    <div class="col-sm-6"><select class="form-control m-b" name="account">
                                                            <option>SD</option>
                                                            <option>SMP </option>
                                                            <option>SMA </option>
                                                            <option>S1 / D3 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-12 control-label">Gol. Darah</label>
                                                    <div class="col-lg-6"><select class="form-control m-b" name="account">
                                                            <option>A</option>
                                                            <option>B </option>
                                                            <option>AB </option>
                                                            <option>O</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group"><label class="col-sm-12 control-label">Pekerjaan</label>
                                                    <div class="col-sm-6"><select class="form-control m-b" name="account">
                                                            <option>Tidak Bekerja</option>
                                                            <option>PNS </option>
                                                            <option>Wiraswasta </option>
                                                            <option>Wirausaha </option>
                                                            <option>Petani/Neayan </option>
                                                        </select>
                                                    </div>
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
                                            <img src="<?= base_url() ?>template/login/img/home.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-credit fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>Data Rumah</strong>
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="form-group"><label class="col-sm-2 control-label">Sumber Listrik</label>
                                                    <div class="col-sm-2"><select class="form-control m-b" name="account">
                                                            <option>PLN</option>
                                                            <option>Numpang Tetangga </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Jenis Daya</label>
                                                    <div class="col-sm-2"><select class="form-control m-b" name="account">
                                                            <option>PLTA</option>
                                                            <option>PLTS </option>
                                                            <option>Genset </option>
                                                            <option>Pelita </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Jumlah Daya</label>
                                                    <div class="col-sm-2"><select class="form-control m-b" name="account">
                                                            <option>450 VA</option>
                                                            <option>900 VA </option>
                                                            <option>1200 VA </option>
                                                            <option>2000 VA </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Sumber Air</label>
                                                    <input type="" value="" id="" class="form-control" name="card_name">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Energi Masak</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Kepemilikan Rumah</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>Milik Sendiri</option>
                                                            <option>Numpang </option>
                                                            <option>Kontrak </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">MCK</label>
                                                    <div class="col-sm-4"><select class="form-control m-b" name="account">
                                                            <option>Dalam</option>
                                                            <option>Luar </option>
                                                            <option>Tidak Ada </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label>jumlah Daya</label>
                                                    <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <div class="row">
                                                        <div class="col-xs-4 form-group">
                                                            <label>Jenis Konstruksi</label>
                                                            <input class="form-control" placeholder="" type="text" name="cvc">
                                                        </div>
                                                        <div class="col-xs-4 form-group">
                                                            <label>Dinding</label>
                                                            <input class="form-control" placeholder="" type="text" name="expire_month">
                                                        </div>
                                                        <div class="col-xs-4 form-group">
                                                            <label>Tahun Bangunan</label>
                                                            <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                                        </div>
                                                    </div>
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
                                            <img src="<?= base_url() ?>template/login/img/money.svg" class="image" width="200px" alt="" />

                                            <!-- <i class="pe-7s-credit fa-5x text-muted"></i> -->
                                            <p class="small m-t-md">
                                                <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                                <br /><br />Many desktop publishing packages and web page editors now use
                                            </p>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <fieldset>
                                                    <legend>Energi</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Biaya Listrik</label>
                                                        <input type="" value="" id="" class="form-control" placeholder="Rp./Bulan" name="card_name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Biaya Kendaraan</label>
                                                        <input type="text" value="" id="" class="form-control" placeholder="Rp./Bulan" name="" name="card_number">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Biaya Masak</label>
                                                        <input type="text" value="" id="" class="form-control" placeholder="Rp./Bulan" name="" name="billing_address">
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <legend>Pendidikan</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Biaya Pendidika Semester Semua Anak</label>
                                                        <input type="" value="" id="" class="form-control" name="card_name" placeholder="Rp./Bulan">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Biaya Alat/Bahan</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="card_number">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Jajan</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="billing_address">
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <legend>Pangan</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Beras</label>
                                                        <input type="" value="" id="" class="form-control" placeholder="Rp./Bulan" name="card_name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Lauk pauk</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="card_number">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Minyak</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="billing_address">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-4 form-group">
                                                                <label>Minuman</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="cvc">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>Air Minum</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="expire_month">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>Rokok</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="expire_year">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Usaha</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Benih</label>
                                                        <input type="" value="" id="" class="form-control" placeholder="Rp./Bulan" name="card_name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Pupuk</label>
                                                        <input type="text" value="" id="" class="form-control" placeholder="Rp./Bulan" name="" name="card_number">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Racun</label>
                                                        <input type="text" value="" id="" class="form-control" placeholder="Rp./Bulan" name="" name="billing_address">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-4 form-group">
                                                                <label>Upah Buruh</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="cvc">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>Sewa Lahan/Alat</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="expire_month">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>Transportasi Penjualan</label>
                                                                <input class="form-control" placeholder="Rp./Bulan" type="text" name="expire_year">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Kesehatan</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Biaya Obat</label>
                                                        <input type="" value="" id="" class="form-control" name="card_name" placeholder="Rp./Bulan">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Asuransi Kesehatan</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="card_number">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Alat Mandi/Cuci</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan" name="billing_address">
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <legend>Sosial</legend>

                                                    <div class="form-group col-lg-6">
                                                        <label>Iuran Kampung</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Iuran Arisan</label>
                                                        <input type="text" value="" id="" class="form-control" name="" placeholder="Rp./Bulan">
                                                    </div>

                                                </fieldset>
                                                <fieldset>
                                                    <legend>Komunikasi</legend>
                                                    <div class="form-group col-lg-12">
                                                        <label>Biaya Pulsa</label>
                                                        <input type="" value="" id="" class="form-control" placeholder="Rp./Bulan" name="card_name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Biaya Internet</label>
                                                        <input type="text" value="" id="" class="form-control" placeholder="Rp./Bulan" name="" name="card_number">
                                                    </div>

                                                </fieldset>
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

            $('.next').click(function() {
                var nextId = $(this).parents('.tab-pane').next().attr("id");
                $('[href=#' + nextId + ']').tab('show');
            })

            $('.prev').click(function() {
                var prevId = $(this).parents('.tab-pane').prev().attr("id");
                $('[href=#' + prevId + ']').tab('show');
            })


        });
    </script>