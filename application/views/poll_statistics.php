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

<section class="container">
  <div class="row">
      <div class="col-md-9">
      
       <?php if($statistics != NULL){ 

        echo "<pre>";
        echo "</pre>";
        foreach ($statistics as $key => $value) {
        ?>
         <div class="row" style="background: #fff !important;margin: 5px !important; padding: 10px">
            <div class="col-md-12" >
                <hr>
                <h6>অনলাইন জরিপ ফলাফল: <?php echo $value->date;?></h6>
                <h5><?php echo $value->question;?></h5>
                <h6>ভোট দিয়েছেন <?php echo $total = ( $value->yes + $value->no + $value->no_comment);?> জন | হ্যাঁ (<?php echo $value->yes;?>), না (<?php echo $value->no;?>), মন্তব্য নেই (<?php echo $value->no_comment;?>) </h6>
                <table class="table">
                    <tr>
                        <td width="100">হ্যাঁ</td>
                        <td>
                        <?php 
                            $yes = ($value->yes*100)/$total;
                            if($yes == 100){
                                echo $yes;
                            }else{
                                echo number_format($yes , "2");
                            }
                        ?>%
                        </td>
                    </tr>
                    <tr>
                        <td>না</td>
                        <td><?php
                        
                            $no = ($value->no*100)/$total;
                            if($no == 100){
                                echo $no;
                            }else{
                                echo number_format($no , "2");
                            }
                        
                        ?>%</td>
                    </tr>
                    <tr>
                        <td>মন্তব্য নেই </td>
                        <td><?php 
                        
                            $no_comment = ($value->no_comment*100)/$total;
                            if($no_comment == 100){
                                echo $no_comment;
                            }else{
                                echo number_format($no_comment , "2");
                            }
                        ?>%</td>
                    </tr>
                </table>
                <hr>
            </div >
        </div>
      <?php } }?>


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
