<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>সকল বিভাগ</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open('', $attribute);
                ?> 

                <table class="table table-bordered">
                    <tr>
                        <th with="40">#</th>
                        <th>বিভাগ</th>
                        <th>প্যারেন্ট</th>
                        <th>একশন</th>
                    </tr>
                    <?php foreach ($topics as $key => $topic) { ?>
                    <tr>
                        <td> <?php echo $key+1; ?> </td>
                        <td> <?php echo $topic->topic; ?> </td>
                        <td> <?php echo $topic->parent_topic; ?> </td>
                        <td style="width: 150px;">
                            <a class="btn btn-primary" href="<?php echo site_url('category/category/edit/'.$topic->id) ;?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger"  onclick="return confirm('Are you sure to delete this data?');" href="<?php echo site_url('category/category/delete?id='.$topic->id); ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

