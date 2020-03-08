<?php
/*
Template Name: Home
*/

/**
 * @package customtheme
 */

get_header(); ?>

<?php if( get_field('hp_background_photo') ): ?>
    <div class="hp-bkgrnd-img-wrapper"><img src="<?php the_field('hp_background_photo'); ?>" /></div>
<?php endif; ?>


<div id="primary" class="content-area" >


  <main id="main" class="site-main" role="main">

    <div class="">




      <section id="hp-sect-1" class="container-fluid" >


        <div class="row hp-row-1"> 
          <div class="col-md-12">

          <?php if( get_field('hp_sect_one_logo') ): ?>
              <div class="hp-sect-one-logo-wrapper"><img src="<?php the_field('hp_sect_one_logo'); ?>" /></div>
          <?php endif; ?>

          </div>

        </div>

        <div class="row hp-row-2"> 
          <div class="col-md-12">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('hp_sect_one_text_carousel') ):
                // loop through the rows of data
                  while ( have_rows('hp_sect_one_text_carousel') ) : the_row();
                      // display a sub field value
                      $hp_sect_one_text_carousel_one = get_sub_field('hp_sect_one_text_carousel_one');
                      $hp_sect_one_text_carousel_two = get_sub_field('hp_sect_one_text_carousel_two');
                      $hp_sect_one_text_carousel_three = get_sub_field('hp_sect_one_text_carousel_three');
                  endwhile;

              else :
                  // no rows found
              endif;
              ?>
              <div class="hp-slider-wrapper">
              <div class="hp-slider">
                <div><p><?php echo $hp_sect_one_text_carousel_one; ?></p></div>
                <div><p><?php echo $hp_sect_one_text_carousel_two; ?></p></div>
                <div><p><?php echo $hp_sect_one_text_carousel_three; ?></p></div>
              </div>
            </div>
         

          </div>
        </div>

        <div class="row hp-row-2"> 
          <div class="col-md-12">
            <div class="hp-sect-one-text-field-one-wrapper">
              <p>
                <?php 
                if( get_field('hp_sect_one_text_field_one') ) {
                  the_field('hp_sect_one_text_field_one');
                 }
              ?>
              </p>
            </div>
          </div>
        </div>
        
      </section>


      <section id="hp-sect-2">
        <div>
          <img class="hp-sect-2-tab" src="http://ocelotenergydv.wpengine.com/wp-content/uploads/2020/03/u3465.png" alt="" width="" height="" />
        </div>

        <div class="row"> 
          <div id="hp-sect-2-col-1" class="col-md-6">
            
            <?php if( get_field('hp_sect_two_image') ): ?>
                <div class=""><img src="<?php the_field('hp_sect_two_image'); ?>" /></div>
            <?php endif; ?>

          </div>
          <div id="hp-sect-2-col-2" class="col-md-6">
            <div class="hp-sect-2-col-2-wrapper">
              <?php 
              if( get_field('hp_sect_two_text_area') ) {
                the_field('hp_sect_two_text_area');
               }
              ?>
            </div>

          </div>

        </div>
      </section>


      <section id="hp-sect-3" class="container-fluid" >

        <div class="row">
          <div class="icon-wrapper">
            <div class="home-page-icon">
              <div class="home-page-icon-word-wrapper">
                <p>Our Partners</p>
                <p>have spent decades in the Midstream energy Market</p>
              </div>
            </div>
          </div>
        </div>

      </section>


      <section id="hp-sect-4" class="container-fluid" >
        

      </section>


    </div>



  </main>

</div>

<?php
get_footer();
