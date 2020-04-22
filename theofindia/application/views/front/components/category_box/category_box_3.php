<?php
$this->db->limit(5);
$this->db->order_by('news_id','desc');
$this->db->where('news_category_id',$category);
$this->db->where('status','published');
$news	= $this->db->get('news')->result_array();
?>

<!-- /PAGE WITH SIDEBAR -->