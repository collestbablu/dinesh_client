<?php
    $this->db->limit($photo_gal_data['count']);
    $this->db->order_by('photo_id', 'desc');
    $this->db->where('status', 'published');
    $gallery_photos = $this->db->get('photo')->result_array();
?>
<section class="page-section pad-tb-5 gallery_slider" style="border-bottom:solid #eee 3px;">
    <div class="container">
        <div class="row">
        </br>
             <div class="newheding">
                <?php echo translate($photo_gal_data['title']); ?>
                
            </div>
            <div class="row">
                <div class="featured-products-carousel">
                    <div class="owl-carousel" id="gallery-slider-carousel">
                        <?php
                            foreach ($gallery_photos as $row) {
                                echo $this->Html_model->photo_box('2', $row);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         </br>
          </br>
    </div>
</section>