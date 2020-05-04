<?php
$this->db->limit($jyotish['count']);

$this->db->order_by('serial_6','desc');

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',7);

$this->db->where('status','published');

$jyotish	= $this->db->get('news')->result_array();


$this->db->limit($sports['count']);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',5);

$this->db->where('status','published');

$sports	= $this->db->get('news')->result_array();

$this->db->limit($Health['count']);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',3);

$this->db->where('status','published');

$Health = $this->db->get('news')->result_array();

?>
<section class="page-section with-sidebar pad-tb-5">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<h2 class="newheding">jyotish vastu</h2>
<div class="row">
<div class="col-md-12">
<?php
    if(isset($jyotish[0])){
        echo $this->Html_model->news_box('sqr_md','1',$jyotish[0]); 
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($jyotish[1])){
        echo $this->Html_model->news_box('rect_sm','1',$jyotish[1]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($jyotish[2])){
        echo $this->Html_model->news_box('rect_sm','1',$jyotish[2]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
    <?php
        if(isset($jyotish[3])){
            echo $this->Html_model->news_box('rect_sm','1',$jyotish[3]);
        }
    ?>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<h2 class="newheding">Sports</h2>
<div class="row">
<div class="col-md-12">
<?php
    if(isset($sports[0])){
        echo $this->Html_model->news_box('sqr_md','1',$sports[0]); 
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($sports[1])){
        echo $this->Html_model->news_box('rect_sm','1',$sports[1]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($sports[2])){
        echo $this->Html_model->news_box('rect_sm','1',$sports[2]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
    <?php
        if(isset($sports[3])){
            echo $this->Html_model->news_box('rect_sm','1',$sports[3]);
        }
    ?>
</div>
</div>
</div>

<div class="col-md-4 col-sm-4 col-xs-12">
<h2 class="newheding">Health</h2>
<div class="row">
<div class="col-md-12">
<?php
    if(isset($Health[0])){
        echo $this->Html_model->news_box('sqr_md','1',$Health[0]); 
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($Health[1])){
        echo $this->Html_model->news_box('rect_sm','1',$Health[1]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
<?php
    if(isset($Health[2])){
        echo $this->Html_model->news_box('rect_sm','1',$Health[2]);
    }
?>
</div>
<div class="col-md-12 mar-t-5">
    <?php
        if(isset($Health[3])){
            echo $this->Html_model->news_box('rect_sm','1',$Health[3]);
        }
    ?>
</div>
</div>
</div>
                    

                    

                     

           

                    

                    

                    

                    

                    

                </div>

           

         

    </div>

</section>

<!-- /PAGE WITH SIDEBAR -->

<style>

.block-title{

	margin-bottom:10px;

}

</style>