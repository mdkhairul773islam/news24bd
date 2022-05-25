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
    
    <!--title><?php //echo filter($site_name). " | ". filter($meta_title); ?></title-->
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
    
    <li><a href="#">দেশজুড়ে <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=ঢাকা'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ঢাকা</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=খুলনা'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>খুলনা</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ময়মনসিংহ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ময়মনসিংহ</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=রাজশাহী'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>রাজশাহী</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বরিশাল'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বরিশাল</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=সিলেট'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>সিলেট</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=চট্রগ্রাম'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>চট্রগ্রাম</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=রংপুর'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>রংপুর</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=জেলার খবর'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>জেলার খবর</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বিবিধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিবিধ</a></li>
    </ul>
    
    </li>
    
    
    <li><a href="<?php echo site_url('all/news?topic=খেলাধুলা'); ?>">খেলাধুলা</a>
    
    </li>
    
    
    <li><a href="<?php echo site_url('all/news?topic=আন্তর্জাতিক'); ?>">আন্তর্জাতিক</a>
    
    </li>
    
    
    <li><a href="#">বাংলাদেশ <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=জাতীয়'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>জাতীয়</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=রাজনীতি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>রাজনীতি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=আইন ও বিচার'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>আইন ও বিচার</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=অপরাধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>অপরাধ</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=অর্থনীতি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>অর্থনীতি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=কূটনীতি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>কূটনীতি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=প্রশাসন'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>প্রশাসন</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ঘটনা-দুর্ঘটনা'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ঘটনা-দুর্ঘটনা</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=সংসদ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>সংসদ</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বিবিধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিবিধ</a></li>
    
    
    </ul>
    
    </li>
    
    
    <!--li><a href="<?php echo site_url('all/news?topic=জামালপুরের খবর'); ?>">জামালপুরের খবর</a></li-->
    
    
    <li><a href="#">বিনোদন <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=বলিউড'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বলিউড</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ঢালিউড'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ঢালিউড</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=হলিউড'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>হলিউড</a></li>
    
    
    </ul>
    
    </li>
    
    
    <li><a href="#">ফিচার <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=চাকরির বাজার'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>চাকরির বাজার</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=শেয়ার বাজার'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>শেয়ার বাজার</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=লাইফস্টাইল'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>লাইফস্টাইল</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=তথ্যপ্রযুক্তি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>তথ্যপ্রযুক্তি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ভ্রমণ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ভ্রমণ</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=কৃষি ও প্রকৃতি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>কৃষি ও প্রকৃতি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বিবিধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিবিধ</a></li>
    </ul>
    
    </li>
    
    
    <li><a href="#">বিজ্ঞান - প্রযুক্তি <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=গবেষণা'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>গবেষণা</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=টেক'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>টেক</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=আবিষ্কার'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>আবিষ্কার</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=অনলাইন জগৎ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>অনলাইন জগৎ</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=মোবাইল'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>মোবাইল</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=কম্পিউটার ও আইটি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>কম্পিউটার ও আইটি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ফেসবুক ডায়েরি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ফেসবুক ডায়েরি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=অ্যাপস'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>অ্যাপস</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=গেমস্'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>গেমস্</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বিবিধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিবিধ</a></li>
    </ul>
    
    </li>
     <li><a href="<?php echo site_url('all/news?topic=শিক্ষা'); ?>">শিক্ষা</a> </li>
    
    <li><a href="#">গ্যালারি <i class="fa fa-angle-down"></i></a>
    <ul>
        <li>
        <a href="<?php echo site_url('home/video_gallery'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ভিডিও গ্যালারি</a></li>
        
        <li>
        <a href="<?php echo site_url('home/photo_gallery'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ফটো গ্যালারি</a></li>
        
    
    </ul>
    
    </li>
    
   
    <li><a href="#">অন্যান্য <i class="fa fa-angle-down"></i></a>
    <ul>
    <li>
    <a href="<?php echo site_url('all/news?topic=বিশ্ব অর্থনীতি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিশ্ব অর্থনীতি</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=মিডিয়া কর্নার'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>মিডিয়া কর্নার</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=ব্যবসা-বাণিজ্য'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>ব্যবসা-বাণিজ্য</a></li>
    
    <li>
    <a href="<?php echo site_url('all/news?topic=বিদ্যুৎ ও জ্বালানি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিদ্যুৎ ও জ্বালানি</a></li>
    
    <li>
      <a href="<?php echo site_url('all/news?topic=টেলিকম'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>টেলিকম</a></li>
      
      <li>
        <a href="<?php echo site_url('all/news?topic=শরীর ও মন'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>শরীর ও মন</a></li>
        
        <li>
          <a href="<?php echo site_url('all/news?topic=রকমারি'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>রকমারি</a></li>
          
          <li>
            <a href="<?php echo site_url('all/news?topic=প্রবাসীদের কথা'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>প্রবাসীদের কথা</a></li>
            
            <li>
              <a href="<?php echo site_url('all/news?topic=উদ্ভাবন'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>উদ্ভাবন</a></li>
              
              <li>
                <a href="<?php echo site_url('all/news?topic=বিবিধ'); ?>"><i style="padding: 0 0 0 9px;" class="fa fa-angle-left"></i>বিবিধ</a></li>
                
                
              </ul>
              
            </li>
            
            
            
          
          
          <!--li><a target="_blank" href="http://www.epaperajkerjamalpur.com/"> ই-পেপার </a></li-->
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