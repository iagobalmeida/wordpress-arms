<?php //  Template Name: Página "Fluxo" ?>
<?php 

  global $dark;
  $dark = true;

  global $home_section;
  $home_section = 'metodo';

  global $page_indicator;
  $page_indicator = get_field('options-content-page-fluxo-menu-title', 'option');
  $page_title = get_field('options-content-page-fluxo-title', 'option');
  $page_content_title = get_field('options-content-page-fluxo-content-title', 'option');
  $page_content = get_field('options-content-page-fluxo-content', 'option');
  $page_content_image = get_field('options-content-page-fluxo-content-image', 'option');
  $page_cta = get_field('options-content-page-fluxo-cta', 'option');

?>
<?php get_header(); ?>
<!-- Screen 03 - Método -->
<div class="grid h-screen w-screen grid-rows-6 grid-cols-6 bg-arms-white hidden md:grid">
  <!-- Header -->
  <div class="col-span-9 row-span-2"></div>

  <!-- Title & yellow square top-->
  <div class="col-span-3 grid grid-cols-3">
      <h5 class="col-start-2 col-span-2 text-black leading-none font-extrabold anim-slide anim-slide-down text-title min-[1367px]:text-title-lg"><?= $page_title ?></h5>
  </div>
  <div class="col-span-3 bg-arms-yellow"></div>

  <div class="grid col-span-6 grid-cols-4 row-span-3">
      <div class="col-span-3 bg-arms-gray py-16 anim-slide anim-slide-up" style="background-image: url(<?=$page_content_image['url']?>);background-position: center;background-size: 100% auto;">
      </div>
      <div class="grid grid-rows-5 bg-arms-yellow">
          <div class="row-span-4 px-14">
              <b class="text-2xl"><?= $page_content_title ?></b>
              <p class="text-base"><?= $page_content ?></p>
          </div> 
          <a href="/#conta" class="bg-arms-black text-xl font-medium flex items-center justify-start px-14 text-arms-white">
            <?= $page_cta ?>
          </a>
      </div>
  </div>
</div>

<div class="h-full flex justify-end flex-col md:hidden mobile bg-arms-white">
  <div class="px-8 pb-8">
    <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $page_title ?></h5>
  </div>
  <div class="h-48" style="background-image: url(<?=$page_content_image['url']?>);background-position: center;background-size: 100% auto;">
  </div>
  <div class="px-8 py-8 bg-arms-yellow anim-slide anim-slide-left">
    <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-xl mb-3"><?= $page_content_title ?></h5>
    <div class="font-light text-xl flex flex-col gap-5">
      <?= $page_content ?>
    </div>
  </div>
  <a href="/#conta" class="bg-arms-black text-arms-white flex justify-center items-center gap-4 text-lg anim-slide py-6">
      <?= $page_cta ?>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
        <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
      </svg>
  </a>
</div>
<script src="<?=get_template_directory_uri() . '/assets/js/auto_anim_slide.js' ?>" type="module"></script>

<?php get_footer(); ?>