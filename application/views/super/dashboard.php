<link rel="stylesheet" type="text/css" href="<?php echo site_url('public/css/calendar.css'); ?>">
<style>
    #cal{margin-top: 0px;}
    #cal .header .hook{width: 0;}
    #cal td{width: 36px; height: 36px; line-height: 36px;}
</style>
<!--div class="container-fluid">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('super/dashboard');?>"><?php echo caption(); ?>Home</a></li>            
        </ol>
    </div>
</div-->

<div class="container-fluid">
    <div class="row">
        <?php echo $this->session->flashdata('error'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center"><?php echo caption('Welcome_To_Dashboard');?></h1>
            </div>

            <div class="panel-body">
                <div class="col-md-3">
                    <div class="dash-box dash-box-1">
                        <span><?php echo caption('Total_Teachers'); ?> </span>
                        <h1>56</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-4">
                        <span><?php echo caption('Total_Committee_Member'); ?></span>
                        <h1>16</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-2">
                        <span><?php echo caption('Total_Employee'); ?></span>
                        <h1>26</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-3">
                        <span><?php echo caption('Total_Students'); ?></span>
                        <h1>2345</h1>
                    </div>                    
                </div>                

                <div class="col-md-3">
                    <div class="dash-box dash-box-5">
                        <span><?php echo caption('Total_Paid_Fee'); ?> </span>
                        <h1>10560</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-6">
                        <span><?php echo caption('Total_Due_Fee'); ?></span>
                        <h1>20600</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-7">
                        <span><?php echo caption('Total_Salary_Paid'); ?></span>
                        <h1>5200</h1>
                    </div>                    
                </div>

                <div class="col-md-3">
                    <div class="dash-box dash-box-8">
                        <span><?php echo caption('Total_Cost'); ?></span>
                        <h1>650</h1>
                    </div>                    
                </div>
            </div>

            <div class="col-md-12 chart">
                <div class="col-md-6">
                    <div class="panel panel-default">
                    <!--pre><?php print_r($br_data); ?></pre-->
                        <div class="panel-heading"><b><?php echo caption('Web_Browser_Statistics'); ?></b></div>

                        <div class="panel-body">
                            <div id="piechart_3d"></div>
                        </div>

                        <div class="panel-footer"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                    <!--/pre><?php print_r($device_data); ?></pre-->
                        <div class="panel-heading"><b><?php echo caption('Visiting_Device_Statistics'); ?></b></div>

                        <div class="panel-body">
                            <div id="piechart_3d2"></div>
                        </div>

                        <div class="panel-footer"></div>
                    </div>                   
                </div>
            </div>

            <div class="col-md-12 chart">
                <div class="col-md-6">
                    <div class="panel panel-default">
                            <div class="panel-heading"><b><?php echo caption('Web_Site_Statistics'); ?></b></div>

                            <div class="panel-body" style="min-height: 315px;">
                                <div id="chart_div"></div>
                            </div>

                            <div class="panel-footer"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                    <div class="panel panel-default">
                            <div class="panel-heading"><b><?php echo caption('Word_Wide_Visitor_Statistics'); ?></b></div>

                            <div class="panel-body">
                                <div id="regions_div"></div>
                            </div>

                            <div class="panel-footer"></div>
                        </div>
                    </div>
            </div>

            <div class="col-md-12 chart">
                <div class="col-md-6">
                    <div class="panel panel-default">
                            <div class="panel-heading"><b><?php echo caption('Visitor_Statistics'); ?> </b></div>

                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td style="border-top: none;"><?php echo caption('Online_Visitors'); ?></td>
                                        <td style="border-top: none;"><?php echo $current_visitor; ?> <?php echo caption('jon'); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo caption('Todays_Visitors'); ?></td>
                                        <td><?php echo $todays_visitor; ?>  <?php echo caption('jon'); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo caption('Last_Months_Visitors'); ?></td>
                                        <td><?php echo $last_month_visitor; ?> <?php echo caption('jon'); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo caption('Total_Visitors'); ?></td>
                                        <td><?php echo $total_visitor; ?> <?php echo caption('jon'); ?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="panel-footer"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="cal">
                                    <div class="header">
                                        <span class="left button" id="prev"> &lang; </span>
                                        <span class="left hook"></span>
                                        <span class="month-year" id="label"> June 2010 </span>
                                        <span class="right hook" id=""></span>
                                        <span class="right button" id="next"> &rang; </span>
                                    </div>
                                    <table id="days">
                                        <tr>
                                            <td>sun</td>
                                            <td>mon</td>
                                            <td>tue</td>
                                            <td>wed</td>
                                            <td>thu</td>
                                            <td>fri</td>
                                            <td>sat</td>
                                        </tr>
                                    </table>
                                    <div id="cal-frame">
                                        <table class="curr">
                                            <tr><td class="nil"></td><td class="nil"></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                                            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td class="today">11</td><td>12</td></tr>
                                            <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
                                            <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
                                            <tr><td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr>
                                        </table>
                                    </div>
                                </div>

                        <!--div class="panel panel-default">
                            <div class="panel-heading"><b>ক্যালেন্ডার</b></div>

                            <div class="panel-body">
                                
                            </div>

                            <div class="panel-footer"></div>
                        </div-->
                    </div>
            </div>

            <div class="panel-footer">&nbsp;</div>

        </div>
    </div>
  </div>
</div>

<script src="<?php echo site_url('public/js/calendar.js'); ?>"></script>
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