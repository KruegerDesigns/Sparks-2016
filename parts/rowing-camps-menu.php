<div class="camp-accordion large-4 columns">
  <h3><?php the_title();?></h3>
    <ul class="accordion" data-accordion data-allow-all-closed="true">
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">Summer Camps<i class="fa fa-chevron-right"></i></a>

            <?php dynamic_sidebar('summer-menu'); ?>

      </li>
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">Winter Camps<i class="fa fa-chevron-right"></i></a>

            <?php dynamic_sidebar('winter-menu'); ?>

      </li>
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">International Programs<i class="fa fa-chevron-right"></i></a>

            <?php dynamic_sidebar('development-programs-menu'); ?>
      </li>

    </ul>
    <ul class="accordion">
      <li class="accordion-item">
        <a class="accordion-title map-button" href="<?php echo get_home_url(); ?>/map-of-camp-locations">
          Camp Dates and Locations<i class="fa fa-chevron-right"></i>
        </a>
      </li>
    </ul>

  </div>