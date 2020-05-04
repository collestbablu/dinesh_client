<?php
$this->db->limit($Opinion['count']);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',11);

$this->db->where('status','published');

$Opinion  = $this->db->get('news')->result_array();
?>
<section class="page-section" style="background-color:#eee; margin-top:20px;">
<div class="container">
<h2 class="newheding">Opinion 
<span style="float:right;font-size:14px; color:red;"><a href="<?=base_url();?>home/news/11/0"> see more</a></span>
</a>
</h2>
<div class="row mar-lr--5">
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Opinion[0])){
        echo $this->Html_model->news_box('rect_sm','1',$Opinion[0]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Opinion[1])){
        echo $this->Html_model->news_box('rect_sm','1',$Opinion[1]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Opinion[2])){
        echo $this->Html_model->news_box('rect_sm','1',$Opinion[2]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Opinion[3])){
        echo $this->Html_model->news_box('rect_sm','1',$Opinion[3]);
    }
?>
</div>
</div>
</div>
</br>
</div>
</section>