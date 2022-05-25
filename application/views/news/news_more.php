<style>
  .news-image{
    width: 100%;
    max-width: 475px;
    display: inline-block;
    float: left;
  }
  .news-image img{
    max-height: 270px;
  }
  .news-contet{
    width: 100%;
    max-width: 323px;
    float: right;
    padding: 20px 20px 0;
  }
  .news-heading-item{
    background-color: #fff;
    margin-bottom: 15px;
  }
  .news-heading-item img{
    width: 100%;
    max-width: 120px;
    margin: 0 10px 0 0;
    float: left;
    height: 90px;
  }
  .news-heading-item h5{
    padding: 15px;
  }
  .no-padding{
    padding-left: 0;
  }
  .btn-danger{
    border-radius: 0; 
    background-color: #c82333;
    border-color: #bd2130;
  }
  .btn-danger:hover{
    background-color: #dc3545;
    border-color: #dc3545;
   }
  .btn-danger a{color: #fff;}
  @media screen and (max-width: 992px) {
    .news-contet{max-width: 100%;
      padding: 20px 0px 0;
    }
    .news-heading-item img{
      max-width: 100%;
      margin-bottom: 15px;
    }
    .news-heading-item {
      height: 165px;
    }
    .no-padding, .res-padding{
      padding-left: 20px;
    }
  }
</style>
<?php if($latestNews != NULL){ ?>
    <section id="latestID" class="container">
      <div class="row">
        <div class="ln_wrapper">
          <div class="ln_left">
            <p>সর্বশেষ খবর</p>
          </div>
          <div class="ln_left_arrow"></div>
          <div class="ln_right marquee" data-duration='15000'>
             <ul>
                 <?php foreach ($latestNews as $key => $value) { ?>
                     <li>
                         <i class="fa fa-circle"></i>
                         <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                             <?php echo filter($value->title); ?>
                         </a>
                     </li>
                 <?php } ?>
             </ul>
          </div>
          <div class="ln_left flot-right">
            <p id="crossID" style="cursor:pointer;" title="সর্বশেষ খবর লুকান">
              <i class="fa fa-times" aria-hidden="true"></i>
            </p>
          </div>
          <script>
             $(document).ready(function(){
                 $("p#crossID").on("click",function(){
                     $("section#latestID").hide();
                 });
             });
          </script>
        </div>
      </div>
    </section>
<?php } ?>



<section class="container">
  <div class="row">
      <div class="col-md-9">
       <?php if($mainLatestNews != NULL){ ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="news-image">
                    <img class="card-img-top" src="<?php echo site_url($mainLatestNews[0]->photo);?>" alt="Photo Missing!">
                  </div>
                  <div class="news-contet">
                    <h4 class="card-title">
                      <a href="<?php echo site_Url("home/single?id=".$mainLatestNews[0]->id); ?>" target="_blank">
                         <?php echo filter($mainLatestNews[0]->title); ?>
                      </a>
                    </h4>
                    <p class="card-text"> <?php echo makeShort($mainLatestNews[0]->news,150,50,$mainLatestNews[0]->id); ?></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <?php } ?>

      <div class="row">

        <div class="col-md-6 no-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 res-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 no-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 res-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 no-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 res-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 no-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
          </div>
        </div>

        <div class="col-md-6 res-padding">
          <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
              <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
          </div>
        </div>

        <div class="col-md-12 no-padding">
          <h1 class="btn-danger btn-lg display-inline text-center">
            <a href="#" title="আরও পড়ুন">আরও পড়ুন</a>
          </h1>
        </div>
      </div>
      
     </div>

     

    <div class="col-md-3">
        <div class="row">
        <ul class="social-link">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="android" href="#"><i class="fa fa-android"></i></a></li>
            <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div>



  <!-- Latest and Popular Start Here -->
      <div class="row bangla" id="tabs">
        <ul>
          <li><a href="#tabs-1">সর্বশেষ</a></li>
          <li><a href="#tabs-2">জনপ্রিয়</a></li>
        </ul>


        <div class="tabs" id="tabs-1">
            <ul>
                <?php
                  if($latest != NULL){
                  foreach ($latest as $key => $value) {
                ?>
                    <li>
                        <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                            <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                            <span><?php echo filter($value->title); ?></span>
                        </a>
                    </li>
                <?php } } ?>
            </ul>
        </div>

        <div class="tabs" id="tabs-2">
          <ul>
              <?php
                if($populars != NULL){
                foreach ($populars as $key => $value) {
              ?>
                  <li>
                      <a href="<?php echo site_Url("home/single?id=".$value[0]->id); ?>" target="_blank">
                          <img class="img-fluid" src="<?php echo site_url($value[0]->photo);?>" alt="Photo Missing!">
                          <span><?php echo filter($value[0]->title); ?></span>
                      </a>
                  </li>
              <?php } } ?>
          </ul>
        </div>
      </div>

      <!-- Latest and Popular End Here -->



    </div>
  </div>
</section>
