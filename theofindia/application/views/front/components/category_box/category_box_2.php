<?php

$this->db->limit(5);

$this->db->order_by('news_id','desc');

$this->db->where('news_category_id',$category);

$this->db->where('status','published');

$news	= $this->db->get('news')->result_array();

?>

<section class="page-section with-sidebar pad-tb-5" style="background-color:#eee;">

    <div class="container">

    

    <h2 class="newheding"> <?php echo translate($video_gal_data['title']); ?> 

                <?php echo $this->Crud_model->get_type_name_by_id('news_category',$category); ?>

                   <span style="float:right;font-size:14px; color:red;"> <?php echo translate('see_more'); ?></span>

                </a>

                </h2>

       

        <div class="row mar-lr--5">

         

                <div class="row">

                    

                   

                    

                            <div class="col-md-4 col-sm-12 col-xs-12">

                                <div class="row">

                                    <div class="col-md-12">

                                        <?php

                                            if(isset($news[1])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[1]); 

                                            }

                                        ?>

                                    </div>

                                    <div class="col-md-12 mar-t-5">

                                        <?php

                                            if(isset($news[2])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[2]); 

                                            }

                                        ?>

                                    </div>

                                </div>

                            </div>

                            

                            <div class="col-md-4 col-sm-12 col-xs-12">

                                <div class="row">

                                    <div class="col-md-12">

                                        <?php

                                            if(isset($news[1])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[1]); 

                                            }

                                        ?>

                                    </div>

                                    <div class="col-md-12 mar-t-5">

                                        <?php

                                            if(isset($news[2])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[2]); 

                                            }

                                        ?>

                                    </div>

                                </div>

                            </div>

                            

                            <div class="col-md-4 col-sm-12 col-xs-12">

                                <div class="row">

                                    <div class="col-md-12">

                                        <?php

                                            if(isset($news[1])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[1]); 

                                            }

                                        ?>

                                    </div>

                                    <div class="col-md-12 mar-t-5">

                                        <?php

                                            if(isset($news[2])){

                                                echo $this->Html_model->news_box('rect_sm','1',$news[2]); 

                                            }

                                        ?>

                                    </div>

                                </div>

                            </div>

                            

                       

                    </div>

              

            </div>

        </div>

            </br>

    </div>

</section>

<!-- /PAGE WITH SIDEBAR -->