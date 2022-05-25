<style type="text/css">
    #tinyTextarea_ifr {
        min-height: 300px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <?php // echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন খবর</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open_multipart('', $attribute);
                ?>
                <div class="form-group row">
                    <label class="col-md-2 control-label">টাইটেল<span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="title"  class="form-control" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">পেইজ<span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="topic" class="form-control" required>
                            <option value="">Page 1</option>
                            <option value="">Page 2</option>
                            <option value="">Page 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">খবর <span class="req">*</span></label>
                    <div class="col-md-10" style="min-height: 100px;">
                        <textarea name="news" id="tinyTextarea" class="form-control"></textarea>
                    </div>
                </div>

                <!--div class="form-group">
                    <label class="col-md-2 control-label">ফিচার ফটো</label>
                    <div class="col-md-5">
                        <input id="feature-img" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-md-2 control-label">তারিখ <span class="req">*</span></label>
                    <div class="input-group date col-md-5" id="datetimepicker1">
                        <input type="text" value="<?php //echo date('Y-m-d');?>" name="date" placeholder="YYYY-MM-YY" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
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

<script>

    // Texteditor Script
    tinymce.init({ 
        selector: '#tinyTextarea',
        theme: 'modern',
        plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'save table contextmenu directionality emoticons template paste textcolor'
        ],
        // content_css: 'css/content.css',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | code',
        skin: 'lightgray',
        content_css: "<?php echo site_url('private/css/tinymce.css'); ?>",
    });
</script>