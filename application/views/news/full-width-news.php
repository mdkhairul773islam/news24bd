    <style> 
	    .rajniti:nth-child(4),
	    .rajniti:nth-child(8),
	    .rajniti:nth-child(12){
      		padding-right: 0 !important;
	    }
	    .middle-triple-ad .col-md-4{
	        padding:0;
	   }
   </style>
   
   <section class="container-fluid">
      <div class="row full-width-news">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="row news-area-title">
                <h3>জাতীয়  <a target="_blank" href="<?php echo site_url("all/news?topic=জাতীয়"); ?>">সকল খবর <i class="fa fa-angle-double-right"></i></a></h3>
              </div>
            </div>
            <?php
              if($national != NULL){
              foreach ($national as $key => $value) { ?>
                  <div class="col-md-3">
                    <div class="card">
                      <img class="card-img-top" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                      <div class="card-body custom-height bangla">
                        <h5 class="card-title"><a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank"><?php echo filter($value->title); ?></a></h5>
                      </div>
                      <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                        <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $value->topic;?></a>
                        <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($value->id); ?></a>
                      </div>
                    </div>
                  </div>
            <?php } } ?>

            <div class="col-md-12">
              <div class="row news-area-title bangla">
                <h3>রাজনীতি   <a target="_blank" href="<?php echo site_url("all/news?topic=রাজনীতি"); ?>">সকল খবর <i class="fa fa-angle-double-right"></i></a></h3>
              </div>
            </div>
            <?php
              if($politics != NULL){
              foreach ($politics as $key => $value) { ?>
                  <div class="col-md-3 rajniti">
                    <div class="card">
                      <img class="card-img-top" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                      <div class="card-body custom-height">
                        <h5 class="card-title"><a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank"><?php echo filter($value->title); ?></a></h5>
                      </div>
                      <div class="card-footer text-muted" style="font-family: 'robotoregular' !important;">
                        <a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $value->topic;?></a>
                        <a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php  echo getTags($value->id); ?></a>
                      </div>
                    </div>
                  </div>
            <?php } } ?>
           </div>
        </div>
      </div>
    </section>
