<!-- Marquee Section Start Here -->
    <style>
        .new-news {position: relative; border-top: 2px solid #fff; border-bottom: 2px solid #fff;}
        .last-news {
            position: absolute;
            top: 0;
            left: -15px;
            background: #ff2d2d;
            color: #fff;
            padding: 0 15px;
        }
        .last-news p {
            margin: 0;
            line-height: 44px;
            font-size: 20px;
        }
        .marquee {
          width: 100%; /* the plugin works for responsive layouts so width is not necessary */
          overflow: hidden;
          line-height: 44px;
            font-size: 19px;
        }
        .fa-caret-square-o-right {
            color: #ff2d2d !important;
        }
    </style>
    <?php  $post = $this->action->read_limit("post",array(),"desc",10); ?>
    
    <section class="container-fluid" style="background: #fff; height: 48px;">
        <div class="row clearfix">
            <div class="container">
                <div class="new-news clearfix">
                    <div class="last-news">
                        <p>সর্বশেষ সংবাদ </p>
                    </div>
                    <div class='marquee' data-duration='15000' data-gap='20' data-duplicated='true' >
                        
                        <?php foreach($post as $key=>$value){
                            echo '<a style="color: #000;font-weight: 400;" href="'.site_url('home/single?id='.$value->id).'" >'.'<i class="fa fa-caret-square-o-right" aria-hidden="true"></i>&nbsp;&nbsp;'.$value->title.' ('.$value->topic.')'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'</a>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
