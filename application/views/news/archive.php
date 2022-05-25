<style>
   .search-box{
   background-color: #EEEEEE;
   font-family: arial;
   margin-bottom: 20px;
   }
   .search-box-body{
   background-color: #fff;
   }
   .search-box h1{
   padding: 15px 15px 10px;
   }
   .search-box-body .search-item {
   padding: 5px 0 20px;
   }
   .search-box-body .search-item .category{
   width: 100%;
   min-width: 285px;
   }
   .search-box-body .search-item .secondary-category{
   width: 100%;
   min-width: 250px;
   }
   .form-group{
   margin: 12px;
   }
   .btn{
   width: 100%;
   min-width: 119px;
   }
   @media screen and (max-width: 468px) {
   .search-box-body .search-item .category, 
   .search-box-body .search-item .secondary-category{
   min-width: 195px;
   }
   }
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
   max-width: 180px;
   margin: 0 10px 0 0;
   float: left;
   height: 90px;
   }
   .news-heading-item h5{
   padding: 15px;
   }
   .{
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
   ., .res-padding{
   padding-left: 20px;
   }
   }
</style>
<section class="container-fluid">
   <div class="row middle-triple-ad text-center">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <img src="<?php echo site_url('public/img/jhdjfh.jpg'); ?>" alt="wewe">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="container bangla">
   <div class="row search-box">
      <div class="col-md-12">
         <h1 class="text-center">সব খবর</h1>
         <div class="search-box-body">
            <form class="form-inline search-item clearfix">
               <div class="form-group">
                  <div class="input-daterange input-group">
                     <span class="input-group-addon">
                     তারিখ &nbsp;  <i class="fa fa-calendar"></i> 
                     </span>
                     <input type="text" class="input-sm form-control" name="start" id="datepicker" />
                     <span class="input-group-addon">
                     <i class="fa fa-calendar"></i> &nbsp; থেকে
                     </span>
                     <input type="text" class="input-sm form-control" name="end" id="datepicker1" />
                  </div>
               </div>
               <div class="form-group">
                  <select class="form-control category" name="">
                     <option selected>--ক্যাটাগরি--</option>
                     <option value="1">জাতীয়</option>
                     <option value="2">রাজনীতি</option>
                     <option value="3">অর্থনীতি</option>
                     <option value="4">আন্তর্জাতিক</option>
                  </select>
               </div>
               <div class="form-group">
                  <input type="search" class="form-control" name="" placeholder="আপনি কী খুঁজছেন?">
               </div>
               <div class="form-group">
                  <select class="form-control secondary-category" name="">
                     <option selected>--বিভাগ--</option>
                     <option value="barisal">বরিশাল</option>
                     <option value="chittagong">চট্টগ্রাম</option>
                     <option value="dhaka">ঢাকা</option>
                     <option value="khulna">খুলনা</option>
                     <option value="rajshahi">রাজশাহী</option>
                     <option value="sylhet">সিলেট</option>
                     <option value="rangpur">রংপুর</option>
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-control secondary-category" name="">
                     <option selected >--জেলা--</option>
                     <option value="dhaka">ঢাকা</option>
                     <option value="manikgonj">মানিকগঞ্জ</option>
                     <option value="gazipur">গাজীপুর</option>
                     <option value="narayangonj">নারায়ণগঞ্জ</option>
                     <option value="tangail">টাঙ্গাইল</option>
                     <option value="madaripur">মাদারীপুর</option>
                     <option value="munsigonj">মুন্সীগঞ্জ</option>
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-control secondary-category" name="">
                     <option selected="">--উপজেলা--</option>
                     <option value="madaripur-sadar">মাদারীপুর সদর</option>
                     <option value="shibchar">শিবচর</option>
                     <option value="kalkini">কালকিনি</option>
                  </select>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">খুজুন</button>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-danger">সব সংবাদ খুজুন</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 ">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 res-padding">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 ">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 res-padding">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 ">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 res-padding">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 ">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি">সোহেল তাজের স্যুটকেসের তালা ভেঙে তল্লাশি </a>
            </h5>
         </div>
      </div>
      <div class="col-md-6 res-padding">
         <div class="news-heading-item clearfix">
            <img src="<?php echo site_url('public/img/bd-india20170522082948-20171023014835.jpg'); ?>" alt="">
            <h5>
               <a href="#" title="">বৃষ্টি নামল শুটিংয়ে </a>
            </h5>
         </div>
      </div>
      <div class="col-md-12 ">
         <h1 class="btn-danger btn-lg display-inline text-center">
            <a href="#" title="আরও পড়ুন">আরও পড়ুন</a>
         </h1>
      </div>
   </div>
</section>
<script>
   $( function() {
     $( "#datepicker" ).datepicker();
     $( "#datepicker1" ).datepicker();
   } );
</script>
