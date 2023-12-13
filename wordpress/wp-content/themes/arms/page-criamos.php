<?php //  Template Name: Página "Criamos" ?>
<?php 
  global $page_indicator;
  $page_indicator = get_field('options-content-page-criamos-menu-title', 'option');
  $page_title = get_field('options-content-page-criamos-title', 'option');
  $page_cta = get_field('options-content-page-criamos-cta', 'option');

  function get_page_criamos_tab_options($tab_number) {
    return array(
      'parent'=>$tab_number,
      'title'=>get_field('options-tabs-'.$tab_number.'-title', 'option'),
      'content-title'=>get_field('options-tabs-'.$tab_number.'-content-title', 'option'),
      'content-text'=>get_field('options-tabs-'.$tab_number.'-content-text', 'option'),
      'items'=>get_field('options-tabs-'.$tab_number.'-items', 'option')
    );
  }
  $tabs = [
    get_page_criamos_tab_options('01'),
    get_page_criamos_tab_options('02'),
    get_page_criamos_tab_options('03'),
    get_page_criamos_tab_options('04')
  ];

  global $home_section;
  $home_section = 'somos';
  
?>
<?php get_header(); ?>
<!-- Dekstop container -->
<main class="w-full h-full flex-row items-end hidden md:flex">
  <div class="w-full h-3/4 min-[1367px]:h-2/3 grid grid-cols-9 items-end relative">

    <div class="h-full text-arms-white col-span-5">
      <h5 class=" text-center font-bold leading-none -mt-10 mb-20 anim-slide anim-slide-down text-title"><?=$page_title?></h5>
    </div>

    <div class="h-full transition-colors ease-in-out bg-arms-blue anim-slide anim-slide-up col-span-4" style="margin-left: 12px">

    </div>

    <div class="absolute right-0 bottom-0 grid grid-cols-4 w-full min-[1367px]:h-3/4">
      <div class="h-full flex flex-col anim-slide col-span-3" id="cards-wrapper">
        <div class="h-16 min-[1367px]:h-32 flex flex-row bg-arms-black relative">
          <div class="absolute w-1/4 h-full bg-white z-10 tab-indicator">

          </div>
          <a data-tab-toggle="01" class="w-full z-20 cursor-pointer h-full text-xl flex text-arms-black active items-center justify-center gap-4 transition-all">
            <svg class="transition-transform rotate-90" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
              <g clip-path="url(#clip0_218_172)">
                <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
              </g>
              <defs>
                <clipPath id="clip0_218_172">
                  <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                </clipPath>
              </defs>
            </svg>
            <span><?= $tabs[0]['title'] ?></span>
          </a>
          <a data-tab-toggle="02" class="w-full z-20 cursor-pointer h-full text-xl flex text-arms-white items-center justify-center gap-4 transition-all hover:bg-arms-black-700">
            <svg class="transition-transform" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
              <g clip-path="url(#clip0_218_172)">
                <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
              </g>
              <defs>
                <clipPath id="clip0_218_172">
                  <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                </clipPath>
              </defs>
            </svg>
            <span><?= $tabs[1]['title'] ?></span>
          </a>
          <a data-tab-toggle="03" class="w-full z-20 cursor-pointer h-full text-xl flex text-arms-white items-center justify-center gap-4 transition-all hover:bg-arms-black-700">
            <svg class="transition-transform" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
              <g clip-path="url(#clip0_218_172)">
                <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
              </g>
              <defs>
                <clipPath id="clip0_218_172">
                  <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                </clipPath>
              </defs>
            </svg>
            <span><?= $tabs[2]['title'] ?></span>
          </a>
          <a data-tab-toggle="04" class="w-full z-20 cursor-pointer h-full text-xl flex text-arms-white items-center justify-center gap-4 transition-all hover:bg-arms-black-700">
            <svg class="transition-transform" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
              <g clip-path="url(#clip0_218_172)">
                <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
              </g>
              <defs>
                <clipPath id="clip0_218_172">
                  <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                </clipPath>
              </defs>
            </svg>
            <span><?= $tabs[3]['title'] ?></span>
          </a>
        </div>
        <div class="h-full bg-white px-24 py-10 grid grid-rows-3 grid-cols-3">
          <?php foreach($tabs as $tab): ?> 
            <?php foreach($tab['items'] as $item): ?>
              <?php 
                $parent = $tab['parent'];
                $values = array_values($item);
              ?>
                <div class="px-5" <?= $parent != '01' ? 'class="hidden"' : '' ?> data-tab-parent="<?= $parent ?>">
                  <p class="text-arms-black text-base font-bold"><?= $values[0] ?></p>
                  <p class="text-xs leading-3">
                    <?= $values[1] ?>
                  </p>
                </div>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- Slide navigation -->
      <div class="h-full flex flex-col justify-between items-start z-10 anim-slide anim-slide-up">
        <div class="flex flex-col gap-3 px-12" id="card-title-wrapper">
          <?php foreach($tabs as $tab): ?> 
            <?php 
              $parent = $tab['parent'];
            ?>
            <h4 class="text-2xl font bold text-arms-white" <?= $parent != '01' ? 'class="hidden"' : '' ?> data-tab-parent="<?= $parent ?>">
              <?= $tab['content-title']; ?>
              <!-- Oque é Branging? -->
            </h4>
            <div class="text-sm min-[1367px]:text-base text-arms-white" <?= $parent != '01' ? 'class="hidden"' : '' ?> data-tab-parent="<?= $parent ?>">
              <?= $tab['content-text']; ?>
              <!-- O estúdio acredita que branding<br>
              é um conjunto de processos que compõem<br>
              um sistema de gestão de marca.As vezes sua empresa precisa apenas<br>
              de alguma etapa desses processos, e, isso<br>
              conseguimos identificar em nosso diagnóstico de marca. -->
            </div>
          <?php endforeach; ?>
        </div>
        <div class="flex flex-col w-full" id="card-nagivation-wrapper">
          <a href="work" id="button-slide-prev" class="button bg-arms-purple text-arms-white h-28">
            <div>
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
              <?=$page_cta?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Mobile container -->

