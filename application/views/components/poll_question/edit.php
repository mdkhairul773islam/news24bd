<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>জরিপ  সম্পাদন করুন</h1>
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
                        <input type="text" value="<?php echo $poll[0]->date;?>" name="date" placeholder="YYYY-MM-YY" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
				
                <div class="form-group row">
                    <label class="col-md-2 control-label">প্রশ্নঃ <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="question" value="<?php echo $poll[0]->question;?>" class="form-control" required >
                    </div>
                </div>

                

                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="সম্পাদন করুন" name="update" class="btn btn-primary">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
 