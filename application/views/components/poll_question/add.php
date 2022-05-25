


<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন জরিপ</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open_multipart('', $attribute);
                ?>
                
                <div class="form-group row">
                    <label class="col-md-2 control-label">তারিখ <span class="req">*</span></label>
                    <div class="input-group date col-md-5" id="datetimepicker1">
                        <input type="text" value="<?php echo date('Y-m-d');?>" name="date" placeholder="YYYY-MM-YY" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
				
                <div class="form-group row">
                    <label class="col-md-2 control-label">প্রশ্নঃ <span class="req">*</span></label>
                    <div class="col-md-5">
                        <textarea rows="4" type="text" name="question"  class="form-control" required ></textarea>
                    </div>
                </div>

                
                <!--div class="col-md-offset-2 col-md-5">
                    <div class="row">
                        <label><input type="checkbox" name="publish" checked value="1"> প্রকাশ করুন</label>
                    </div>
                </div-->

                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="জমা করুন" name="save" class="btn btn-primary">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
 