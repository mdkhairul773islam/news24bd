<style>
    img {
        width: 100%;
        height: 100%;
        vertical-align: top;
    }
    .modal {
        font-family: 'robotoregular';
        margin-top: 6.8% !important;
    }
    .modal-header, .modal-footer {
        padding: 5px 10px !important;
    }
    .close span {
        display: block;
        padding: 5px 10px;
        color: #fff;
        text-shadow: none;
    }
    .close {
        position: absolute;
        right: -15px;
        top: -15px;
        background: #000 !important;
        border-radius: 50%;
        cursor: pointer;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img class="img-fluid img-responsive" src="<?php echo site_url('public/news/ads/bx9adewyn.png'); ?>" alt="Pic Not Found !" />
  </div>
</div>



<script type="text/javascript">
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
</script>