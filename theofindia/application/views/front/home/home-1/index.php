<!-- CONTENT AREA -->







<?php







$top_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','top_news','value'),true);







$sliding_news = json_decode($this->Crud_model->get_settings_value('ui_settings','sliding_news','value'),true);







$detail_news_data = json_decode($this->Crud_model->get_settings_value('ui_settings','detail_news','value'),true);







$special_category_data = json_decode($this->Crud_model->get_settings_value('ui_settings','special_category','value'),true);







$home_cat_data = json_decode($this->Crud_model->get_settings_value('ui_settings','home_cat','value'),true);







$video_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','video_gal','value'),true);







//$video_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','opinion','value'),true);







$special_category_data = json_decode($this->Crud_model->get_settings_value('ui_settings','special_category','value'),true);



$photo_gal_data = json_decode($this->Crud_model->get_settings_value('ui_settings','photo_gal','value'),true);



?>







<div class="content-area">







	<?php







		if($top_news_data['status']=='ok'){







			include 'top_news.php';







		}







	?>







    <section class="page-section with-sidebar pad-tb-5">







    	<div class="container">







            <!-- /advertisement space -->







            <div class="advertise_space2">







                <div class="row">







                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">







                        <?php echo $this->Html_model->advertise_home2x1('home_1'); ?>







                    </div>







                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">







                        <?php echo $this->Html_model->advertise_home2x1('home_2'); ?>







                    </div>







                </div>







            </div>







			<!-- /advertisement space -->







        </div>







    </section>







    <?php







		if($sliding_news['status']=='ok'){







			include 'top_slider.php';







		}







	?>







    







    















        <?php



           



		if($video_gal_data['status']=='ok'){



  



			include 'video_gallery.php';







		}







	?>

    

    

    

   <?php

		if($photo_gal_data['status']=='ok'){

			include 'photo_gallery.php';

		}

	?>















 





    <?php







    	if($detail_news_data['status']=='ok'){







			include 'detail_news.php';







		}







	?>















    







      <?php







		if($home_cat_data['status']=='ok'){







			include 'category_news.php';







		}







	?>















    







    







    







    <?php







		if($special_category_data['status']=='ok'){







			include 'special_category.php';







		}







	?>







    







    







    







          <?php







		if($home_cat_data['status']=='ok'){







			include 'opinion.php';







		}







	?>









          <?php







			include 'crime.php';





	?>





          <?php





			include 'interview.php';









	?>







 



    <section class="page-section with-sidebar pad-tb-5">







    	<div class="container">







            <!-- /advertisement space -->







            <div class="advertise_space2">







                <div class="row">







                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">







                        <?php echo $this->Html_model->advertise_home3x1('home_10'); ?>







                    </div>







                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">







                        <?php echo $this->Html_model->advertise_home3x1('home_11'); ?>







                    </div>







                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pad-t-15">







                        <?php echo $this->Html_model->advertise_home3x1('home_12'); ?>







                    </div>







                </div>







            </div>







            <!-- /advertisement space -->







        </div>







    </section>























    







</div>







<style>







.block-title{







	/*margin-left:-10px;*/







	margin-bottom:10px;







}







</style>







