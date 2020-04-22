<?php
$this->db->limit($special_category_data['count']);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',12);

$this->db->where('status','published');

$Interview  = $this->db->get('news')->result_array();
?>
<section class="page-section" style="background-color:#eee; margin-top:20px;">
<div class="container">
<h2 class="newheding">Interview 
<span style="float:right;font-size:14px; color:red;"> see more</span>
</a>
</h2>
<div class="row mar-lr--5">
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Interview[3])){
        echo $this->Html_model->news_box('rect_sm','1',$Interview[3]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Interview[2])){
        echo $this->Html_model->news_box('rect_sm','1',$Interview[2]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Interview[1])){
        echo $this->Html_model->news_box('rect_sm','1',$Interview[1]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($Interview[0])){
        echo $this->Html_model->news_box('rect_sm','1',$Interview[0]);
    }
?>
</div>
</div>
</div>
</br>
</div>
</section>