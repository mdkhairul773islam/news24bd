<style type="text/css">
    #tinyTextarea_ifr {
        min-height: 300px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>খবর সম্পাদনা করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open_multipart('', $attribute);
                ?>
                <input type="hidden" name="old_image" value="<?php echo $info[0]->photo; ?>">
                <div class="form-group row">
                    <label class="col-md-2 control-label">শিরোনাম <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="title" value="<?php echo $info[0]->title; ?>" class="form-control" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">বিভাগ <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="topic" class="form-control" required>
                            <?php foreach ($topics as $key => $topic) { ?>
                            <option <?php selected($info[0]->topic,$topic->topic); ?>  value="<?php echo $topic->topic; ?>"><?php echo $topic->topic ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">উপ বিভাগ <span class="req">*</span></label>
                    <div class="col-md-5">
                        <select name="sub_topic" class="form-control" required>
                            <?php foreach ($topics as $key => $topic) { ?>
                            <option <?php selected($info[0]->sub_topic,$topic->topic); ?>  value="<?php echo $topic->topic; ?>"><?php echo $topic->topic; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label">ট্যাগ</label>
                    <div class="col-md-5">
                        <input type="hidden" name="tags" id="mySingleField" value="<?php echo $tags; ?>">
                        <ul id="singleFieldTags"></ul>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">খবর <span class="req">*</span></label>
                    <div class="col-md-10">
                        <!--<textarea name="news" id="tinyTextarea" row="5" class="form-control"> <?php echo $info[0]->news; ?></textarea>-->
                        <textarea name="news" id="tinyTextarea" rows="20" cols="50" class="form-control"> <?php echo $info[0]->news; ?></textarea>
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-md-2 control-label">ফিচার ফটো</label>
                    <div class="col-md-5">
                        <input id="feature-img" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                    </div>
                    <div class="col-md-offset-1 col-md-3" style=" position: absolute; right: 100px;">
                        <img src="<?php echo site_url($info[0]->photo); ?>" style="width: 100%; max-height: 188px; vertical-align: top;" alt="ফিচার ফটো">
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-md-2 control-label">তারিখ <span class="req">*</span></label>
                    <div class="input-group date col-md-5" id="datetimepicker1">
                        <input type="text" value="<?php echo $info[0]->date; ?>" name="date" value="" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="col-md-offset-2 col-md-5">
                    <div class="row">
                        <label><input type="checkbox" <?php checked($info[0]->is_latest,1); ?> name="is_latest" value="1"> সর্বশেষ খবরের অন্তর্ভুক্ত হবে</label>
                    </div>
                </div>


                <div class="col-md-offset-2 col-md-5">
                    <div class="row">
                        <label><input type="checkbox" <?php checked($info[0]->publish,1); ?> name="publish" checked value="1"> প্রকাশ করুন</label>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="আপডেট করুন" name="update" class="btn btn-primary">
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