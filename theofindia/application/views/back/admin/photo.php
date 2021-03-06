<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" >
            <?php echo translate('manage_photo_gallery'); ?>
        </h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
                         class="col-md-12" >
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                onclick="ajax_set_full('add', '<?php echo translate('add_photo'); ?>', '<?php echo translate('successfully_added!'); ?>', 'photo_add', ''); proceed('to_list');">
                                    <?php echo translate('upload_photo'); ?>
                        </button>
                        <button class="btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn" 
                                style="display:none;"  onclick="ajax_set_list(); proceed('to_add');" >
                                    <?php echo translate('back_to_photo_list'); ?>
                        </button>
                    </div>
                    <br>
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'photo';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
    function proceed(type) {
        if (type == 'to_list') {
            $(".pro_list_btn").show();
            $(".add_pro_btn").hide();
        } else if (type == 'to_add') {
            $(".add_pro_btn").show();
            $(".pro_list_btn").hide();
        }
    }
</script>


