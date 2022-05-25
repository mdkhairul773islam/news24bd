 <link rel="stylesheet" href="<?php echo site_url('public/css/lightbox.min.css'); ?>" type="text/css" >
 <style>
    .photos {
      margin: 15px 0;
      padding: 0;
      overflow: auto;
      display: block;
      position: relative;
    }
    .photos img {
      max-height: 350px;
      width: 100%;
      height: 100%;
      vertical-align: top;
    }
    .photos figcaption {
        text-align: center;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		width: 0%;
    		height: 0%;
    		background: rgba(255, 45, 45, 0.5);
    		transition: all 0.5s ease-in-out;
    }
    .photos figcaption p {
      	color: #fff;
      	font-size: 18px;
      	opacity: 0;
      	transition: all 0.5s ease-in-out;
    }
    .photos:hover figcaption {
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
    }
    .photos:hover figcaption p {
    	opacity: 1;
    	transition: all 0.5s 0.5s ease-in-out;
    }
  </style>
    <section class="container-fluid">
      <div class="row full-width-news">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="news-area-title">
                <h3 style="margin-bottom: 20px;">ফটো গ্যালারী</h3>
              </div>
            </div>
			<?php foreach ($gallery as $key => $value) {?>
				<div class="col-md-4">
					<a class="example-image-link photos" style="overflow:hidden;" href="<?php echo site_url($value->gallery_path); ?>" data-lightbox="example-1">
		              <img class="example-image" src="<?php echo site_url($value->gallery_path); ?>" alt="" />
		              <figcaption><p><?php echo $value->gallery_title; ?></p></figcaption>
		            </a>
		       </div>
			<?php } ?>

          </div>
        </div>
      </div>
    </section>

<script src="<?php echo site_url('public/js/lightbox.js'); ?>"></script>