
    <section class="container-fluid">
      <div class="row single-line-news">
        <div class="container">
          <div class="row">

            <div class="col-md-3">
                <h3>অর্থনীতি</h3>
                <ul>
                 <?php if($economy != NULL){ ?>
                      <li>
                          <a href="<?php echo site_Url("home/single?id=".$economy[0]->id); ?>" target="_blank">
                            <img class="img-fluid" src="<?php echo site_url($economy[0]->photo);?>" alt="Photo Missing!">
                            <h5 class="card-title"><?php echo filter($economy[0]->title); ?></h5>
                          </a>
                      </li>
                     <?php foreach ($economy as $key => $value) { if($key != 0){ ?>
                      <li>
                          <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                              <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                              <h5 class="card-title"><?php echo filter($value->title); ?></h5>
                          </a>
                      </li>
                  <?php } } } ?>

                  <li><a href="<?php echo site_url("all/news?topic=অর্থনীতি"); ?>" target="_blank">সকল খবর</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h3>আন্তর্জাতিক</h3>
                <ul>
                 <?php if($international != NULL){ ?>
                      <li>
                          <a href="<?php echo site_Url("home/single?id=".$international[0]->id); ?>" target="_blank">
                            <img class="img-fluid" src="<?php echo site_url($international[0]->photo);?>" alt="Photo Missing!">
                            <h5 class="card-title"><?php echo filter($international[0]->title); ?></h5>
                          </a>
                      </li>
                      <?php foreach ($international as $key => $value) { if($key != 0){ ?>
                      <li>
                          <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                              <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                              <h5 class="card-title"><?php echo filter($value->title); ?></h5>
                          </a>
                      </li>
                  <?php } } } ?>
                  <li><a href="<?php echo site_url("all/news?topic=আন্তর্জাতিক"); ?>" target="_blank">সকল খবর</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h3>খেলাধুলা</h3>
                <ul>
                <?php if($sports != NULL){ ?>
                  <li>
                      <a href="<?php echo site_Url("home/single?id=".$sports[0]->id); ?>" target="_blank">
                        <img class="img-fluid" src="<?php echo site_url($sports[0]->photo);?>" alt="Photo Missing!">
                        <h5 class="card-title"><?php echo filter($sports[0]->title); ?></h5>
                      </a>
                    </li>
                     <?php foreach ($sports as $key => $value) { if($key != 0){ ?>
                    <li>
                          <a href="<?php echo site_Url("home/single?id=".$value->id); ?>" target="_blank">
                              <img class="img-fluid" src="<?php echo site_url($value->photo);?>" alt="Photo Missing!">
                              <h5 class="card-title"><?php echo filter($value->title); ?></h5>
                          </a>
                      </li>
                  <?php } } } ?>

                  <li><a href="<?php echo site_url("all/news?topic=খেলাধুলা"); ?>" target="_blank">সকল খবর</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <div class="right-big-ad">
                  <?php echo show_ads("HBH1","273x600"); ?>
                </div>
            </div>

          </div>
        </div>
      </div>
    </section>
