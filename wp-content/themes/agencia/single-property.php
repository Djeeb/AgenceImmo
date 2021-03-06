<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="container">
    <header class="bien-header">
      <div>
        <h1 class="bien__title"><?php the_title(); ?> - <?= the_field('surface'); ?>m²</h1>
        <div class="bien__meta">
          <div class="bien__location"><?= agence_city() ?></div>
          <div class="bien__price"><?php agence_price() ?></div>
        </div>
        <div class="bien__actions" id="bien-actions">
          <button class="btn btn-filled" id="bien-contact">Contact the agency</button>
          <button class="btn">Call</button>
        </div>

        <div class="hidden" id="bien-form">
          <?= do_shortcode('[contact-form-7 id="107" title="" html_class="bien__form form-2column"]'); ?>
        </div>

      </div>
      <div>
        <div class="bien__photos js-slider">
          <?php foreach(get_attached_media('image', get_post()) as $image): ?>
            <a href="<?= wp_get_attachment_url($image->ID) ?>">
              <img class="bien__photo" src="<?= wp_get_attachment_image_url($image->ID, 'property-carousel'); ?>" alt="">
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </header>




    <div class="bien-body">
      <h2 class="bien-body__title"><?= __('Description', 'agencia'); ?></h2>
      <div class="formatted">
        <?php the_content(); ?>
      </div>
    </div>

    <section class="bien-options">
      <div class="bien-option">
        <img src="<?= get_template_directory_uri() ?>/assets/area.78237e19.svg" alt=""> 
        <?= __('Surface', 'agencia') ?> <?php the_field('surface') ?>m²
      </div>
      <div class="bien-option">
        <img src="<?= get_template_directory_uri() ?>/assets/rooms.b02e3d15.svg" alt=""> 
        <?= __('Rooms', 'agencia') ?>: <?php the_field('rooms'); ?>
      </div>
      <div class="bien-option">
        <img src="<?= get_template_directory_uri() ?>/assets/elevator.e0bdbd67.svg" alt="">
         <?= __('Floor', 'floor') ?>: <?php the_field('floor') ?>
      </div>
      <?php $options = get_the_terms(get_post(), 'property_option'); ?>
      <?php foreach($options as $option): ?>
      <div class="bien-option"><img src="<?= the_field('icon', $option); ?>" alt=""> 
      <?= $option->name; ?>
    </div>
      <?php endforeach; ?>
    </section>

  </div>
<?php endwhile; ?>
<?php get_footer(); ?>