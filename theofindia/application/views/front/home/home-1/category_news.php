<?php
$this->db->limit($detail_news_data['count']);

    $this->db->order_by('serial_6','desc');

    $this->db->order_by('news_id','desc');

	$this->db->where('news_category_id',6);

	$this->db->where('status','published');

	$detail_news	= $this->db->get('news')->result_array();
?>

<section class="page-section with-sidebar pad-tb-5" style="background-color:#eee;">
<div class="container">
<h2 class="newheding">  
Entertainment
<span style="float:right;font-size:14px; color:red;"> See More</span>
</h2>
<div class="row mar-lr--5">
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($detail_news[3])){
        echo $this->Html_model->news_box('rect_sm','1',$detail_news[3]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($detail_news[2])){
        echo $this->Html_model->news_box('rect_sm','1',$detail_news[2]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($detail_news[1])){
        echo $this->Html_model->news_box('rect_sm','1',$detail_news[1]);
    }
?>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<?php
   if(isset($detail_news[0])){
        echo $this->Html_model->news_box('rect_sm','1',$detail_news[0]);
    }
?>
</div>
</div>
</div>
<br>
</section>