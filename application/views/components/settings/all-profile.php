            <div class="container-fluid">
                <div class="row">
                <?php echo $confirmation; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panal-header-title pull-left">
                                <h1><?php echo caption('All_Profile'); ?></h1>
                            </div>
                        </div>

                        <div class="panel-body">
                            <?php
                            if ($profiles != NULL) {
                            ?>

                            <table class="table table-bordered">
                                <tr>
                                    <th><?php echo caption('SL'); ?></th>
                                    <th><?php echo caption('Image'); ?></th>
                                    <th><?php echo caption('Name'); ?></th>
                                    <th><?php echo caption('Username'); ?></th>
                                    <th><?php echo caption('Privilege'); ?></th>
                                    <th><?php echo caption('Action'); ?></th>
                                </tr>

                                <?php foreach ($profiles as $key => $value) { ?>
                                <tr>
                                    <td><?php echo($key + 1); ?></td>
                                    <td><img src="<?php echo site_url($value->image); ?>" alt="" style="width: 30px; height: 30px;"></td>
                                    <td><?php echo ucwords($value->name)." ".ucwords($value->l_name); ?></td>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo ucwords($value->privilege); ?></td>
                                    <td style="width: 180px;">
                                        <a class="btn btn-info" href="<?php echo site_url("settings/showProfile?id=" . $value->id); ?>">
                                            <i class="fa fa-eye" aria-hidden="true"></i> 
                                        </a>
                                        <?php if($privilege=='admin'){ ?>
                                        <a class="btn btn-warning" href="<?php echo site_url("settings/editProfile?id=" . $value->id); ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <?php } if($value->privilege!=$privilege && $value->username!=$username && $privilege=='admin'){ ?>
                                        <a onclick="return confirm('This Data will delete permanently')" class="btn btn-danger" href="<?php echo site_url("settings/allProfile?img_url=".$value->image."&id=" . $value->id); ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>

                            <?php
                            } else {
                                echo "<h3 style='text-align:center;'>No Accounts Available !</h3>";
                            }
                            ?>

                        </div>

                        <div class="panel-footer">&nbsp;</div>
                    </div>
                </div>
            </div>


