<style>
.gallery figure .video {
    width: 323px;
}
</style>
<div class="container-fluid">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>ভিডিও সম্পাদনা করুন</h1>
                </div>
            </div>

            <div class="panel-body">
               <div class="row">
                    <div class="col-sm-12">
                        <div class="gallery video-gallery">
                        <?php foreach ($v_gallery_data as $key => $value) { ?>
                            <figure>
                                <div class="video"><?php echo $value->embed_code; ?></div>
                                <figcaption>
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data ?')" href="?delete_token=<?php echo $value->id; ?>">Delete</a>
                                </figcaption>
                            </figure>
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

