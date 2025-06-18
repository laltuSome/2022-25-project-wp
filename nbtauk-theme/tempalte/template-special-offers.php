<?php /* Template Name: Special Offers Template */ ?>

<?php get_header();?>



<section class="section section-offer-page">
<div class="container position-relative">
<div class="row justify-content-between">
<div class="col-lg-4 col-md-12 col-12" >
    <div class="offer-menu">
   <ul class="tab">
  <li class="tablinks" onclick="openCrose(event, 'page1')" id="defaultOpen">Fast-Track Pathway to Aesthetics</li>
  <li class="tablinks" onclick="openCrose(event, 'page2')">Level 4 Aesthetic Treatments</li>
    <li class="tablinks" onclick="openCrose(event, 'page3')">Level 3 Nail Technology Diploma</li>
      <li class="tablinks" onclick="openCrose(event, 'page4')">Level 3 Diploma in Holistic Massage Therapy</li>
      <li class="tablinks" onclick="openCrose(event, 'page5')">Level 3 Diploma in Beauty Therapy Diploma</li>
</ul>
    </div>
</div>

  </div>

<div id="page1" class="tabcontent">
    <div class="row justify-content-between">
        <div class="col-lg-4 col-md-12 col-12"></div>
    <div class="col-lg-7 col-md-12 col-12">
     <div class="offer-dat">
        <?php the_field('fast_track'); ?>
      </div>
    </div>
     <div class="col-lg-12 col-md-12 col-12">
         
 <div class="offer-body">
    <div class="row">
     <div class="col-lg-6 col-md-12 col-12">
        <?php the_field('fast_track2'); ?>
        </div>
       <div class="col-lg-6 col-md-12 col-12">
          <?php the_field('fast_track3'); ?>
        
     </div>
     <div class="col-lg-12">
         <?php the_field('fast_track4'); ?> 
      

     </div>

    </div>
     
 </div>

    </div>
</div>
 
</div>
<div id="page2" class="tabcontent">
    <div class="row justify-content-between">
        <div class="col-lg-4 col-md-12 col-12"></div>
    <div class="col-lg-7 col-md-12 col-12">
     <div class="offer-dat">
         <?php the_field('level_4_aesthetic1'); ?> 
        
          
      </div>
    </div>
     <div class="col-lg-12 col-md-12 col-12">
         
 <div class="offer-body">
    <div class="row">
        <div class="col-lg-12">
             <?php the_field('level_4_aesthetic2'); ?> 
            
        </div>
     <div class="col-lg-12 col-md-12 col-12">
         <?php the_field('level_4_aesthetic3'); ?> 
         
     </div>
     
     <div class="col-lg-12">
         <?php the_field('level_4_aesthetic4'); ?> 



     </div>

    </div>
     
 </div>

    </div>
</div>
 
</div>


<div id="page3" class="tabcontent">
    <div class="row justify-content-between">
        <div class="col-lg-4 col-md-12 col-12"></div>
    <div class="col-lg-7 col-md-12 col-12">
     <div class="offer-dat">
         <?php the_field('level_3_nail1'); ?> 
        </div>
    </div>
     <div class="col-lg-12 col-md-12 col-12">
         <div class="offer-body">
    <div class="row">
        <div class="col-lg-12">
            <?php the_field('level_3_nail2'); ?> 
         </div>
     <div class="col-lg-12 col-md-12 col-12">
          <?php the_field('level_3_nail3'); ?> 
     </div>
     


    </div>
     
 </div>

    </div>
</div>
 
</div>

<div id="page4" class="tabcontent">
    <div class="row justify-content-between">
        <div class="col-lg-4 col-md-12 col-12"></div>
    <div class="col-lg-7 col-md-12 col-12">
     <div class="offer-dat">
         <?php the_field('level_3_diploma_massage'); ?> 
        </div>
    </div>
     <div class="col-lg-12 col-md-12 col-12">
         <div class="offer-body">
    <div class="row">
        <div class="col-lg-12">
            <?php the_field('level_3_diploma_massage2'); ?> 
         </div>
     <div class="col-lg-12 col-md-12 col-12">
          <?php the_field('level_3_diploma_massage3'); ?> 
     </div>
 </div>
     </div>
</div>
</div>
 </div>

 <div id="page5" class="tabcontent">
    <div class="row justify-content-between">
        <div class="col-lg-4 col-md-12 col-12"></div>
    <div class="col-lg-7 col-md-12 col-12">
     <div class="offer-dat">
         <?php the_field('level_3_diploma_beauty'); ?> 
        </div>
    </div>
     <div class="col-lg-12 col-md-12 col-12">
         <div class="offer-body">
    <div class="row">
        <div class="col-lg-12">
            <?php the_field('level_3_diploma_beauty2'); ?> 
         </div>
     <div class="col-lg-12 col-md-12 col-12">
          <?php the_field('level_3_diploma_beauty3'); ?> 
     </div>
 </div>
     </div>
</div>
</div>
 </div>





</div>
</section>









<?php get_footer();?>