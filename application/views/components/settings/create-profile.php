<a class="btn btn-default help" data-toggle="modal" data-target="#myModal">
    <?php echo caption('Help'); ?>
</a>


<div class="container-fluid">
    <div class="row">

    <!-- horizontal form -->
    <?php
    echo $confirmation;
    $attribute = array(
        'name' => '',
        'class' => 'form-horizontal',
        'id' => ''
    );
    echo form_open_multipart('', $attribute);
    ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1><?php echo caption('Create_An_Account'); ?></h1>
                </div>
            </div>

            <div class="panel-body no-padding">

            
            <div class="no-title">&nbsp;</div>

                <!-- left side -->
                <aside class="col-md-3">
                    <!--div class="border-top">&nbsp;</div-->
                    
                    
                    <figure class="profile-pic">
                        <img src="<?php echo site_url("private/images/pic-male.png"); ?>" alt="Photo not found!" class="img-responsive">
                    </figure>

                    <div class="profile-upload">    
                        
                        <label class="btn btn-primary" style="display: block;" for="image"><i class="fa fa-cloud-upload"></i> <?php echo caption('Upload'); ?></label>
                        <input type="file" name="image" required id="image" style="display: none;">
                    </div> <br/>

                    <!-- <table class="table table-status">
                        <tbody>
                            <tr>
                                <td style="width: 60%"><?php echo caption('Status'); ?></td>
                                <td><span class="status"><?php echo caption('Active'); ?></span></td>
                            </tr>
                            <tr>
                                <td style="width: 60%"><?php echo caption('User_Rating'); ?></td>
                                <td>
                                    <i class="fa fa-star co-yellow"></i>
                                    <i class="fa fa-star co-yellow"></i>
                                    <i class="fa fa-star co-yellow"></i>
                                    <i class="fa fa-star co-yellow"></i>
                                    <i class="fa fa-star co-yellow"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 60%"><?php echo caption('Member_Since'); ?></td>
                                <td>June 07, 2016 </td>
                            </tr>
                        </tbody>
                    </table> -->
                </aside>


                <div class="col-md-9">
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Name'); ?></label>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="f_name" placeholder="<?php echo caption('Name'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Mobile'); ?></label>
                        <div class="col-md-7">
                            <input type="text" name="mobile" class="form-control" placeholder="<?php echo caption('Mobile'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Email'); ?></label>
                        <div class="col-md-7">
                            <input type="email" name="email" class="form-control" placeholder="email@yourcompany.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Username'); ?></label>
                        <div class="col-md-7">
                            <input type="text" name="username" class="form-control" placeholder="<?php echo caption('Username'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Password'); ?></label>
                        <div class="col-md-7">
                            <input class="form-control" type="password" name="password" placeholder="<?php echo caption('Password'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Confirm_Password'); ?></label>
                        <div class="col-md-7">
                            <input class="form-control" type="password" name="confirmPassword" placeholder="<?php echo caption('Confirm_Password'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"><?php echo caption('Privilege'); ?></label>
                        <div class="col-md-7">
                            <select name="privilege" class="form-control">
                                <option value="">-- <?php echo caption('Select'); ?> --</option>
                                <!--option value="super">Super</option-->
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-7">
                            <div class="btn-group pull-right">
                                <input class="btn btn-primary" type="submit" name="createProfileBtn" value="<?php echo caption('Save'); ?>">
                                <input class="btn btn-danger" type="reset" value="<?php echo caption('Reset'); ?>">
                            </div>
                        </div>
                        <!--div class="col-sm-2 col-xs-2"></div-->
                    </div>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>

<!-- Tutorial -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Help Tutorial</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hrZqiCUx6kg" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- End -->