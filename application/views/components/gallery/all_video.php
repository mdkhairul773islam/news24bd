<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>ভিডিও সম্পাদনা করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <?php 
                echo $this->session->flashdata('confirmation');
                $attribute = array('class' => 'form-horizontal');
                echo form_open('', $attribute);
                ?>
                
                <div class="row">
                    <div class="col-md-3">
                        <iframe src="https://www.youtube.com/embed/W4CaEyaxm9Q" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3">
                        <iframe src="https://www.youtube.com/embed/W4CaEyaxm9Q" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3">
                        <iframe src="https://www.youtube.com/embed/W4CaEyaxm9Q" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-3">
                        <iframe src="https://www.youtube.com/embed/W4CaEyaxm9Q" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

