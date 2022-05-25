<style type="text/css">
    #tinyTextarea_ifr {
        min-height: 300px;
    }
</style>

<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>এডসেন্স সম্পাদনা করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open('', $attribute);
                ?> 

                <div class="form-group row">
                    <label class="col-md-2 control-label">স্ক্রিপ্ট <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="adsance_script" value="" class="form-control" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">স্থান <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="place" class="form-control" required>
                            <option value="উপরে" checked>উপরে</option>
                            <option value="নিচে">নিচে</option>
                        </select>
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

