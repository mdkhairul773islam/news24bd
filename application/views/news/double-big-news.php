    <section class="container-fluid">
      <div class="row double-big-news">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="row news-area-title">
                <h3>বাংলাদেশ<a target="_blank" href="<?php echo site_url("all/news?topic=বাংলাদেশ"); ?>">সকল খবর <i class="fa fa-angle-double-right"></i></a></h3>
              </div>
            </div>

            <div class="col-md-9">
              <div class="row">
                <?php if($bangladesh != NULL){ ?>

                    <div class="col-md-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php echo site_url($bangladesh[0]->photo);?>" alt="Photo Missing!">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php echo site_Url("home/single?id=".$bangladesh[0]->id); ?>" target="_blank">
                                    <?php echo filter($bangladesh[0]->title); ?>
                                </a>
                            </h5>
                        </div>
                        <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                            <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $bangladesh[0]->topic;?></a>
                            <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($bangladesh[0]->id); ?></a>
                        </div>                        
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php echo site_url($bangladesh[1]->photo);?>" alt="Photo Missing!">
                        <div class="card-body bangla">
                            <h5 class="card-title">
                                <a href="<?php echo site_Url("home/single?id=".$bangladesh[1]->id); ?>" target="_blank">
                                    <?php echo filter($bangladesh[1]->title); ?>
                                </a>
                            </h5>
                        </div>
                        <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                            <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $bangladesh[1]->topic;?></a>
                            <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($bangladesh[1]->id); ?></a>
                        </div>
                      </div>
                    </div>
                    <?php foreach ($bangladesh as $key => $value) { if($key >= 2){ ?>
                        <div class="col-md-3">
                          <div class="card">
                            <img class="card-img-top" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                            <div class="card-body custom-card-height">
                                <h5 class="card-title">
                                    <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                                        <?php echo filter($value->title); ?>
                                    </a>
                                </h5>
                            </div>
                            <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                                <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $value->topic;?></a>
                                <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($value->id); ?></a>
                            </div>
                          </div>
                        </div>
                    <?php } } } ?>
                </div>
            </div>

            <div class="col-md-3" ng-controller="pollCtrl" ng-cloak>
              <div class="row">
                <div class="vote-area">
                  <h3>অনলাইন ভোট</h3>
                  <p><?php echo $poll_question[0]->question;?></p>
                  
                  
                  
                  
                  <form    ng-submit="pollCount('<?php echo $poll_question[0]->id;?>', '<?php echo $poll_question[0]->yes;?>', '<?php echo $poll_question[0]->no;?>','<?php echo $poll_question[0]->no;?>')" >
                  
                  
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

            </div>

          </div>
        </div>
      </div>
    </section>
