<div class="container-fluid">
    <div class="row">
                <?php 
                echo $this->session->flashdata('confirmation');
                ?>
        <!-- <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>খুজুন</h1>
                </div>
            </div>
        
            <div class="panel-body">
                <?php /*
                $attribute = array('class' => 'form-horizontal');
                echo form_open('', $attribute);*/
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label"> Search <span class="req">*</span></label>
                    <div class="col-md-5">
                        <input type="text" name="search"  class="form-control" required >
                    </div>
                </div>
        
                <div class="col-md-7">
                    <div class="btn-group pull-right">
                        <input type="submit" value="জমা করুন" name="save" class="btn btn-primary">
                    </div>
                </div> 
                <?php //echo form_close();?>
            </div>
        </div> -->


        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>সকল বিজ্ঞাপন</h1>
                </div>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্র. নং</th>
                        <th>তারিখ</th>
                        <th>হতে</th>
                        <th>পর্যন্ত</th>
                        <th width="160">ছবি</th>
                        <th width="110">লিংক</th>
                        <th width="110">একশন</th>
                    </tr>
                    <?php foreach ($ad as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $key+1; ?> </td>
                        <td> <?php echo $value->datetime; ?> </td>
                        <td> <?php echo $value->from_date; ?> </td>
                        <td> <?php echo $value->to_date; ?> </td>
                        <td> <img  src="<?php echo site_url($value->path); ?>" alt="" style="width:100%; height:100%;"> </td>
                        <td> <a href="<?php echo $value->url; ?>"><?php echo $value->url; ?></a> </td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo site_url('ad/ad/edit_ad_new/'.$value->id) ;?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger"  onclick="return confirm('Are you sure to delete this data?');" href="<?php echo site_url('ad/ad/delete/'.$value->id); ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>