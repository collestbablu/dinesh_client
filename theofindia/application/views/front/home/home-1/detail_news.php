<?php



	$this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



	$this->db->where('news_sub_category_id',17);



	$this->db->where('status','published');



	$detail_news	= $this->db->get('news')->result_array();





    $this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



    $this->db->where('news_sub_category_id',16);



    $this->db->where('status','published');



    $detail_news_ndls    = $this->db->get('news')->result_array();





    $this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



    $this->db->where('news_sub_category_id',25);



    $this->db->where('status','published');



    $detail_news_punjab   = $this->db->get('news')->result_array();





    $this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



    $this->db->where('news_sub_category_id',24);



    $this->db->where('status','published');



    $detail_news_haryana   = $this->db->get('news')->result_array();



    $this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



    $this->db->where('news_sub_category_id',21);



    $this->db->where('status','published');



    $detail_news_rajasthan   = $this->db->get('news')->result_array();



    $this->db->limit($detail_news_data['count']);



    $this->db->order_by('serial_6','desc');



    $this->db->order_by('news_id','desc');



    $this->db->where('news_sub_category_id',18);



    $this->db->where('status','published');



    $detail_news_bihar   = $this->db->get('news')->result_array();





 ?>



<section class="page-section">



    <div class="container">



 

    <div class="row">



                	<div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Uttar Pradesh </h2>



                        <div class="row">



                            <div class="col-md-12">



                            



                                <?php



                                    if(isset($detail_news[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news[0]); 



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                                 <?php



                                    if(isset($detail_news[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                    



                    <div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Delhi </h2>



                        <div class="row">



                            <div class="col-md-12">



                                <?php



                                    if(isset($detail_news_ndls[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news_ndls[0]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_ndls[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_ndls[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_ndls[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_ndls[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_ndls[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_ndls[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                    



                    <div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Punjab </h2>



                        <div class="row">



                            <div class="col-md-12">



                                <?php



                                    if(isset($detail_news_punjab[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news_punjab[0]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_punjab[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_punjab[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_punjab[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_punjab[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_punjab[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_punjab[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                	

   </div> 



  <div class="row">



                	<div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Haryana </h2>



                        <div class="row">



                            <div class="col-md-12">



                                <?php



                                    if(isset($detail_news_haryana[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news_haryana[0]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_haryana[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_haryana[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_haryana[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_haryana[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_haryana[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_haryana[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                    



                    <div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Rajasthan </h2>



                        <div class="row">



                            <div class="col-md-12">



                                <?php



                                    if(isset($detail_news_rajasthan[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news_rajasthan[0]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_rajasthan[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_rajasthan[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_rajasthan[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_rajasthan[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_rajasthan[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_rajasthan[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                    



                    <div class="col-md-4 col-sm-4 col-xs-12">



                        <h2 class="newheding">Bihar </h2>



                        <div class="row">



                            <div class="col-md-12">



                                <?php



                                    if(isset($detail_news_bihar[0])){



                                        echo $this->Html_model->news_box('sqr_md','1',$detail_news_bihar[0]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_bihar[3])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_bihar[3]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_bihar[2])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_bihar[2]);



                                    }



                                ?>



                            </div>



                            <div class="col-md-12 mar-t-5">



                                <?php



                                    if(isset($detail_news_bihar[1])){



                                        echo $this->Html_model->news_box('rect_sm','1',$detail_news_bihar[1]);



                                    }



                                ?>



                            </div>



                        </div>



                    </div>



                		

 </div> 







    <h2 class="newheding" style="text-align:right; color:#F00; border:none; padding-right:10px; font-size:20px;"><a href="<?=base_url();?>home/news/2/0">More State</a> </h2>







	



















    </div>



</section>



