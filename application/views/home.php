<style>
.new-speech h3{margin-left: 0;}
.new-speech img{
	width: 100%;
	max-width: 100%;
	height: auto;
	float: none;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 3px;
}
.new-speech p{margin-left: 15px;}
.view_more{
	display: block;
    text-align: right;
}
.view_more a:hover{text-decoration: underline;}
</style>

<div class="col-md-9">
    <div class="row">

      <!-- New President speech -->
        <div class="col-md-12 col-sm-6 col-xs-6 custom-sm">
            <div class="width-speech row">
                <div class="speech new-speech">
				
					<h3>সভাপতির বানী </h3>
					<?php if($pr_speech != NULL) { ?> 
						<div class="col-md-4">
							<div class="row">
								<img class="img-responsive img-thumbnail" src="<?php echo site_url($pr_speech[0]->speech_path); ?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="row">
								<?php echo view_more($pr_speech[0]->speech_speech,80,site_url('home/speech_view/president'),"বিস্তারীত দেখুন") ;?>
							</div>
						</div>
                    <?php } ?>            
                </div>
            </div>  
        </div>
      <!-- President speech -->
        <!--div class="col-md-12 col-sm-6 col-xs-6 custom-sm">
            <div class="width-speech row">
                <div class="speech">
                    <h3>সভাপতির বানী </h3>                 
                    <?php if($pr_speech != NULL) { ?> 
                        <p">
                            <img class="img-responsive" src="<?php echo site_url($pr_speech[0]->speech_path); ?>">
                            <?php echo $pr_speech[0]->speech_speech;?>
                        </p>
                   <?php } ?>
                </div>
            </div>  
        </div-->

        <!-- Principal speech -->
        <div class="col-md-6 col-sm-6 col-xs-12 custom-sm">
            <div class="width-speech row">
                <div class="speech">
                    <h3> প্রধান শিক্ষকের বানী </h3>                 
                    <?php if($p_speech != NULL) { ?> 
                    
                    <img class="img-responsive img-thumbnail" src="<?php echo site_url($p_speech[0]->speech_path); ?>">
                    <?php echo view_more($p_speech[0]->speech_speech,70,site_url('home/speech_view/principal'),"বিস্তারীত দেখুন") ;?>
                    
                    <?php } ?>
                </div>
            </div>  
        </div>

        <!-- Vice Principal Speech -->
        <div class="col-md-6 col-sm-6 col-xs-12 custom-sm">
            <div class="width-speech row">
                <div class="speech">
                    <h3>অধ্যক্ষের বানী</h3>                 
                    
                    <img class="img-responsive img-thumbnail" src="<?php echo site_url($vp_speech[0]->speech_path); ?>">
                    <?php echo view_more($vp_speech[0]->speech_speech,70,site_url('home/speech_view/vp_speech'),"বিস্তারীত দেখুন") ;?>
                    
                </div>
            </div>  
        </div>

        <!-- New Area -->
        <div class="col-md-12 col-sm-6 col-xs-6 custom-sm new-slider-area">
            <div class="width-speech row">
				<div class="col-md-12">
					<div class="row">
						<style>
						/*
						 *  Progress Bar
						 */
						.progress {
						  display: block;
						  width: 100%;
						  height: 10px;
						  border-radius: 10px;
						  overflow: hidden;
						  display: none;
						  background-color: #f5f5f5;
						  background-image: linear-gradient(to right, black, black);
						  background-repeat: no-repeat;
						  background-size: 0 100%;
						  
						  transition: background-size .4s ease-in-out;
						}
						.slick-prev,
						.slick-next,
						.slick-prev:hover,
						.slick-next:hover{
							background: #ddd !important;
							border-radius: 50%;
						}
						/**
						 *  Demo Styles from the Slick Slider
						 *  website
						 */

						/*body {
						  background-color: #3498db;
						}*/

						.content {
						  margin: auto;
						  padding: 20px;
						  width: 675px;
						}

						.slider {
						  margin: 10px auto 0px;
						}

						.image {
						  padding: 10px;
						}

						/*img {
						  border: 5px solid #FFF;
						  display: block;
						  width: 100%;
						} */

						.sr-only {
						  position: absolute;
						  width: 1px;
						  height: 1px;
						  padding: 0;
						  margin: -1px;
						  overflow: hidden;
						  clip: rect(0,0,0,0);
						  border: 0;
						}
						.slider div a{
							width: 120px;
							height: 100px;
							text-align: center;
							padding: 15px 10px;
							display: inline-block;
							border: 1px solid #f3f3f3;
							margin-bottom: 5px;
						}
						.slider div a:hover{
							border: 1px solid;
						}
						.slider div:nth-of-type(1){
							margin-left: 5px !important;
						}
						.slick-initialized .slick-slide{
							width: 125px !important;
						}
						</style>
						<div class="content">
						  <div class="slider">
							<div>
								<a href="<?php echo site_url('/home/page/at_a_glance');?>">
									<i class="fa fa-globe fa-3x"></i>
									<br>
									<span>এক নজরে</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/page/history');?>">
									<i class="fa fa-history fa-3x"></i>
									<br>
									<span>প্রতিষ্ঠানের ইতিহাস</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/page/success_story');?>">
									<i class="fa fa-trophy fa-3x"></i>
									<br>
									<span>সফলতা</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/committee');?>">
									<i class="fa fa-users fa-3x"></i>
									<br>
									<span>কমিটি</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/page/institution_rules');?>">
									<i class="fa fa-gavel fa-3x"></i>
									<br>
									<span>নিয়মকানুন</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/teacher');?>">
									<i class="fa fa-user-plus fa-3x"></i>
									<br>
									<span>শিক্ষক মণ্ডলী</span>
								</a> 
							</div>
							<div>
								<a href="<?php echo site_url('/home/showResult');?>">
									<i class="fa fa-file-text-o fa-3x"></i>
									<br>
									<span>মডেল টেস্ট</span>
								</a>
							</div>
							<div>
								<a href="<?php echo site_url('/home/page/sports');?>">
									<i class="fa fa-futbol-o fa-3x"></i>
									<br>
									<span>খেলাধুলা</span>
								</a>
							</div>
							<!-- <div>
								<a href="<?php echo site_url('/home/page/campus');?>">
									<i class="fa fa-university fa-3x"></i>
									<br>
									<span>Campus</span>
								</a>
							</div> -->
							<div>
								<a href="<?php echo site_url('/home/page/admission_rules');?>">
									<i class="fa fa-file-text fa-3x"></i>
									<br>
									<span>ভর্তির নিয়মাবলী</span>
								</a>
							</div>
							<div>
								<a href="<?php echo site_url('/home/imageGallery');?>">
									<i class="fa fa-picture-o fa-3x"></i>
									<br>
									<span>ফটো গ্যালারী</span>
								</a>
							</div>
							<div>
								<a href="<?php echo site_url('/home/search_admitted_student');?>">
									<i class="fa fa-male fa-3x"></i>
									<br>
									<span>ছাত্র ছাত্রী</span>
								</a>
							</div>
							<div>
								<a href="<?php echo site_url('/home/allNotice');?>">
									<i class="fa fa-list-alt fa-3x"></i>
									<br>
									<span>নোটিশ</span>
								</a>
							</div>
							<div>
								<a href="<?php echo site_url('/home/contact');?>">
									<i class="fa fa-envelope-o fa-3x"></i>
									<br>
									<span>যোগাযোগ</span>
								</a>
							</div>
						  </div> <!-- end slider -->
						  <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
							<span class="slider__label sr-only">
						  </div>
						  </span>
						</div> <!-- end content -->
					</div>
				</div>
            </div>  
        </div>
     
    </div>

</div>




