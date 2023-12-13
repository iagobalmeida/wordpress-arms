<?php acf_form_head(); ?>
<?php get_header('home'); ?>
<?php

function get_slide_options($slide_number) {
  return array(
    'title'=>get_field('options-content-home-slide-'.$slide_number.'-title', 'option'),
    'cta'=>get_field('options-content-home-slide-'.$slide_number.'-cta', 'option'),
    'description'=>get_field('options-content-home-slide-'.$slide_number.'-description', 'option')
  );
}

$slides = array(
  get_slide_options('01'),
  get_slide_options('02'),
  get_slide_options('03'),
  get_slide_options('04')
);

$address = str_replace('/', '<br>', get_field('options-contact-info-address', 'option'));
$email = get_field('options-contact-info-email', 'option');
$phone = get_field('options-contact-info-phone', 'option');

$show_contact_form =  $_GET['contact'] != 'success';

?>
    <!-- Slider main container -->
    <main class="swiper light w-full h-full">
      <!-- Swiper -->
      <div class="swiper-wrapper">
        <!-- Screen 01 - Somos -->
        <div data-hash="somos" class="swiper-slide grid h-screen w-screen md:grid-rows-2 md:grid-cols-2 bg-arms-black light">
            <!-- Image -->
            <img src="<?=get_template_directory_uri() . '/assets/imgs/home_01.png'?>" alt="" class="hidden md:block home-img">
            <!-- Content Mobile -->
            <div class="flex justify-end flex-col md:hidden">
              <div class="px-8 pb-8">
                <h5 class="text-arms-white leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $slides[0]['title'] ?></h5>
                <div class="text-arms-white font-light text-xl flex flex-col gap-5">
                  <?= $slides[0]['description'] ?>
                </div>
              </div>
              <a href="/criamos" class="text-black bg-white flex justify-center items-center gap-4 text-lg anim-slide anim-slide-up py-6">
                  <?= $slides[0]['cta'] ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                    <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                  </svg>
              </a>
            </div>
            <!-- Content Desktop -->
            <div class="bg-arms-blue row-start-2 col-start-1 anim-slide hidden md:block"></div>
            <div class="row-start-2 col-start-2 grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 grid-rows-4 hidden md:grid">
                <div class="col-span-5 row-span-3 px-28">
                    <h5 class="text-arms-white leading-none font-extrabold anim-slide anim-slide-down text-title"><?= $slides[0]['title'] ?></h5>
                    <div class="text-arms-white font-light text-xl flex flex-col gap-5">
                      <?= $slides[0]['description'] ?>
                    </div>
                </div>
                <a href="/criamos" class="col-span-4 xl:col-span-5 2xl:col-span-6 text-black bg-white flex pl-28 items-center gap-4 text-lg anim-slide anim-slide-up">
                    <?= $slides[0]['cta'] ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                      <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Screen 02 - Capicce -->
        <div data-hash="capricho" class="swiper-slide grid h-screen w-screen md:grid-rows-3 md:grid-cols-9 bg-arms-white">
            <!-- Header -->
            <div class="col-span-9 hidden md:block"></div>
            <!-- Image -->
            <img src="<?=get_template_directory_uri() . '/assets/imgs/home_02.png'?>" alt="" class="home-img right-0 hidden md:block">
            <!-- Content mobile -->
            <div class="flex justify-end flex-col md:hidden">
              <div class="px-8 pb-8">
                <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $slides[1]['title'] ?></h5>
                <div class="font-light text-xl flex flex-col gap-5">
                  <?= $slides[1]['description'] ?>
                </div>
              </div>
              <a href="/work" class="bg-arms-black text-arms-white flex justify-center items-center gap-4 text-lg anim-slide anim-slide-up py-6">
                <?= $slides[1]['cta'] ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                  <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                </svg>
              </a>
            </div>
            <!-- Content -->
            <div class="col-start-2 col-span-5 grid-rows-2 grid-cols-5 hidden md:grid">
                <h5 class="col-span-3 leading-none font-extrabold anim-slide anim-slide-down text-title"><?= $slides[1]['title'] ?></h5>
                <div class="row-start-2 col-span-3 font-light text-xl flex flex-col gap-5">
                  <?= $slides[1]['description'] ?>
                </div>
            </div>
            <div class="col-span-3 bg-arms-yellow anim-slide anim-slide-up hidden md:block"></div>

            <div class="bg-arms-gray grid-rows-3 col-span-6 grid-cols-2 hidden md:grid">
              <a href="/work" class="row-span-1 bg-arms-black text-white anim-slide anim-slide-up grid grid-cols-3">
                <div class="col-start-2 col-span-2 flex items-center gap-4 text-lg">
                  <?= $slides[1]['cta'] ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                    <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                  </svg>
                </div>
              </a>
            </div>
            <div class="col-span-3 bg-arms-yellow hidden md:block"></div>
        </div>
        <!-- Screen 03 - Método -->
        <div data-hash="metodo" class="swiper-slide grid h-screen w-screen md:grid-rows-3 md:grid-cols-9 bg-arms-yellow">
            <!-- Header -->
            <div class="col-span-9"></div>
            <!-- Image -->
            <img src="<?=get_template_directory_uri() . '/assets/imgs/home_03.png'?>" alt="" class="hidden md:block home-img">
            <!-- Content mobile -->
            <div class="flex justify-end flex-col md:hidden mobile">
              <div class="px-8 pb-8">
                <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $slides[2]['title'] ?></h5>
                <div class="font-light text-xl flex flex-col gap-5">
                  <?= $slides[2]['description'] ?>
                </div>
              </div>
              <a href="/fluxo" class="bg-arms-black text-arms-white flex justify-center items-center gap-4 text-lg anim-slide anim-slide-up py-6">
                  <?= $slides[2]['cta'] ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                    <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                  </svg>
              </a>
            </div>
            <!-- Content -->
            <div class="hidden md:block col-span-3 bg-arms-white"></div>
            <div class="hidden md:grid col-span-6 grid-cols-4 grid-rows-2 ps-11">
                <h5 class="col-start-2 col-span-2 leading-none font-extrabold anim-slide anim-slide-down text-title"><?= $slides[2]['title'] ?></h5>
                <div class="col-start-2 col-span-2 font-light text-xl flex flex-col gap-5">
                  <?= $slides[2]['description'] ?>
                </div>
            </div>

            <!-- Footer -->
            <div class="hidden md:grid col-span-6 bg-white grid-cols-4 grid-rows-3">
                <a href="/fluxo" class="col-start-4 bg-arms-black flex items-center ps-11 text-arms-white gap-4 text-lg">
                    <?= $slides[2]['cta'] ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                      <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
            <div class="hidden md:grid col-span-3 bg-arms-yellow grid-rows-3">
                <div class="bg-arms-black"></div>
            </div>
        </div>
        <!-- Screen 04 - Conte -->
        <div data-hash="conta" class="swiper-slide grid h-screen w-screen md:grid-rows-2 md:grid-cols-2 bg-arms-black">
          <!-- Image -->
          <img src="<?=get_template_directory_uri() . '/assets/imgs/home_04.png'?>" alt="" class="hidden md:block home-img">
          <!-- Content Mobile -->
            <div class="flex justify-end flex-col md:hidden mobile">
              <div class="px-8 pb-8">
                <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-title mb-3"><?= $slides[3]['title'] ?></h5>
                <div class="font-light text-xl text-arms-white flex flex-col gap-5">
                  <?= $slides[3]['description'] ?>
                </div>
              </div>
              <div class="col-span-2 flex flex-col gap-9 px-10 pb-8">
                <?php if($show_contact_form): ?>
                  <?php acf_form('new-contact'); ?>
                <?php else: ?>
                  <p class="text-base">Obrigado! Logo entraremos em contato com você!</p>
                <?php endif; ?>
                <!-- <input class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="nome" id="input-nome" placeholder="nome:">
                <div class="flex flex-col md:flex-row gap-9 justify-stretch md:items-center">
                  <input class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="numero" id="input-numero" placeholder="número:">
                  <input class="w-full bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="email" id="input-email" placeholder="e-mail:">
                </div>
                <textarea class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" name="mensagem" id="input-mensagem" placeholder="conta tudo:"></textarea> -->
              </div>
              <?php if($show_contact_form): ?>
                <div onclick="handle_mobile_contact_form_submit()" class="bg-arms-blue text-arms-white flex justify-center items-center gap-4 text-lg anim-slide anim-slide-up py-6">
                    <?= $slides[3]['cta'] ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                      <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                    </svg>
                </div>
              <?php endif; ?>
            </div>
          <!-- Content Desktop -->
          <div class="col-start-2 hidden md:flex flex-col justify-end ps-11 pb-11">
              <h5 class="leading-none font-extrabold anim-slide anim-slide-down text-title text-arms-white"><?= $slides[3]['title'] ?></h5>
              <div class="font-light text-xl text-arms-white flex flex-col gap-5">
                <?= $slides[3]['description'] ?>
              </div>
          </div>
          <div class="row-start-2 bg-arms-yellow hidden md:grid grid-rows-2 grid-cols-2 anim-slide anim-slide-up">
              <div class="col-start-2 row-start-2 bg-arms-white"></div>
          </div>
          <div class="row-start-2 hidden md:grid grid-rows-2 grid-cols-3 desktop">
            <div class="col-span-2 flex flex-col gap-9 px-10">
              <?php if($show_contact_form): ?>
                <?php acf_form('new-contact'); ?>
              <?php else: ?>
                <p class="text-base">Obrigado! Logo entraremos em contato com você!</p>
              <?php endif; ?>
              <!-- <input class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="nome" id="input-nome" placeholder="NOME:">
              <div class="flex flex-row gap-9 justify-stretch items-center">
                <input class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="numero" id="input-numero" placeholder="NÚMERO:">
                <input class="w-full bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" type="text" name="email" id="input-email" placeholder="E-MAIL:">
              </div>
              <textarea class="bg-transparent border-b-2 border-b-arms-black-600 text-arms-black-600" name="mensagem" id="input-mensagem" placeholder="CONTA TUDO:"></textarea> -->
            </div>
            <div class="grid grid-rows-5 col-span-3">
                <?php if($show_contact_form): ?>
                  <div onclick="handle_desktop_contact_form_submit()" class="row-span-2 text-arms-white bg-arms-blue flex pl-10 items-center gap-4 text-lg anim-slide anim-slide-up cursor-pointer">
                        <?= $slides[3]['cta'] ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="9" viewBox="0 0 32 9" fill="currentColor">
                        <path d="M32 4.48623L27.1335 0L26.2145 0.84865L29.5402 3.91408H0V5.11464H29.5207L26.2275 8.15135L27.1465 9L32 4.52573L31.9792 4.50539L32 4.48623Z" fill="currentColor"/>
                      </svg>
                  </div>
                <?php endif; ?>
                <div class="bg-arms-white row-span-<?=$show_contact_form ? '3' : '5'?> grid grid-cols-3">
                    <div class="flex flex-col items-start justify-center text-arms-black">
                        <b>OFFICE</b>
                        <p>
                          <?= $address ?>
                        </p>
                    </div>
                    <div class="flex flex-col items-start justify-center text-arms-black">
                        <b>CONTACT</b>
                        <p>
                            <?= $email ?>
                            <br>
                            <?= $phone ?>
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<script>
  function handle_mobile_contact_form_submit() {
    const form = document.querySelector('.mobile input[type="submit"]').click();
  }
  function handle_desktop_contact_form_submit() {
    const form = document.querySelector('.desktop input[type="submit"]').click();
  }
</script>
<script src="<?=get_template_directory_uri() . '/assets/js/home_form.js'?>" type="module"></script>
<script src="<?=get_template_directory_uri() . '/assets/js/swiper_home.js'?>" type="module"></script>
<?php get_footer(); ?>
