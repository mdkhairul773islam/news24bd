 <?php
  $header = json_decode(siteMeta("header"),true);
  $footer = json_decode(siteMeta("footer"),true); 
 ?>
 
 <style>
     .col-sm-4 {
         float: left;
     }
     .footer-text {padding: 0 !important;}
 </style>
 
    <section class="container-fluid">
      <div class="row footer">
        <div class="container">
            <div class="row footer-link">
                <div class="col-6">
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url(); ?>">হোম</a></li>
                        <li><a href="#">মতামত</a></li>
                        <li><a href="#">কৌতুক</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url("all/news?topic=বাংলাদেশ"); ?>">বাংলাদেশ</a></li>
                        <li><a href="<?php echo site_url("all/news?topic=বিনোদন"); ?>">বিনোদন</a></li>
                        <li><a href="#">পাঁচমিশালি</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url("all/news?topic=আন্তর্জাতিক"); ?>">আন্তর্জাতিক</a></li>
                        <li><a href="#">ফিচার</a></li>
                        <li><a href="#">তথ্যপ্রযুক্তি</a></li>
                      </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url("all/news?topic=অর্থনীতি"); ?>">অর্থনীতি</a></li>
                        <li><a href="#">জীবনযাপন</a></li>
                        <li><a href="#">আমরা</a></li>
                      
                      </ul>
                    </div>
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url("all/news?topic=খেলা"); ?>">খেলা</a></li>
                    
                        <li><a href="<?php echo site_url("all/news?topic=শিক্ষা"); ?>">শিক্ষা</a></li>
                        <li><a href="#">বিনোদন</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4 col-12">
                      <ul>
                        <li><a href="<?php echo site_url("home/video_gallery"); ?>">ভিডিও</a></li>
                        <li><a href="<?php echo site_url("home/photo_gallery"); ?>">ছবি</a></li>
                        <li><a href="<?php echo site_url("home/archive"); ?>">আর্কাইভ</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-md-3" style="position: inherit; top: 45px; font-family:arial">                    
                    <ul class="social-link">
                      <li><a class="facebook" target="_blank" href="<?php echo $social->s_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="twitter" target="_blank" href="<?php echo $social->s_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="google-plus" target="_blank" href="<?php echo $social->s_gplus; ?>"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="youtube" target="_blank" href="<?php echo $social->s_youtube; ?>"><i class="fa fa-youtube"></i></a></li>
                      <li><a class="rss" target="_blank" href="<?php echo $social->s_rssFeed; ?>"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <!--<a target="_blank" title="Download Our Android App" href="<?php echo site_url('public/ajker_jamalpur.apk'); ?>" download>
                        <img style="width: 65px;margin-top: 5px;height: 54px;" src="<?php echo site_url('public/Android-icon.png'); ?>" />
                    </a>-->
                    <p></p>
                    
                    <p style="padding-top:0px;"><?php echo $header["site_name"] ;?><br> এডিটরঃ মোঃ মোবারক হোসাইন আজাদ</p>
                    <p style="padding-top:0px;"> সহ-সম্পাদকঃ মোঃ জাহিদুল ইসলাম </p>
                </div>
                <div class="col-md-7">
                    <p class="footer-text">
                      ফোন:  <span style="font-size:18px; font-family: 'Roboto';" ><?php echo $footer['addr_moblile'];?></span>&nbsp;  &nbsp; &nbsp; নিউজ রুম মোবাইল: <span style="font-size:18px; font-family: 'Roboto';"> <?php echo $footer['addr_newsroom'];?> </span> <br>
                      ইমেইল: <span style="font-family: Arial;"><?php echo $footer['addr_email'];?> </span>এডিটর ইমেইল: <span style="font-family: Arial;"><?php echo $footer['addr_editor'];?> <br>
                     <?php echo $footer['addr_address'];?> </span>
                    </p>
                </div>
                <div class="col-md-2" style="padding: 0">
                    <p class="footer-text">
                    
                     <!--<span style="font-size:20px"> অনলাইন ভিজিটর:</span>  <span style="font-size:18px"><?php echo $current_visitor;?></span> <br>
                     <span style="font-size:20px"> আজকের  ভিজিটর: </span>  <span style="font-size:18px"><?php echo count($todays_visitor);?></span> <br>
                     <span style="font-size:20px"> সর্বমোট ভিজিটর:</span>  <span style="font-size:18px;"><?php echo count($total_visitor);?></span> <br>-->
                    </p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="container-fluid">
      <div class="row footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <small style="font-family:arial;">© <?php echo date('Y'); ?> <?php echo $header["site_name"] ;?> | কারিগরি সহযোগিতায় - ফ্রিল্যান্স আই টি ল্যাব</small>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    <script src="<?php echo site_url('public/news/js/bootstrap.min.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    <script src="<?php echo site_url('public/news/js/jquery.nicescroll.min.js')?>"></script>
    <script>
      $(document).ready(function(){
        var x = 0;
        $('#search').click(function(){
          x++;
          if(x%2==0){
            $('.search').addClass('hide');
          }else{
            $('.search').removeClass('hide');
          }
        });

        $( "#tabs" ).tabs();

        var count = 0;
        $('#nav-click').on('click', function(){
          count++;
          if(count%2==0){
            $('#search-cover').removeClass('hide');
          }else{
            $('#search-cover').addClass('hide');
          }
        });

        var topheight = $('header').outerHeight(true) + 1;
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();

            if (scroll > topheight) {
                $(".menu").addClass("nav-fix");
            } else {
                $(".menu").removeClass("nav-fix");
            }
        });

        $('.marquee').marquee({
          pauseOnHover: true
        });

        $(function() {
            $(".tabs").niceScroll();
        });

      });
    </script>

  </body>
</html>
