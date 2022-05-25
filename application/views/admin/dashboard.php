<link rel="stylesheet" type="text/css" href="<?php echo site_url('public/css/calendar.css'); ?>">
<style>
    #cal{margin-top: 0px;}
    #cal .header .hook{width: 0;}
    #cal td{width: 36px; height: 36px; line-height: 36px;}
</style>


<div class="container-fluid">
    <div class="row">
   		<?php echo $this->session->flashdata('error'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center">ড্যাশবোর্ডে স্বাগতম</h1>
            </div>

            <div class="panel-body">
                <div class="col-md-3">
                    <div class="dash-box dash-box-1">
                        <span>মোট বিভাগ</span>
                        <h1><?php echo $total_category; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-4">
                        <span>মোট উপবিভাগ</span>
                        <h1><?php echo $toal_subdivision; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-2">
                        <span>মোট পোস্ট</span>
                        <h1><?php echo $total_post; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-3">
                        <span>মোট বিজ্ঞাপন</span>
                        <h1><?php echo $total_ad; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-5">
                        <span>মোট এডসেন্স</span>
                        <h1>0</h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-6">
                        <span>গত মাসে  ভিজিটর<span>
                        <h1><?php echo $last_month_visitor; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-7">
                        <span>আজকের ভিজিটর</span>
                        <h1><?php echo $todays_visitor; ?></h1>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-8">
                        <span>সর্বমোট ভিজিটর</span>
                        <h1><?php echo $total_visitor; ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-md-12 chart">
                <div class="col-md-6">
                    <div class="panel panel-default">
                    <!--pre><?php print_r($br_data); ?></pre-->
                        <div class="panel-heading"><b>ব্রাউজার পরিসংখ্যান</b></div>

                        <div class="panel-body">
                            <div id="piechart_3d"></div>
                        </div>

                        <div class="panel-footer"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                    <!--/pre><?php print_r($device_data); ?></pre-->
                        <div class="panel-heading"><b>ডিভাইস পরিসংখ্যান</b></div>

                        <div class="panel-body">
                            <div id="piechart_3d2"></div>
                        </div>

                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>

        </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- PIE CHART -->
         <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {

            var data = google.visualization.arrayToDataTable([
              ['Browser', 'Number'],
              <?php foreach ($br_data as $br_key => $br_value) { ?>
              ['<?php echo $br_key ;?>',<?php echo $br_value ;?>],
              <?php } ?>
            ]);

            var options = {
              title: '',
              is3D: true,
              'width': 450,
              'height': 400,
              'chartArea': {'width': '100%', 'height': '80%'},
              'legend': {'position': 'bottom'}
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

            chart.draw(data, options);
          }
        </script>

        <!-- PIE CHART 2 -->
         <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {

            var data = google.visualization.arrayToDataTable([
              ['Device', 'Number'],
              <?php foreach ($device_data as $dd_key => $dd_value) { ?>
              ['<?php echo $dd_key; ?>',<?php echo $dd_value; ?>],
              <?php } ?>
            ]);

            var options = {
              title: '',
              is3D: true,
              'width': 450,
              'height': 400,
              'chartArea': {'width': '100%', 'height': '80%'},
              'legend': {'position': 'bottom'}
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));

            chart.draw(data, options);
          }
        </script>

        <!-- Area Chart -->
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Year', 'Sales', 'Expenses'],
              ['2013',  1000,      400],
              ['2014',  1170,      460],
              ['2015',  660,       1120],
              ['2016',  1030,      540]
            ]);

            var options = {
              title: '',
              hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
              vAxis: {minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }
        </script>
      
      <script type="text/javascript">
        google.charts.load('upcoming', {'packages':['geochart']});
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {

          var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 200],
            ['United States', 300],
            ['Brazil', 400],
            ['Canada', 500],
            ['France', 600],
            ['RU', 700]
          ]);

          var options = {};

          var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

          chart.draw(data, options);
        }
      </script>

    <script>
        $(document).ready(function(){
            hitting();
            //setInterval(hitting,5000);
        });

        function hitting(){
            $.ajax({
                url: '<?php echo site_url('home/c_counter');?>',
                type: 'POST',
            })
            .done(function(response) {
                console.log(response);
            });
        }
    </script>