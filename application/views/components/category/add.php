<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>বিভাগ</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                $attribute = array('class' => 'form-horizontal');
                echo form_open('', $attribute);
                ?> 

        		<div class="form-group row">
                    <label class="col-md-2 control-label">বিভাগ <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="topic"  class="form-control" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">প্যারেন্ট <span class="req">&nbsp;</span></label>
                    <div class="col-md-5">
                        <select name="parent_topic" class="form-control">
                            <option value="">-- নির্বাচন করুন --</option>
                            <?php foreach ($parents as $key => $value) { ?>
                            <option value="<?php echo $value->topic ?>"><?php echo $value->topic ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div> 

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

