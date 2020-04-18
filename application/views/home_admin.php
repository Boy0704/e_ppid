<!-- <div class="row">
	<div class="col-md-12">
		<div class="alert alert-success">
			<h2>Selamat Datang kembali, <?php echo $this->session->userdata('username'); ?></h2>
		</div>
	</div>

</div>
 -->

 <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Informasi Berkala</span>
              <span class="info-box-number"><?php echo t_all('devisi','Informasi Berkala') ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Informasi Setiap Saat</span>
              <span class="info-box-number"><?php echo t_all('devisi','Informasi Setiap Saat') ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Informasi Serta Merta</span>
              <span class="info-box-number"><?php echo t_all('devisi','Informasi Serta Merta') ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rekap Bulanan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong> 1 Jan, 2020 - 30 Des, 2020</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Keterangan </strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Permohonan Informasi</span>
                    <span class="progress-number"><b><?php echo $this->db->get('permohonan_informasi')->num_rows(); ?></b></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Pengajuan Keberatan Informasi</span>
                    <span class="progress-number"><b><?php echo $this->db->get('keberatan_informasi')->num_rows(); ?></b></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Aduan Pelanggaran</span>
                    <span class="progress-number"><b><?php echo $this->db->get('keberatan_informasi')->num_rows(); ?></b></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



      <div class="row">
        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">User Aktif</h3>

                  <div class="box-tools pull-right">
                    <!-- <span class="label label-danger">8 New Members</span> -->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php foreach ($this->db->get('a_user')->result() as $rw): ?>
                        <li>
                          <img src="image/user/<?php echo $rw->foto ?>" alt="User Image" style="width: 50px;">
                          <a class="users-list-name" href="#"><?php echo $rw->nama_lengkap ?></a>
                          <!-- <span class="users-list-date">Today</span> -->
                        </li>
                    <?php endforeach ?>
                    
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="a_user" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
      </div>

<script src="assets/bower_components/chart.js/Chart.js"></script>
<script type="text/javascript">
	$(function () {

  'use strict';

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  // -----------------------
  // - MONTHLY SALES CHART -
  // -----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
  // This will get the first returned node in the jQuery collection.
  var salesChart       = new Chart(salesChartCanvas);

  var salesChartData = {
    labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus','September','November','Desember'],
    datasets: [
      {
        label               : 'Informasi Berkala',
        fillColor           : '#00c0ef',
        strokeColor         : '#00c0ef',
        pointColor          : '#00c0ef',
        pointStrokeColor    : '#00c0ef',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: '#00c0ef',
        data                : [
        						<?php echo c_bln('devisi','01','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','02','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','03','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','04','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','05','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','06','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','07','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','08','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','09','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','10','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','11','Informasi Berkala') ?>,
        						<?php echo c_bln('devisi','12','Informasi Berkala') ?>
        					  ]
      },
      {
        label               : 'Informasi Setiap Saat',
        fillColor           : '#dd4b39',
        strokeColor         : '#dd4b39',
        pointColor          : '#dd4b39',
        pointStrokeColor    : '#dd4b39',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: '#dd4b39',
        data                : [
        						<?php echo c_bln('devisi','01','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','02','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','03','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','04','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','05','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','06','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','07','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','08','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','09','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','10','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','11','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','12','Informasi Setiap Saat') ?>
        					  ]
      },
      {
        label               : 'Informasi Setiap Saat',
        fillColor           : '#00a65a',
        strokeColor         : '#00a65a',
        pointColor          : '#00a65a',
        pointStrokeColor    : '#00a65a',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: '#00a65a',
        data                : [
        						<?php echo c_bln('devisi','01','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','02','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','03','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','04','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','05','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','06','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','07','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','08','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','09','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','10','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','11','Informasi Setiap Saat') ?>,
        						<?php echo c_bln('devisi','12','Informasi Setiap Saat') ?>
        					  ]
      }
    ]
  };

  var salesChartOptions = {
    // Boolean - If we should show the scale at all
    showScale               : true,
    // Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : false,
    // String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    // Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    // Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    // Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    // Boolean - Whether the line is curved between points
    bezierCurve             : true,
    // Number - Tension of the bezier curve between points
    bezierCurveTension      : 0.3,
    // Boolean - Whether to show a dot for each point
    pointDot                : false,
    // Number - Radius of each point dot in pixels
    pointDotRadius          : 4,
    // Number - Pixel width of point dot stroke
    pointDotStrokeWidth     : 1,
    // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,
    // Boolean - Whether to show a stroke for datasets
    datasetStroke           : true,
    // Number - Pixel width of dataset stroke
    datasetStrokeWidth      : 2,
    // Boolean - Whether to fill the dataset with a color
    datasetFill             : true,
    // String - A legend template
    legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio     : true,
    // Boolean - whether to make the chart responsive to window resizing
    responsive              : true
  };

  // Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);

  // ---------------------------
  // - END MONTHLY SALES CHART -
  // ---------------------------
});
</script>