<div class="max-w-full pt-32 flex justify-end flex-col md:hidden">
  <div class="px-8 row-start-3 pb-8 pt-8">
    <h1 class="text-arms-white leading-none font-extrabold anim-slide anim-slide-down text-title mb-3">criamos</h1>
  </div>
  <div class="w-full">
    <div class="swiper">
      <div class="swiper-wrapper max-h-full">
        <!-- Slides -->
        <?php foreach($tabs as $tab): ?> 
          <?php 
            $parent = $tab['parent'];
          ?>h
          <div class="swiper-slide bg-white px-8 py-10 flex flex-col gap-8 relative">
            <h3 class="text-xl flex flex-row gap-4 items-center">
              <svg class="transition-transform rotate-90" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                <g clip-path="url(#clip0_218_172)">
                  <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
                </g>
                <defs>
                  <clipPath id="clip0_218_172">
                    <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                  </clipPath>
                </defs>
              </svg>
              <?= $tab['title']; ?>
            </h3>
            <div class="absolute top-9 right-8 opacity-50">
              <svg class="transition-transform" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                <g clip-path="url(#clip0_218_172)">
                  <path d="M18 6.97859L11.0085 -4.81197e-07L9.68815 1.32012L14.466 6.09044L-3.45819e-07 6.08858L-2.64187e-07 7.95611L14.438 7.95611L9.7068 12.6799L11.0271 14L18 7.04003" fill="currentColor"/>
                </g>
                <defs>
                  <clipPath id="clip0_218_172">
                    <rect width="14" height="18" fill="currentColor" transform="translate(0 14) rotate(-90)"/>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="flex flex-col gap-4">
              <?php foreach($tab['items'] as $item): ?>
                <?php 
                  $parent = $tab['parent'];
                  $values = array_values($item);
                ?>
                  <div --data-tab-parent="<?= $parent ?>">
                    <p class="text-arms-black text-base font-bold"><?= $values[0] ?></p>
                    <p class="text-xs leading-3">
                      <?= $values[1] ?>
                    </p>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="w-full bg-arms-blue">
    <div class="flex flex-col gap-3 p-12" id="card-title-wrapper">
      <h4 class="text-2xl font bold text-arms-white">
        Oque é Branging?
      </h4>
      <p class="text-base text-arms-white">
        O estúdio acredita que branding<br>
        é um conjunto de processos que compõem<br>
        um sistema de gestão de marca.As vezes sua empresa precisa apenas<br>
        de alguma etapa desses processos, e, isso<br>
        conseguimos identificar em nosso diagnóstico de marca.
      </p>
    </div>
    <div class="flex flex-col w-full" id="card-nagivation-wrapper">
      <a href="/work" id="button-slide-prev" class="button bg-arms-purple text-arms-white h-28">
        <div>
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
          <?=$page_cta?>
        </div>
      </a>
    </div>
  </div>
</div>
<script src="<?=get_template_directory_uri() . '/assets/js/tabs_criamos.js' ?>" type="module"></script>
<script src="<?=get_template_directory_uri() . '/assets/js/swiper_criamos.js' ?>" type="module"></script>
<script src="<?=get_template_directory_uri() . '/assets/js/auto_anim_slide.js' ?>" type="module"></script>

<?php get_footer(); ?>