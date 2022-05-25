<?php /*if($latestNews != NULL){ ?>
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
                         <a style="font-weight: 100;" href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
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
<?php } */ ?>


<section class="container">
  <div class="row">
      <div class="col-md-9">
       <?php if($mainLatestNews != NULL){ ?>
          <div class="row heading-news-right">
            <div class="col-md-8">
              <div class="card card-top-left">
				<style type="text/css">
					.card-img-top{
						height:272px;
						overflow:hidden;
					}
					.card-img-top img{
						display:block;
						width:100%;
						height: initial;
					}
					.heading-news-right .card-title{
					    min-height: 45px !important;
					}
				</style>
				
                <div class="card-img-top">
					<img  style="width:100%;height:315px;" src="<?php echo site_url($latestFocusNews[0]->photo);?>" alt="Photo Missing!">
				</div>
                <div class="card-body">
                  <h4 class="card-title">
                      <a href="<?php echo site_Url("home/single?id=".$latestFocusNews[0]->id); ?>" target="_blank">
                         <?php echo filter($latestFocusNews[0]->title); ?>
                      </a>
                  </h4>
                  
                  <p class="card-text"> <?php echo makeShort($latestFocusNews[0]->news,150,60,$latestFocusNews[0]->id); ?></p>
                </div>
                <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                  <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $latestFocusNews[0]->topic;?></a>
                  <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($latestFocusNews[0]->id); ?></a>
                </div>
              </div>
            </div>

            <div class="col-md-4 top-area-small-news">
             <?php if(isset($mainLatestNews[1])){ ?>
                  <div class="card">
                    <img class="card-img-top" src="<?php echo site_url($mainLatestNews[1]->photo);?>" alt="Photo Missing!">
                    <div class="card-body">
                      <h5 class="card-title">
                          <a href="<?php echo site_Url("home/single?id=".$mainLatestNews[1]->id); ?>" target="_blank">
                              <?php echo filter($mainLatestNews[1]->title); ?>
                          </a>
                      </h5>
                    </div>
                    <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                      <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $mainLatestNews[1]->topic;?></a>
                      <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($mainLatestNews[1]->id); ?></a>
                    </div>
                  </div>
             <?php } if(isset($mainLatestNews[2])){ ?>

                <div class="card">
                  <img class="card-img-top" src="<?php echo site_url($mainLatestNews[2]->photo);?>" alt="Photo Missing!">
                 <div class="card-body">
                     <h5 class="card-title">
                         <a href="<?php echo site_Url("home/single?id=".$mainLatestNews[2]->id); ?>" target="_blank">
                             <?php echo filter($mainLatestNews[2]->title); ?>
                         </a>
                     </h5>
                 </div>
                 <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                   <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $mainLatestNews[2]->topic;?></a>
                   <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($mainLatestNews[2]->id); ?></a>
                  </div>
                </div>
            <?php }  ?>
            </div>
        </div>

      <div class="row">
          <?php
            for($i = 3;$i<=11;$i++){
            if(isset($mainLatestNews[$i])){
          ?>
            <div class="col-md-4 top-area-small-news">
              <div class="card">
                <img class="card-img-top" src="<?php echo site_url($mainLatestNews[$i]->photo);?>" alt="Photo Missing!">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?php echo site_Url("home/single?id=".$mainLatestNews[$i]->id); ?>" target="_blank">
                            <?php echo filter($mainLatestNews[$i]->title); ?>
                        </a>
                    </h5>
                </div>
                <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                  <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $mainLatestNews[$i]->topic;?></a>
                  <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($mainLatestNews[$i]->id); ?></a>
                </div>
              </div>
            </div>
        <?php } } ?>
       </div>
      <?php } ?>
     </div>
     

    <div class="col-md-3">
        <div class="row">
          <ul class="social-link">
            <li><a class="facebook" target="_blank" href="<?php echo $social->s_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" target="_blank" href="<?php echo $social->s_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a class="google-plus" target="_blank" href="<?php echo $social->s_gplus; ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="youtube" target="_blank" href="<?php echo $social->s_youtube; ?>"><i class="fa fa-youtube"></i></a></li>
            <li><a class="android" target="_blank" href="<?php echo $social->s_playstore; ?>"><i class="fa fa-android"></i></a></li>
            <li><a class="rss" target="_blank" href="<?php echo $social->s_rssFeed; ?>"><i class="fa fa-rss"></i></a></li>
          </ul>
    </div>



  <!-- Latest and Popular Start Here -->
      <div class="row" id="tabs">
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






      <div class="row">
        <div class="top-right-ad">
          <?php echo show_ads("HBS1","285x255"); ?>
        </div>
      </div>

      <div class="row">
        <div class="top-small-ad">
          <?php echo show_ads("HBS2","285x136"); ?>
        </div>
      </div>

      <!--<div ng-controller="pollCtrl" ng-cloak>
              <div class="row">
                <div class="vote-area">
                  <h3>অনলাইন ভোট</h3>
                  <p><?php echo $poll_question[0]->question;?></p>

                  <form  ng-submit="pollCount('<?php echo $poll_question[0]->id;?>', '<?php echo $poll_question[0]->yes;?>', '<?php echo $poll_question[0]->no;?>','<?php echo $poll_question[0]->no;?>')" >
                  <input type="hidden" name="options"  ng-model="track_number"   ng-init="track_number='<?php echo "poll_track_num".$poll_question[0]->id; ?>'">
                    <div class="btn-group">
                      <label class="btn btn-secondary active">
                        <input type="radio" name="options"  ng-model="options" id="radio1"  value="yes" autocomplete="off" checked> হ্যাঁ
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="options" ng-model="options"  id="radio2"  value="no"  autocomplete="off"> না
                      </label>
                      <label class="btn btn-secondary">
                        <input type="radio" name="options"  ng-model="options"  id="radio3"  value="no_comments" autocomplete="off"> মন্তব্য নেই

                      </label>
                    </div>
                    {{message}}
                    <div class="btn-group" style="height:40px">
                     	<input type="submit"   class="btn btn-vote pull-left" value="ভোট দিন">  
                     	<a href="<?php echo site_url("all/poll_statistics");?>" target="_blank" class=" pull-left" style="text-decoration:underline;margin: 12px 30px;">পুরোনো ফলাফল</a>  
                    </div> 
                    
                  </form>
                  <p>ভোট দিয়েছেন {{totalPoll}} জন  </p>
                  <p> হ্যাঁ ({{yesPoll}}),  না  ({{noPoll}}), মন্তব্য নেই  ({{noComment}}) </p> 
                </div>
              </div>

              <div class="row">
                <div class="after-vote-ad">
                  <?php echo show_ads("HSL4","285x115"); ?>
                </div>
              </div>

              <div class="row">
                <div class="top-right-ad" style="max-height: 255px;">
                  <?php echo show_ads("HBS3","285x255"); ?>
                </div>
              </div>

            </div>-->

    </div>
  </div>
</section>
