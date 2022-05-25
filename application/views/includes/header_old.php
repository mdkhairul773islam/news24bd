<?php 
  $logo = json_decode(siteMeta("logo"),true); 
  $header = json_decode(siteMeta("header"),true); 
?>
<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php if(isset($news)){ ?>
        <meta property="og:image" content="<?php echo ($news) ? site_url($news[0]->photo) : ""; ?>"/>
        <meta property="og:title" content="<?php echo ($news) ? filter($news[0]->title) : ""; ?>"/>
    <?php } ?>
    
    <!--title><?php echo filter($site_name). " | ". filter($meta_title); ?></title-->
    <title><?php echo $header["site_name"]. " | ". filter($meta_title); ?></title>
    <link href="<?php echo site_url($logo["faveicon"]);?>" rel="icon">
    <link href="<?php echo site_url('public/news/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/responsive.css')?>">

    <!-- Angular -->
    <script type="text/javaScript" src="<?php echo site_url('public/js/angular.js'); ?>"></script>
    <script type="text/javaScript" src="<?php echo site_url('public/js/ngScript.js'); ?>"></script>

    <!-- Important Script File -->
    <script src="<?php echo site_url('public/news/js/jquery.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo site_url('public/news/js/jquery-ui.js')?>"></script>
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5b7a4d13f8352a0011896d0c&product=inline-share-buttons"></script>
    
    <script>
        $(document).ready(function(){
            hitting();
            setInterval(hitting,5000);
        });

        function hitting(){
            $.ajax({
                url: '<?php echo site_url('home/c_counter');?>',
                type: 'POST',
            })
            .done(function(response) {
                //console.log(response);
            });
        }
        
    </script>

    <style>
       .ln_right i,
       .footer-link ul li a:hover
       {
         color: <?php echo siteMeta("theme_color"); ?>;
       }
       .menu,
       form.search button,
       .menu ul li ul li a:hover
       .ln_left,
       .menu ul li.active,
       .menu ul li:hover
       {
         background: <?php echo siteMeta("theme_color"); ?>;
       }
       .ln_wrapper {
         border-color: <?php echo siteMeta("theme_color"); ?>;
       }
       .ln_left_arrow {
         border-left-color: <?php echo siteMeta("theme_color"); ?>;
       }
       {background: #777 !important;}
       .card-body {
            height: 99px;
        }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <a href="<?php echo site_url(); ?>" class="logo">
                <img src="<?php echo site_url($logo["logo"]);?>" alt="logo" />
              </a>
              <small>
               <i class="fa fa-map-marker"></i>  ঢাকা &nbsp;
               <i class="fa fa-calendar" aria-hidden="true"></i>
                <?php
                   //$days = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
                   //echo $days[date('w') + 1].", ";
                   
                   $week_day = date('l');
                   if($week_day == ' Saturday'){
                        echo 'শনিবার';
                   }
                   else if($week_day == 'Sunday'){
                        echo 'রবিবার';
                   }
                   else if($week_day == 'Monday'){
                        echo 'সোমবার';
                   }
                   else if($week_day == 'Tuesday'){
                        echo 'মঙ্গলবার';
                   }
                   else if($week_day == 'বুধবার'){
                        echo 'শনিবার';
                   }
                   else if($week_day == 'Thursday'){
                        echo 'বৃহস্পতিবার';
                   }
                   else if($week_day == 'Friday'){
                        echo 'শুক্রবার';
                   }
                   
                 ?>
                <?php echo $this->bangladate->bangla_number(date("d"))." ".$this->bangladate->bangla_month(date("m"))." ".$this->bangladate->bangla_number(date("Y")); ?> |
                <?php echo $bnDate[0]." ".$bnDate[1]." ".$bnDate[2] ; ?> বঙ্গাব্দ
              </small>
            </div>
            <div class="col-md-8 header-ad">
                <div class="row" style="float: right;">
                  <?php echo show_ads("HBL1","750x97"); ?>
                </div>
            </div>
        </div>
      </div>
    </header>

   <?php
     $nav_items = json_decode(siteMeta("menu_data"),true);
   ?>


    <section class="menu">
      <div class="container">
        <div class="navbar navbar-expand-md row">
            <button id="nav-click" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
          <ul class="collapse navbar-collapse" id="navbarNav">
            <li class="active"><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i></a></li>
            
            
            
            <?php foreach ($nav_items as $key => $item) {
              $child = (isset($item["children"]) ? true:false);
            ?>
            
            <li><a href="<?php if($child){echo "#";}else{
           	 //echo site_url($item["href"]);
           	 if($item["href"] != null){
           	 	echo site_url($item["href"]);
           	 }else{
           	 	echo site_url("all/news?topic=".$item['text']);
           	 }
            } 
            
            ?>"><?php echo $item["text"]; if($child){echo ' <i class="fa fa-angle-down"></i>';} ?></a>
            <?php if($child){
              $child_data = $item["children"];
            ?>
              <ul>
                <?php foreach ($child_data as $c_key => $c_value) { ?>
                <li>
                <a href="<?php 
                echo site_url($c_value["href"]);
                 if($c_value["href"] != null){
           	 	//echo site_url($c_value["href"]);
           	 }else{
           	 	echo "all/news?topic=".$c_value["text"];
           	 }
                 ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i><?php echo $c_value["text"]; ?></a></li>
                
                <?php } ?>
                
              </ul>
            <?php } ?>
            
            </li>
        
            <?php } ?>
            
            <li><a target="_blank" href="http://www.epaperajkerjamalpur.com/"> ই-পেপার </a></li>
            
            
            
            <!--li><a href="#">বাংলাদেশ <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="#">জাতীয়</a></li>
                <li><a href="#">রাজনীতি</a></li>
                <li><a href="#">অর্থনীতি</a></li>
              </ul>
            </li>
            <li><a href="#">দেশজুড়ে <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="#">জেলার খবর</a></li>
              </ul>
            </li>
            <li><a href="<?php //echo site_url("home/singlepage");?>">আন্তর্জাতিক</a></li>
            <li><a href="#">খেলাধুলা <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="#">ক্রিকেট</a></li>
                <li><a href="#">ফুটবল</a></li>
              </ul>
            </li>
            <li>
                <a href="#">বিনোদন <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="#">হলিউড</a></li>
                    <li><a href="#">বলিউড</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ফিচার <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="#">লাইফস্টাইল</a></li>
                    <li><a href="#">তথ্যপ্রযুক্তি</a></li>
                    <li><a href="#">ভ্রমণ</a></li>
                    <li><a href="#">কৃষি ও প্রকৃতি</a></li>
                </ul>
            </li>
            <li><a href="<?php //echo site_url('home/video_gallery');?>">ভিডিও গ্যালারী</a></li>
            <li><a href="#">মতামত</a></li>
            <li><a href="<?php //echo site_url('home/photo_gallery');?>">ফটো গ্যালারি</a></li-->
          </ul>
          <span id="search-cover" class="pull-right search-cover">
            <a href="#" id="search"><i class="fa fa-search"></i></a>
            <form method="post" action="<?php echo site_url('home/searchData'); ?>"  class="search hide">
              <input type="text" name="search_word" placeholder="অনুসন্ধান" style="font-family:arial;">
              <button type="submit" class="btn"><i class="fa fa-search"></i></button>
            </form>

          </span>
        </div>
      </div>
    </section>