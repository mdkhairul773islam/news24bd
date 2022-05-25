    <section class="container-fluid">
      <div class="row gallery-side-news">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h3>ফটো গ্যালারি</h3>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                 <?php
                   if($photoNewsGallery != NULL){
                   foreach ($photoNewsGallery as $key => $value) {
                   $active = ($key == 0) ? "active" : "";
                 ?>
                  <div class="carousel-item <?php echo $active; ?>">
                       <img class="d-block w-100" src="<?php echo site_url($value->gallery_path);?>" alt="First slide">
                       <div class="carousel-caption d-none d-md-block">
                         <p><?php echo $value->gallery_title; ?></p>
                       </div>
                   </div>
                 <?php } } ?>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>


            <div class="col-md-3">
                <h3>বিনোদনের খবর</h3>
                <ul>
                    <?php
                        if($entertainment != NULL){
                        foreach ($entertainment as $key => $value) {
                      ?>
                          <li>
                              <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                                  <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                                  <h5 class="card-title"><?php echo filter($value->title); ?></h5>
                              </a>
                          </li>
                      <?php } } ?>
                  <li><a href="<?php echo site_url("all/news?topic=বিনোদন"); ?>">সকল খবর</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
