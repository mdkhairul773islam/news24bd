 <style>
    ul li a span.icon{
        float: right;
        margin-right: 20px;
    }
 </style>
<!-- Sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand">
            <a href="<?php echo site_url('admin/dashboard'); ?>">
                <span>অ্যাডমিন</span> প্যানেল</span>
            </a>
        </h3>
    </div>

    <nav>
        <ul class="sidebar-nav">

            <!-- li class="sidebar-brand"><a href="#">Start Bootstrap</a></li -->
            <li id="dashboard">
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <i class="fa fa-home"></i>
					ড্যাশবোর্ড
                </a>
            </li>

            <li id="category_menu">
                <a href="#category" data-toggle="collapse">
                    <i class="fa fa-th-large"></i>
                    &nbsp;বিভাগ
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="category" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('category/category');?>">
                            <i class="fa fa-angle-right"></i>
							নতুন বিভাগ
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('category/category/all');?>">
                            <i class="fa fa-angle-right"></i>
							সকল বিভাগ
                        </a>
                    </li>
                </ul>
            </li>

            <li id="news_menu" >
                <a href="#news" data-toggle="collapse">
                    <i class="fa fa-newspaper-o"></i>
                    &nbsp;পোস্ট
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="news" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('news/news'); ?>">
                            <i class="fa fa-angle-right"></i>
							নতুন পোস্ট
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('news/news/all'); ?>">
                            <i class="fa fa-angle-right"></i>
							সকল পোস্ট
                        </a>
                    </li>
                </ul>
            </li>
            
            <li id="photo_gallery_menu">
                <a href="<?php echo site_url('gallery/gallery'); ?>">
                    <i class="fa fa-camera-retro"></i>
                    &nbsp;ফটো গ্যালারী
                </a>
            </li>

            <li id="video-menu">
                <a href="<?php echo site_url('video/video'); ?>">
                    <i class="fa fa-video-camera"></i>
                    &nbsp;ভিডিও গ্যালারী
                </a>
            </li>

            <?php /* <li id="poll_question">
                <a href="<?php echo site_url('poll_question/poll_question'); ?>">
                    <i class="fa fa-file-o"></i>
                    &nbsp;অনলাইন জরিপ
                </a>
            </li>

            <li id="single">
                <a href="<?php echo site_url('news/news/single'); ?>">
                    <i class="fa fa-file-o"></i>
                    &nbsp;সিঙ্গেল পেইজ
                </a>
            </li>

            <li id="ad_menu">
                <a  href="#ad" data-toggle="collapse">
                    <i class="fa fa-object-group"></i>
                     &nbsp;বিজ্ঞাপন
                     <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>
                <ul id="ad" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('ad/ad'); ?>">
                        <i class="fa fa-angle-right"></i>
						হোম পেইজ
                    </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('ad/ad/all_ad_new'); ?>">
                        <i class="fa fa-angle-right"></i>
						সকল বিজ্ঞাপন
                    </a>
                    </li>
                </ul>
            </li>

            <li id="theme_menu">
                <a href="#theme" data-toggle="collapse">
                    <i class="fa fa-cog"></i>
                        <?php echo caption('Theme_Settings'); ?>
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="theme" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('theme/themeSetting');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Logo/Icon'); ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('theme/themeSetting/theme_tools');?>">
                            <i class="fa fa-angle-right"></i>
                            <?php echo caption('Theme_Tools'); ?>
                        </a>
                    </li>
                </ul>
            </li>

            <li id="menugenerator">
                <a href="<?php echo site_url('theme/themeSetting/menu_generator'); ?>">
                    <i class="fa fa-bars"></i>
                    &nbsp;মেনু জেনারেটর
                </a>
            </li>
            
            <li id="login_activity">
                <a href="<?php echo site_url('theme/themeSetting/login_history'); ?>">
                    <i class="fa fa-lock"></i>
                    &nbsp;লগইন একটিভিটি
                </a>
            </li>

            <li id="backup_menu">
                <a href="<?php echo site_url('data_backup'); ?>">
                    <i class="fa fa-database"></i>
                    &nbsp;ব্যাকআপ
                </a>
            </li>

            <li id="">
                <a target="_blank" href="<?php echo site_url("webmail"); ?>">
                   <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    &nbsp;ওয়েবমেইল
                </a>
            </li> */ ?>


        </ul>
    </nav>
</aside>
<!-- /#sidebar-wrapper -->