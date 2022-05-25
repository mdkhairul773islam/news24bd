  <style>
      .videos{
         margin: 15px 0;
		 height:200px;
      }
      .videos ifram {
          min-height: 190px;
          width: 100%;
      }
  </style>
    <section class="container-fluid">
      <div class="row full-width-news">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="news-area-title">
                <h3 style="margin-bottom: 20px;">ভিডিও গ্যালারী</h3>
              </div>
            </div>
              <?php foreach ($video_gallery as $key => $value) {?>
            <div class="col-md-4 videos">
              <?php echo $value->embed_code; ?>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </section>