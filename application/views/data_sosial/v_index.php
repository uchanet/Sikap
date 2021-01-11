<!-- Main Wrapper -->
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
                            <span>FooTable</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Data Sosial
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

                        <a href="<?= base_url('sosial/add'); ?>" class="btn btn-primary"> Tambah</a> Data Keluarga

                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control input-sm m-b-md" id="filter" placeholder="Search in table">
                        <table id="table" class="footable table table-stripped toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
                            <thead>
                                <tr>

                                    <th data-toggle="true">NIK</th>
                                    <th>Nama</th>
                                    <th>Tgl_Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th data-hide="all">Gol.Darah</th>
                                    <th data-hide="all">Pendidikan</th>
                                    <th data-hide="all">Agama</th>
                                    <th data-hide="all">Alamat</th>
                                    <th data-hide="all">Rt/Rw</th>
                                    <th data-hide="all">Jumlah Jiwa</th>
                                    <th data-hide="all">Status Pernikahan</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>232932932300129</td>
                                    <td>Dita Annggun</td>
                                    <td>12/12/93</td>
                                    <td>Perempuan</td>
                                    <td><span class="pie">3,1</span></td>
                                    <td>B</td>
                                    <td>S1</td>
                                    <td>Islam</td>
                                    <td>Jl.sadas</td>
                                    <td>3</td>
                                    <td>Belum Menikah</td>

                                </tr>
                                <tr>
                                    <td>232932932300119</td>
                                    <td>Ade Damay</td>
                                    <td>12/02/90</td>
                                    <td>Perempuan</td>
                                    <td><span class="pie">3,1</span></td>
                                    <td>AB</td>
                                    <td>S1</td>
                                    <td>Islam</td>
                                    <td>Jl.Garut</td>
                                    <td>6</td>
                                    <td>Belum Menikah</td>
                                </tr>
                                <tr>
                                    <td>Alpha project</td>
                                    <td>Alice Jackson</td>
                                    <td>0500 780909</td>
                                    <td>Nec Euismod In Company</td>
                                    <td><span class="pie">6,9</span></td>
                                    <td>40%</td>
                                    <td>Jul 16, 2013</td>
                                    <td>Jul 18, 2013</td>
                                    <td>Jul 18, 2013</td>
                                    <td>Jul 18, 2013</td>
                                    <td>Jul 18, 2013</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>


            </div>

        </div>
    </div>


    <!-- <div class="normalheader transition animated fadeIn">
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
                    DataTables
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
                        Standard table
                    </div>
                    <div class="panel-body">
                        <table id="example2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div> -->