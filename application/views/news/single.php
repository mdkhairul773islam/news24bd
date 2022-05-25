<style>
  .news-detils{
     margin-bottom: 15px;
     display: inherit;
  }
  .news-body{
    padding: 10px;
  }
  .news-body span{
    font-size: 16px;
  }
</style>
    <?php if($news != null){ ?>
    <section class="container-fluid">
      <div class="row single">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="row single-aside-left">
                <ul>
                  <li><a href="#"><i class="fa fa-folder-open"></i>&nbsp;<?php echo ($news) ? $news[0]->topic : ""; ?></a></li>
                  <li><a href="#"><i class="fa fa-tags"></i>&nbsp;<?php echo ($news) ? $news[0]->tag_name : ""; ?></a></li>
                  <li><div class="sharethis-inline-share-buttons"></div></li>
                </ul>
              </div>
            </div>
			
			<style type="text/css">
				.single-news img{
					max-width:100%;
				}
			</style>
			
            <div class="col-md-7">
              <div class="row single-news">
                <h4><?php echo ($news) ? filter($news[0]->title) : ""; ?></h4>

                <div class="news-detils">
                  <div class="pull-left">
                    <?php $logo = json_decode(siteMeta("logo"),true); ?>
                    <img src="<?php echo site_url($logo["faveicon"]);?>"  alt="Logo Missing" style="margin-top:5px;width:30px;height:30px;border-radius:100%;display:inline-block;">
                  </div>
                  <div class="news-body">
                    <span class="small">
                      <i class="fa fa fa-clock-o text-danger"></i> প্রকাশিত: <?php echo ($news) ? $news[0]->time.", " : "";   echo ($news) ? $news[0]->date : ""; ?> |&nbsp;
                      
					<?php 
						$count = $this->action->read('count_popular', array('post_id'=>$news[0]->id));
						$count = $count[0]->read_number;
					?>
					  <i class="fa fa fa-eye"> </i> দেখা হয়েছে: <?php echo ($count) ? $count." বার।": ""; ?>
                    </span>
                  </div>
                </div>
                <img class="img-fluid" src="<?php echo ($news) ? site_url($news[0]->photo) : ""; ?>">
                
				
				<p>
					<?php
						echo ($news) ? $news[0]->news : "";
						$url = '<iframe width="560" height="315" src="https://www.youtube.com/embed/gGCZ96ayj_4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
						//print_r(str_replace("https://youtu.be/", $url, $news[0]->news, $i));
					?>
					
					<span class="sharethis-inline-share-buttons"></span> 
				</p>
              </div>
            </div>
			<style type="text/css">
				.social-link{
					margin-top:20px;
				}
				.single-aside-right ul{
					margin-top:0;
				}
			</style>
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
				<div class="row single-aside-right">

					<ul>
					  <h3>আরও খবর </h3>
					  <?php
						   $topic = ($allNews != NULL) ? $allNews[0]->topic : "";
							if($allNews != NULL){
							foreach ($allNews as $key => $value) {
							if($key != 0){
						?>
							  <li>
								  <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
									  <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
									  <h5 class="card-title"><?php echo filter($value->title); ?></h5>
								  </a>
							  </li>
						  <?php } } }?>
					  <li><a href="<?php echo site_url("all/news?topic=".$topic); ?>">সকল খবর</a></li>
					</ul>
				</div>
				
				

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
					
					<div class="row">
						<div class="right-big-ad">
						  <?php echo show_ads("HBH1","273x600"); ?>
						</div>
					</div>
				
				<br />
				
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>