<style>
    .img {
        position: relative;
    }
    .img img {
        position: absolute;
        display: inline-block;
        width: 55%;
        height: 190px;
        left: 50px;
    }
</style>
<?php echo $confirmation; ?>
<div class="panel panel-default">
    <div class="panel-heading panal-header">
        <div class="panal-header-title pull-left">
            <h1>সকল বিজ্ঞাপন</h1>
        </div>
    </div>

    <div class="panel-body">
        <?php 
        $attribute = array('class' => 'form-horizontal');
        echo form_open_multipart('', $attribute);
        ?>
        <input type="hidden" name="old_photo" value="<?php echo $ad[0]->path; ?>">
        <div class="form-group row">
            <label class="col-md-2 control-label">তারিখ <span class="req">*</span></label>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group date" id="datetimepicker1">
                            <input type="text" name="from_date" value="<?php echo $ad[0]->from_date; ?>" placeholder="YYYY-MM-YY" class="form-control" required>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group date" id="datetimepicker2">
                            <input type="text" name="to_date" value="<?php echo $ad[0]->to_date; ?>" placeholder="YYYY-MM-YY" class="form-control" required>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 row">
                <div class="img">
                    <img class="img-responsive" src="<?php echo site_url($ad[0]->path);?>" alt="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">ছবি <span class="req">*</span></label>
            <div class="col-md-6">
                <input id="feature-img" type="file" name="attachment" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
            </div>
        </div> 

        <div class="form-group row">
            <label class="col-md-2 control-label">লিংক <span class="req">*</span></label>
            <div class="col-md-6">
                <input type="text" name="url" value="<?php echo $ad[0]->url; ?>" class="form-control" required >
            </div>
        </div>                                         

        <div class="row">
            <div class="col-md-8">
                <div class="btn-group pull-right">
                    <input type="submit" value="হালনাগাত করুন" name="update" class="btn btn-primary">
                </div>
            </div>
        </div>

        <input type="hidden" name="ad_id" value="">

        <?php echo form_close(); ?>
    </div>
    <div class="panel-footer"></div>
</div>