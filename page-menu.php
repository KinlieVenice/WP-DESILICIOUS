<?php get_header() ?>
    <section class="menuList bg--primary">
      <div class="container">
        <div class="menuList__wrapper">
          <div class="menuList__content">
            <div class="menuList__title">
              <h2>Beef Items</h2>
            </div>
        <?php $beaf = new WP_Query(array (
            'post_type' => 'menu',
            'posts_per_page' => -1,
            'meta_key' => 'Grouping',
            'meta_value' => 'Beaf'
          ))?>
          <div class="menu__food__grid">
          <?php if($beaf->have_posts()) : while($beaf->have_posts()) : $beaf->the_post()?>
            <div class="menu__food__griditem">
                    <ul>
                     <li><?php the_title() ?></li>
                    <li><?php echo get_post_meta(get_the_ID(), 'Price', true) ?></li>
                    </ul>
                    <p><?php the_content()?></p>
            </div>
        <?php endwhile;
          else:
            echo "no menus";
          endif;
          wp_reset_postdata();
        ?>
        </div>
        <img src="<?php echo get_post_meta(get_the_ID(), "Banner Beef", true)?>" alt="" />
        </div>

        <div class="menuList__content">
            <div class="menuList__title">
              <h2>Salad Items</h2>
            </div>
        <?php $salad = new WP_Query(array (
            'post_type' => 'menu',
            'posts_per_page' => -1,
            'meta_key' => 'Grouping',
            'meta_value' => 'salad'
          ))?>
          <div class="menu__food__grid">
          <?php if($salad->have_posts()) : while($salad->have_posts()) : $salad->the_post()?>
            <div class="menu__food__griditem">
                    <ul>
                     <li><?php the_title() ?></li>
                    <li><?php echo get_post_meta(get_the_ID(), 'Price', true) ?></li>
                    </ul>
                    <p><?php the_content()?></p>
            </div>
        <?php endwhile;
          else:
            echo "no menus";
          endif;
          wp_reset_postdata();
        ?>
        </div>
        <img src="<?php echo get_post_meta(get_the_ID(), "Banner Salad", true)?>" alt="" />
        </div>

        <div class="menuList__content">
            <div class="menuList__title">
              <h2>Chicken Items</h2>
            </div>
        <?php $chicken = new WP_Query(array (
            'post_type' => 'menu',
            'posts_per_page' => -1,
            'meta_key' => 'Grouping',
            'meta_value' => 'Chicken'
          ))?>
          <div class="menu__food__grid">
          <?php if($chicken->have_posts()) : while($chicken->have_posts()) : $chicken->the_post()?>
            <div class="menu__food__griditem">
                    <ul>
                     <li><?php the_title() ?></li>
                    <li><?php echo get_post_meta(get_the_ID(), 'Price', true) ?></li>
                    </ul>
                    <p><?php the_content()?></p>
            </div>
        <?php endwhile;
          else:
            echo "no menus";
          endif;
          wp_reset_postdata();
        ?>
        </div>
            <img src="<?php echo get_post_meta(get_the_ID(), "Banner Chicken", true)?>" alt="" />
        </div>
      </div>
    </section>
<?php get_footer() ?>