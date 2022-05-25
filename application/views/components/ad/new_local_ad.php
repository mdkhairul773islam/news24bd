<style type="text/css">
    .ad-area-cover {
        background: rgba(0,0,0,0.1);
        overflow: auto;
    }
    .ad-cover-header {
        overflow: auto;
        margin: 0 5%;
    }
    .ad-cover-header p {
        padding-top: 10px;
        text-align: center;
        font-weight: bold;
        font-size: 18px;
    }
    .banner-add {
        background: rgba(0,0,0,0.5);
        text-align: center;
        color: #fff;
        margin: 5px;
        padding: 8px;
        display: block;
    }
    .ad-cover-menu {
        overflow: auto;
        height: 8px;
        background: rgba(0,0,0,0.2);
    }
    .ad-cover-newsticker {
        overflow: auto;
        background: rgba(0,0,0,0.2);
        margin: 5px 8%;
        height: 8px;
    }
    .ad-cover-top-area {
        overflow: auto;
        margin: 0 8%;
    }
    .ad-cover-double-top {
        margin: 0 8%;
        overflow: auto;
        text-align: center;
    }
    .ad-cover-full-width {
        margin: 0 8%;
        overflow: auto;
    }
    .ad-cover-full-width .single {
        background: rgba(0,0,0,0.2);
        height: 100px;
        width: 23%;
        margin-bottom: 5px;
        float: left;
        margin-right: 2.5%;        
    }
    .ad-cover-tripple {
        margin: 0 8%;
        overflow: auto;
        text-align: center;
    }
    .ad-cover-tripple a {
        width: 33%;
        display: inline-block;
    }
    .ad-cover-double-big {
        margin: 0 8%;
        overflow: auto;
        text-align: center;
    }
    .ad-cover-double-big a {
        color: #fff;
        text-align: center;
    }
    .ad-cover-full-page {
        margin: 0 8%;
        overflow: auto;
    }
    .ad-block {
        background: #f00 !important;
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন বিজ্ঞাপন</h1>
                </div>
            </div>

            <div class="panel-body">

                <div class="col-md-offset-3 col-md-6">
                    <div class="ad-area-cover">
                        <div class="ad-cover-header">
                            <div class="col-md-3">
                                <p>Logo</p>
                            </div>
                            <div class="col-md-9">
                                <a <?php if (!locate_valid("HBL1")) {echo 'data-toggle="modal" data-target="#myModal" id="HBL1"';} ?> href="#" class="banner-add <?php if (locate_valid("HBL1")) {echo "ad-block";} ?>">730 x 91</a>
                            </div>
                        </div>
                        <div class="ad-cover-menu">
                            <div class="col-md-12">
                                <!-- menu -->
                            </div>
                        </div>
                        <div class="ad-cover-newsticker">
                            <div class="col-md-12">
                                <!-- news ticker -->
                            </div>
                        </div>
                        <div class="ad-cover-top-area">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6" style="height: 220px; background: rgba(0,0,0,0.2); margin-bottom: 5px;">                                        
                                    </div>
                                    <div class="col-md-3">
                                        <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px;"></div>
                                        <div style="background: rgba(0,0,0,0.2); height: 105px;"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div style="height: 20px; background: rgba(0,0,0,0.2); margin-bottom: 5px;"></div>
                                            <div style="background: rgba(0,0,0,0.2); height: 195px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 95%;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 95%;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 95%;">                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px;">                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 76%; margin-left: 12%;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 76%; margin-left: 12%;">                             
                                            </div>
                                            <div style="background: rgba(0,0,0,0.2); height: 110px; margin-bottom: 5px; width: 76%; margin-left: 12%;">                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <a <?php if (!locate_valid("HBS1")) {echo 'data-toggle="modal" data-target="#myModal" id="HBS1"';} ?> class="<?php if (locate_valid("HBS1")) {echo "ad-block";} ?>" href="#" style="background: rgba(0,0,0,0.6); color: #fff; display: block; height: 100px; text-align: center; line-height: 100px; margin-bottom: 5px;">
                                                285 x 255
                                            </a>
                                            <a <?php if (!locate_valid("HBS2")) {echo 'data-toggle="modal" data-target="#myModal" id="HBS2"';} ?> class="<?php if (locate_valid("HBS2")) {echo "ad-block";} ?>" href="#" style="background: rgba(0,0,0,0.6); color: #fff; display: block; height: 50px; text-align: center; line-height: 50px; margin-bottom: 5px;">
                                                285 x 136
                                            </a>
                                            <div style="background: rgba(0,0,0,0.2); color: #fff; display: block; height: 180px; text-align: center;">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-double-top">
                            <div class="col-md-12">
                                <div class="row">
                                    <a <?php if (!locate_valid("HML1")) {echo 'data-toggle="modal" data-target="#myModal" id="HML1"';} ?> href="#" class="col-md-6 <?php if (locate_valid("HML1")) {echo "ad-block";} ?>" style="background: rgba(0,0,0,0.6); padding: 5px 0; color: #fff;">
                                        468 x 60
                                    </a>
                                    <a <?php if (!locate_valid("HML2")) {echo 'data-toggle="modal" data-target="#myModal" id="HML2"';} ?> href="#" class="<?php if (locate_valid("HML2")) {echo "ad-block";} ?>" style="background: rgba(0,0,0,0.6); padding: 5px 0; display: block; width: 47%; float: right; color: #fff;">
                                        468 x 60
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-full-width">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single" style="margin-top: 5px;"></div>
                                    <div class="single" style="margin-top: 5px;"></div>
                                    <div class="single" style="margin-top: 5px;"></div>
                                    <div class="single" style="margin-top: 5px; margin-right: 0;"></div>
                                    <div class="single"></div>
                                    <div class="single"></div>
                                    <div class="single"></div>
                                    <div class="single" style="margin-right: 0;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-tripple">
                            <div class="col-md-12">
                                <div class="row">
                                    <a class="<?php if (locate_valid("HSL1")) {echo "ad-block";} ?>" <?php if (!locate_valid("HSL1")) {echo 'data-toggle="modal" data-target="#myModal" id="HSL1"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; color: #fff; float: left;">
                                        385 x 90
                                    </a>
                                    <a class="<?php if (locate_valid("HSL2")) {echo "ad-block";} ?>" <?php if (!locate_valid("HSL2")) {echo 'data-toggle="modal" data-target="#myModal" id="HSL2"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; display: block; float: right; color: #fff;">
                                        385 x 90
                                    </a>
                                    <a class="<?php if (locate_valid("HSL3")) {echo "ad-block";} ?>" <?php if (!locate_valid("HSL3")) {echo 'data-toggle="modal" data-target="#myModal" id="HSL3"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; display: block; float: right; color: #fff; width: 32%; margin-right: 1%;">
                                        385 x 90
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-double-big">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 120px; margin-bottom: 5px; margin-right: 8px; margin-top: 5px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 120px; margin-bottom: 5px; margin-top: 5px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 60px; margin-right: 5px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 60px; margin-right: 5px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 60px; margin-right: 5px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div style="background: rgba(0,0,0,0.2); height: 60px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div style="background: rgba(0,0,0,0.2); height: 55px; margin-left: 8px; margin-top: 5px; margin-bottom: 5px;"></div>
                                            <a class="<?php if (locate_valid("HSL4")) {echo "ad-block";} ?>" <?php if (!locate_valid("HSL4")) {echo 'data-toggle="modal" data-target="#myModal" id="HSL4"';} ?> href="#" style="background: rgba(0,0,0,0.6); height: 30px; margin-left: 8px; display: inline-block; width: 90%; line-height: 30px; margin-bottom: 5px;">
                                                285 x 115
                                            </a>
                                            <a class="<?php if (locate_valid("HBS3")) {echo "ad-block";} ?>" <?php if (!locate_valid("HBS3")) {echo 'data-toggle="modal" data-target="#myModal" id="HBS3"';} ?> href="#" style="background: rgba(0,0,0,0.6); height: 90px; margin-left: 8px; margin-bottom: 5px; display: inline-block; width: 90%; line-height: 90px;">
                                                285 x 255
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-full-page">
                            <div class="col-md-12">
                                <div class="row">
                                    <a class="<?php if (locate_valid("HBL2")) {echo "ad-block";} ?>" <?php if (!locate_valid("HBL2")) {echo 'data-toggle="modal" data-target="#myModal" id="HBL2"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; color: #fff; float: left; width: 100%; text-align: center; margin-bottom: 5px;">
                                        973 x 90
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-full-width">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single" style="height: 200px;"></div>
                                    <div class="single" style="height: 200px;"></div>
                                    <div class="single" style="height: 200px;"></div>
                                    <a class="<?php if (locate_valid("HBH1")) {echo "ad-block";} ?>" <?php if (!locate_valid("HBH1")) {echo 'data-toggle="modal" data-target="#myModal" id="HBH1"';} ?> href="#" style="background: rgba(0,0,0,0.6); height: 200px; display: inline-block; width: 23%; line-height: 200px; margin-right: 0; color: #fff; text-align: center;">
                                                273 x 600
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-tripple">
                            <div class="col-md-12">
                                <div class="row">
                                    <a class="<?php if (locate_valid("HML3")) {echo "ad-block";} ?>" <?php if (!locate_valid("HML3")) {echo 'data-toggle="modal" data-target="#myModal" id="HML3"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; color: #fff; float: left; width: 48.5%;">
                                        470 x 60
                                    </a>
                                    <a class="<?php if (locate_valid("HML4")) {echo "ad-block";} ?>" <?php if (!locate_valid("HML4")) {echo 'data-toggle="modal" data-target="#myModal" id="HML4"';} ?> href="#" style="background: rgba(0,0,0,0.6); padding: 5px 0; display: block; float: right; color: #fff; width: 48%; margin-left: 3%;">
                                        470 x 60
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-full-width">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single" style="height: 200px; width: 74%; margin-top: 5px;"></div>
                                    <div class="single" style="height: 200px; width: 22%; margin-top: 5px; margin-left: 1%; margin-right: 0;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-cover-full-width">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single" style="height: 60px; width: 100%; margin-top: 5px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">বিজ্ঞাপন যুক্ত করুন</h4>
                    </div>
                  <div class="modal-body" style="overflow: auto; padding: 30px; min-height: 320px;">
                    <?php 
                    $attribute = array('class' => 'form-horizontal');
                    echo form_open_multipart('ad/ad/save_ad', $attribute);
                    ?>
                    <div class="form-group row">
                        <label class="col-md-3 control-label">তারিখ <span class="req">*</span></label>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group date" id="datetimepicker1">
                                        <input type="text" name="from_date" placeholder="YYYY-MM-YY" class="form-control" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group date" id="datetimepicker2">
                                        <input type="text" name="to_date" placeholder="YYYY-MM-YY" class="form-control" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>                                                
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">ছবি <span class="req">*</span></label>
                        <div class="col-md-9">
                            <input id="feature-img" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label class="col-md-3 control-label">লিংক <span class="req">*</span></label>
                        <div class="col-md-9">
                            <input type="text" name="url"  class="form-control" required >
                        </div>
                    </div>                                         

                    <div class="col-md-12">
                        <div class="row">
                            <div class="btn-group pull-right">
                                <input type="submit" value="প্রকাশ করুন" name="save" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="ad_id" value="">

                    <?php echo form_close(); ?>
                  </div>
                  <div class="modal-footer"></div>
                </div>

              </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('[data-target="#myModal"]').on('click', function(event) {
            var adID = $(this).attr("id");
            $('input[name="ad_id"]').val(adID);
        });
    });
</script>

