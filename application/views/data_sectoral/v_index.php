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

                        <a href="<?= base_url('sectoral/add'); ?>" class="btn btn-primary"> Tambah</a> Data Sectoral

                    </div>
                    <div class="panel-body">

                        <table id="table" class="table table-striped table-bordered table-hover" width="100%">

                            <thead>
                                <tr>

                                    <th data-toggle="true">NIK</th>
                                    <th>Nama</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th data-hide="all">Completed</th>
                                    <th data-hide="all">Task</th>
                                    <th data-hide="all">Date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Betha project</td>
                                    <td>John Smith</td>
                                    <td>0800 1111</td>
                                    <td>Erat Volutpat</td>
                                    <td><span class="pie">3,1</span></td>
                                    <td>75%</td>
                                    <td>Jul 18, 2013</td>
                                </tr>
                                <tr>
                                    <td>Gamma project</td>
                                    <td>Anna Jordan</td>
                                    <td>(016977) 0648</td>
                                    <td>Tellus Ltd</td>
                                    <td><span class="pie">4,9</span></td>
                                    <td>18%</td>
                                    <td>Jul 22, 2013</td>
                                </tr>
                                <tr>
                                    <td>Alpha project</td>
                                    <td>Alice Jackson</td>
                                    <td>0500 780909</td>
                                    <td>Nec Euismod In Company</td>
                                    <td><span class="pie">6,9</span></td>
                                    <td>40%</td>
                                    <td>Jul 16, 2013</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>


            </div>

        </div>
    </div>


    <script>
        $.noConflict();
        jQuery(document).ready(function($) {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,

                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                }, {
                    extend: 'csv',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                }, {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                }, {
                    extend: 'print',
                    className: 'btn-sm'
                }]
            });

        });
    </script>



    <!-- <script>
        $(function() {

            // Initialize Example 1
            $('#example1').footable();

            // Initialize Example 2
            $('#example2').footable();

        });
    </script> -->