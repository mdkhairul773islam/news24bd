<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>ভিডিও যুক্ত করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open('video/video/add', $attribute);
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">ভিডিও এম্বেড কোড <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="embed_code" class="form-control" required >
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-md-2 control-label">টাইটেল <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="video_caption"  class="form-control" required >
                    </div>
                </div>                

                <div class="form-group row">
                    <label class="col-md-2 control-label">তারিখ <span class="req">*</span></label>
                    <div class="input-group date col-md-5" id="datetimepicker1">
                        <input type="text" value="<?php echo date('Y-m-d');?>" name="date" placeholder="YYYY-MM-YY" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="প্রকাশ করুন" name="save" class="btn btn-primary">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

