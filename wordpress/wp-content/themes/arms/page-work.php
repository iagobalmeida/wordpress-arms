<?php //  Template Name: Página "Work" ?>
<?php 
  global $page_indicator;
  $page_indicator = get_field('options-content-page-work-menu-title', 'option');
  $page_title = get_field('options-content-page-work-title', 'option');
  $page_content_title = get_field('options-content-page-work-content-title', 'option');
  $page_content = get_field('options-content-page-work-content', 'option');
  $page_cta = get_field('options-content-page-work-cta', 'option');

  global $home_section;
  $home_section = 'capricho';


  $projects = get_projects(3);
?>
<?php get_header(); ?>
<!-- Work desktop -->
<div class="h-screen w-screen grid-rows-6 grid-cols-6 bg-arms-black hidden md:grid">
    <!-- Header -->
    <div class="col-span-9 row-span-2"></div>

    <!-- Title & yellow square top-->
    <div class="col-span-3 grid grid-cols-3">
        <h5 class="col-start-2 col-span-2 text-arms-white leading-none font-extrabold anim-slide anim-slide-down text-title min-[1367px]:text-title-lg"><?= $page_title ?></h5>
    </div>
    <div class="col-span-3 bg-arms-yellow anim-slide anim-slide-left" style="margin-bottom: -1px;"></div>

    <div class="grid col-span-6 grid-cols-4 row-span-3 anim-slide anim-slide-up">
        <div class="col-span-3 bg-arms-light-gray">
            <div class="h-full" id="cards-wrapper">
              <!-- Additional required wrapper -->
              <div class="grid grid-cols-3 h-full">
                <!-- Slides -->
                <?php foreach($projects as $project): ?>
                  <?php
                    $projectCateogryField = get_field_object('project_category');
                    $title = $project['post_title'];
                    $category = $projectCateogryField['choices'][ $project['project_category'] ];
                    $url = end($project['project_content'])['project_content_image']['url'];
                  ?>
                  <a
                    href="<?= $project['guid'] ?>"
                    class="flex items-end justify-stretch cursor-pointer saturate-0 hover:saturate-100 transition-all  bg-gradient-to-t from-arms-full-black to-transparent"
                  >
                    <div class="flex-grow w-full h-full absolute z-10" style="background:url(<?= $url ?>); background-size:fit; background-position:center;"></div>
                    <div class="px-8 py-7 pt-8 text-arms-white h-28 w-full bg-gradient-to-t from-arms-full-black to-transparent z-20">
                      <h6 class="text-2xl"><?=$title?></h6>
                      <span><?= $category ?></span>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
        </div>
        <div class="grid grid-rows-5 bg-arms-yellow anim-slide anim-slide-left">
            <div class="row-span-3 px-14 text-arms-black">
                <b class="text-2xl"><?= $page_content_title ?></b>
                <p class="text-base"><?= $page_content ?></p>
            </div> 
            <div class="row-span-2 grid grid-cols-2 grid-rows-2">
                <a href="/works" class="text-xl font-medium row-start-2 col-span-2 bg-arms-white flex items-center justify-start px-14 gap-4">
                  <?= $page_cta ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="53" height="16" viewBox="0 0 53 16" fill="none">
                    <path d="M53 7.97553L44.9399 0L43.4178 1.50871L48.9259 6.95837H0V9.0927H48.8936L43.4393 14.4913L44.9614 16L53 8.04575L52.9656 8.00957L53 7.97553Z" fill="#201F1F"/>
                  </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Mobile -->
<div class="min-h-screen max-w-full pt-32 flex justify-end flex-col md:hidden">
      <div class="px-8 row-start-3 pb-8 pt-8">
        <h1 class="text-arms-white leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $page_title ?></h1>
      </div>
      <div class="w-full">
        <div class="swiper">
          <div class="swiper-wrapper max-h-full h-64">
            <!-- Slides -->

            <?php foreach($projects as $project): ?>
              <?php
                $projectCateogryField = get_field_object('project_category');
                $title = $project['post_title'];
                $category = $projectCateogryField['choices'][ $project['project_category'] ];
                $url = end($project['project_content'])['project_content_image']['url'];
              ?>
              <a
                href="<?= $project['guid'] ?>"
                class="h-64 flex items-end justify-stretch swiper-slide cursor-pointer saturate-0 hover:saturate-100 transition-all  bg-gradient-to-t from-arms-full-black to-transparent"
              >
                <div class="flex-grow w-full h-full absolute z-10" style="background:url(<?= $url ?>); background-size:fit; background-position:center;"></div>
                <div class="px-8 py-7 pt-8 text-arms-white h-28 w-full bg-gradient-to-t from-arms-full-black to-transparent z-20">
                  <h6 class="text-2xl"><?=$title?></h6>
                  <span><?= $category ?></span>
                </div>
              </a>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
      <div class="w-full bg-arms-yellow relative">
        <div class="swiper-pagination"></div>
        <div class="flex flex-col gap-3 p-12 pt-20" id="card-title-wrapper">
          <b class="text-2xl font bold text-arms-black"><?= $page_content_title ?></b>
          <p class="text-base"><?= $page_content ?></p>
        </div>
        <div class="flex flex-col w-full z-99" id="card-nagivation-wrapper">
          <a href="/works" id="button-slide-prev" class="button bg-arms-white text-arms-black h-28">
            <div>
              <?= $page_cta ?>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="53"
                height="16"
                viewBox="0 0 53 16"
                fill="currentColor"
              >
                <g clip-path="url(#clip0_75_278)">
                  <path
                    d="M53 7.97553L44.9399 0L43.4178 1.50871L48.9259 6.95837H0V9.0927H48.8936L43.4393 14.4913L44.9614 16L53 8.04575L52.9656 8.00957L53 7.97553Z"
                    fill="currentColor"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_75_278">
                    <rect width="53" height="16" fill="currentColor" />
                  </clipPath>
                </defs>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
<script src="<?=get_template_directory_uri() . '/assets/js/swiper_work.js' ?>" type="module"></script>
<script src="<?=get_template_directory_uri() . '/assets/js/auto_anim_slide.js' ?>" type="module"></script>

<?php get_footer(); ?>

