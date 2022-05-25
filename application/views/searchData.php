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

<section class="container" style="font-family:arial;">
	<div class="row">
		<div class="col-md-9">
		<div class="row">
			
			<?php if($result){
					foreach($result as $key => $value){ ?>
						<div class="col-md-4" style="font-family:arial;">
							<div class="card">
								<img class="card-img-top" src="<?php echo site_url($value[0]->photo); ?>" alt="Photo Missing!">
								<div class="card-body custom-height">
									<h5 class="card-title"><a href="<?php echo site_Url("home/single?id=".$value[0]->id); ?>" target="_blank"><?php echo $value[0]->title; ?></a></h5>
								</div>
								<div class="card-footer text-muted">
									<a href="#" class="card-link"><i class="fa fa-folder-open"></i>&nbsp;<?php echo $value[0]->topic; ?></a>
									
									<?php
										$tags = $this->action->read('tags', array('post_id' => $value[0]->id));
									?>
									
									<a href="#" class="card-link float-right"><i class="fa fa-tags"></i>&nbsp;<?php echo $tags[0]->tag_name; ?></a>
								</div>
							</div>
						</div>
						<?php if(count($result)>15){ ?>
						<div class="col-md-12 no-padding">
							<h1 class="btn-danger btn-lg display-inline text-center">
								<a href="" title="আরও পড়ুন">আরও পড়ুন</a>
							</h1>
						</div>
				<?php } ?>
			
			<?php }}else{ ?>

			<div class="col-md-12 no-padding">
				<h3 style="margin-top:40px;" class="display-inline text-center">
					কোনো কিছু পাওয়া যায়নি!আবার চেষ্টা করুন।
				</h3>
			</div>
			<?php } ?>

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


			<div class="tabs" id="tabs-1" style="font-family:arial;">
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
			
			<div class="tabs" id="tabs-2" style="font-family:arial;">
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
