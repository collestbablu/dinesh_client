<?php
$this->db->limit($crime['count']);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',9);

$this->db->where('status','published');

$crime  = $this->db->get('news')->result_array();
?>
<section class="page-section" style="background-color:#eee; margin-top:20px;">
<div class="container">
<h2 class="newheding">Crime 
<span style="float:right;font-size:14px; color:red;"><a href="<?=base_url();?>home/news/9/0"> see more</a></span>
</a>
</h2>
<div class="row mar-lr--5">
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($crime[3])){
        echo $this->Html_model->news_box('rect_sm','1',$crime[3]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($crime[2])){
        echo $this->Html_model->news_box('rect_sm','1',$crime[2]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($crime[1])){
        echo $this->Html_model->news_box('rect_sm','1',$crime[1]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($crime[0])){
        echo $this->Html_model->news_box('rect_sm','1',$crime[0]);
    }
?>
</div>
</div>
</div>
</br>
</div>
</section>