<?php 
  global $page_indicator;
  $fields = get_fields($post->ID);
  $page_indicator = $post->post_title;
  $projectCateogryField = get_field_object('project_category');
  $category = $projectCateogryField['choices'][ $fields['project_category'] ];

  $background_image = end($fields['project_content'])['project_content_image']['url'];
  $background_style = "
    background: rgb(32 31 31) url(".$background_image.");
    background-size: 200%;
    background-blend-mode: overlay;
    background-attachment: fixed;
    background-position: center;
  ";

  $prev_post = get_adjacent_post(false, '', true);
  $prev_post = empty($prev_post) ? $post : $prev_post;
  $prev_post_fields = get_fields($prev_post->ID);
  $prev_post_category = $projectCateogryField['choices'][ $prev_post_fields['project_category'] ];

  $next_post = get_adjacent_post(false, '', false);
  $next_post = empty($next_post) ? $post : $next_post;
  $next_post_fields = get_fields($next_post->ID);
  $next_post_category = $projectCateogryField['choices'][ $next_post_fields['project_category'] ];

  global $home_section;
  $home_section = 'somos';
?>
<?php get_header('single-project'); ?>

<style>
  body {
    max-width: 100vw;
    overflow-x: hidden;
  }
</style>

    <div class="flex flex-col gap-2 items-center justify-center h-screen w-full bg-cover bg-center bg-fixed" style="<?= $background_style ?>">
      <h5 class="text-white text-xl"><?= $category ?></h5>
      <h1 class="text-white text-6xl"><?= $post->post_title; ?></h1>
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="9" height="32" viewBox="0 0 9 32" fill="none">
        <path d="M4.51376 32L9 27.1335L8.15135 26.2145L5.08591 29.5402L5.08592 -1.7109e-07L3.88536 -2.23568e-07L3.88536 29.5207L0.848649 26.2275L-1.32476e-06 27.1465L4.47426 32L4.49461 31.9792L4.51376 32Z" fill="#F5F5F5"/>
      </svg>
    </div>
    <div class="flex flex-col items-center justify-center w-full py-32 px-8 md:px-0 md:py-64 bg-white text-center">
        <div class="max-w-4xl">
          <?= $fields['project_description'] ?>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full bg-arms-black md:pt-40">
        <?php foreach($fields['project_content'] as $content): ?>
          <img src="<?= $content['project_content_image']['url'] ?>" class="md:w-[72%]" alt="">
        <?php endforeach; ?>
    </div>
    <!-- Footer -->
    <div class="flex flex-wrap md:grid bg-arms-white min-h-[14rem] single-work-footer">
        <a href="<?= $prev_post->guid ?>" class="bg-arms-gray flex items-center justify-center order-1 md:order-none w-1/2 md:w-auto py-4 md:py-0">
            <div class="flex flex-col items-end">
                <p class="text-xl"><?= $prev_post->post_title ?></p>
                <span><?= $prev_post_category ?></span>
                <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="53" height="16" viewBox="0 0 53 16" fill="none">
                    <path d="M6.74251e-07 7.75963L8.06008 15.4722L9.58223 14.0132L4.07411 8.74325L53 8.74325L53 6.67931L4.10636 6.6793L9.56072 1.45873L8.03858 -0.000228044L6.80188e-07 7.69172L0.0343978 7.72671L6.74251e-07 7.75963Z" fill="#201F1F"/>
                </svg>
            </div>
        </a>
        <div class="flex items-center justify-center  order-3 md:order-none w-full md:w-auto">
            <div class="flex justify-center items-center flex-col md:flex-row gap-11 py-8 md:py-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="261" height="47" viewBox="0 0 261 47" fill="none">
                  <g clip-path="url(#clip0_557_310)">
                  <path d="M57.4639 47L83.3691 0L109.279 47H57.4639Z" fill="#201F1F"/>
                  <path d="M154.548 22.5288C155.473 11.1039 149.791 0.0250089 132.91 0.0250089V0H109.274V47H154.548L145.398 37.2299C149.879 33.1117 154.02 29.052 154.548 22.5288Z" fill="#201F1F"/>
                  <path d="M158.476 0V47H173.313V35.3417L184.628 47L195.948 35.4334V47H210.781V0L184.628 5.95211L158.476 0Z" fill="#201F1F"/>
                  <path d="M261 0H215.73V18.9484L227.586 31.3361H215.73V47H261V20.0071L249.387 7.83194H261V0Z" fill="#201F1F"/>
                  <path d="M0 36.5546V39.8308L4.27986 46.6332H9.06224H13.0992L19.6488 35.1333V46.6332H29.9506C32.7396 46.6332 32.815 43.7447 32.815 43.7447V35.1291L39.0924 46.629H43.745H48.1295L52.4094 39.8266V36.5505L48.2593 36.5004C46.2869 36.2253 45.977 34.3955 45.9268 33.8245V20.9324L45.9184 16.4808C45.776 7.35678 35.893 0 26.4078 0C16.9226 0 6.67523 7.35678 6.53285 16.485L6.52448 20.5073L6.5161 23.4083V33.8203C6.46585 34.4247 6.10989 36.5046 3.66426 36.5046L0 36.5546ZM32.8527 26.1885C32.8527 24.4253 34.2891 22.9957 36.0605 22.9957C37.8319 22.9957 39.2683 24.4253 39.2683 26.1885C39.2683 27.9516 37.8319 29.3813 36.0605 29.3813C34.2891 29.3813 32.8527 27.9516 32.8527 26.1885ZM13.2374 26.3427C13.2374 24.5795 14.6738 23.1499 16.4452 23.1499C18.2166 23.1499 19.653 24.5795 19.653 26.3427C19.653 28.1058 18.2166 29.5355 16.4452 29.5355C14.6738 29.5355 13.2374 28.1058 13.2374 26.3427Z" fill="#201F1F"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_557_310">
                  <rect width="261" height="47" fill="white"/>
                  </clipPath>
                  </defs>
                </svg>
                <div class="w-0 border-r border-r-arms-black hidden md:block" style="height:76px;"></div>
                <div>
                    <span class="block mb-2">connect with us</span>
                    <div class="flex flex-row gap-4 items-center relative md:pr-12 text-arms-black">
                      <a
                        class="cursor-pointer hover:opacity-75 transition-opacity pointer-events-auto"
                        href=""
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="21"
                          viewBox="0 0 22 21"
                          fill="currentColor"
                        >
                          <path
                            d="M11.0062 0C4.92835 0 0 4.70233 0 10.5015C0 12.4752 0.582555 14.4072 1.68224 16.0807L1.94393 16.476L0.82866 20.349L5.01558 19.3117L5.41745 19.5346C7.10592 20.4917 9.03427 21 11 21C17.0748 21 22 16.3006 22 10.5045C22 7.72229 20.8411 5.05308 18.7788 3.08238C16.7259 1.10276 13.9252 -0.0059448 11.0062 0.0029724V0ZM17.5483 15.0641C17.2679 15.7983 15.9502 16.4701 15.3146 16.5622C14.6199 16.6752 13.9065 16.6335 13.2336 16.4403C12.5919 16.2501 11.9626 16.0272 11.3458 15.7745C8.02804 14.4042 5.8567 11.2238 5.6947 11.0127C5.53271 10.7987 4.34891 9.30361 4.34891 7.74607C4.33022 6.75329 4.75078 5.79915 5.50467 5.1155C5.72897 4.87176 6.04673 4.72909 6.38629 4.72017H7.01869C7.20872 4.72017 7.49221 4.62505 7.76636 5.25223C8.0405 5.87941 8.69782 7.43694 8.78193 7.59151C8.87227 7.75796 8.87227 7.95711 8.78193 8.12357C8.69782 8.3138 8.58567 8.49512 8.45171 8.65563C8.28349 8.82208 8.10592 9.04501 7.95327 9.18769C7.94704 9.18769 7.94392 9.19363 7.93769 9.1966C7.71651 9.3363 7.66044 9.62165 7.80685 9.8327C8.3053 10.6412 8.92835 11.3783 9.64797 12.0174C10.433 12.6832 11.3302 13.2123 12.3053 13.5839C12.6355 13.7384 12.8255 13.7176 13.0187 13.5036C13.215 13.2896 13.8505 12.5881 14.0685 12.2671C14.2866 11.9461 14.5389 11.9996 14.81 12.1066C15.0841 12.2136 16.7134 12.9805 17.0436 13.135C17.3738 13.2896 17.5919 13.3699 17.676 13.5036C17.8006 14.0238 17.7539 14.5707 17.5421 15.0641H17.5483Z"
                            fill="currentColor"
                          />
                        </svg>
                      </a>
                      <a
                        class="cursor-pointer hover:opacity-75 transition-opacity pointer-events-auto"
                        href=""
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="23"
                          viewBox="0 0 24 23"
                          fill="currentColor"
                        >
                          <path
                            d="M11.7915 2.13728C14.9101 2.13728 15.2842 2.13728 16.517 2.2034C17.2591 2.20941 17.992 2.34466 18.6881 2.59713C19.7031 2.98484 20.5096 3.7723 20.9021 4.76714C21.1628 5.44639 21.2977 6.16773 21.3038 6.89507C21.3621 8.10331 21.3713 8.46998 21.3713 11.5266C21.3713 14.5833 21.3713 14.95 21.3038 16.1582C21.2977 16.8855 21.1597 17.6039 20.9021 18.2861C20.5065 19.281 19.7031 20.0714 18.6881 20.4561C17.9951 20.7116 17.2591 20.8439 16.517 20.8499C15.2842 20.907 14.9163 20.916 11.7915 20.916C8.66669 20.916 8.29871 20.916 7.06597 20.8499C6.32387 20.8439 5.59097 20.7086 4.89487 20.4561C3.88598 20.0624 3.09175 19.275 2.70537 18.2801C2.44472 17.6009 2.30979 16.8795 2.30366 16.1522C2.24539 14.944 2.23619 14.5773 2.23619 11.5206C2.23619 8.46397 2.23619 8.09729 2.30366 6.88906C2.30979 6.16172 2.44778 5.44339 2.70537 4.76113C3.10095 3.77831 3.89211 2.99987 4.89487 2.61516C5.5879 2.35969 6.32387 2.22744 7.06597 2.22143C8.29871 2.16433 8.67282 2.15531 11.7915 2.15531M11.7915 0.0904935C8.61763 0.0904935 8.22204 0.0904935 6.97397 0.156616C6.00495 0.177655 5.04513 0.357988 4.13437 0.691605C2.55205 1.2837 1.30091 2.50997 0.6968 4.06083C0.356417 4.95048 0.172426 5.89122 0.15096 6.84398C0.0957626 8.06724 0.0834961 8.45796 0.0834961 11.5657C0.0834961 14.6735 0.0834965 15.0642 0.15096 16.2874C0.190825 17.2252 0.390148 18.1509 0.739732 19.0255C1.34384 20.5764 2.59498 21.8026 4.1773 22.3947C5.08499 22.7283 6.04481 22.9087 7.0169 22.9297C8.26497 22.9838 8.66362 22.9958 11.8344 22.9958C15.0052 22.9958 15.4038 22.9958 16.6519 22.9297C17.6209 22.9087 18.5808 22.7283 19.4915 22.3947C21.0738 21.8026 22.325 20.5764 22.9291 19.0255C23.2695 18.1359 23.4535 17.1951 23.4749 16.2424C23.5301 15.0191 23.5424 14.6284 23.5424 11.5206C23.5424 8.41288 23.5424 8.02216 23.4749 6.79889C23.4535 5.84914 23.2695 4.9084 22.9291 4.01575C22.325 2.46488 21.0738 1.23862 19.4915 0.646521C18.5838 0.312905 17.624 0.132571 16.6519 0.111532C15.4038 0.0574324 15.0052 0.0454102 11.8344 0.0454102L11.7915 0.0874879V0.0904935Z"
                            fill="currentColor"
                          />
                          <path
                            d="M11.7915 5.64185C8.47656 5.64185 5.79028 8.27471 5.79028 11.5237C5.79028 14.7727 8.47656 17.4056 11.7915 17.4056C15.1064 17.4056 17.7926 14.7727 17.7926 11.5237C17.7926 8.27471 15.1064 5.64185 11.7915 5.64185ZM11.7915 15.3408C9.64184 15.3408 7.89699 13.6306 7.89699 11.5237C7.89699 9.41682 9.64184 7.70666 11.7915 7.70666C13.9411 7.70666 15.686 9.41682 15.686 11.5237C15.686 13.6306 13.9411 15.3408 11.7915 15.3408Z"
                            fill="currentColor"
                          />
                          <path
                            d="M18.0288 6.78678C18.8045 6.78678 19.4333 6.17048 19.4333 5.41024C19.4333 4.64999 18.8045 4.03369 18.0288 4.03369C17.2531 4.03369 16.6243 4.64999 16.6243 5.41024C16.6243 6.17048 17.2531 6.78678 18.0288 6.78678Z"
                            fill="currentColor"
                          />
                        </svg>
                      </a>
                      <a
                        class="cursor-pointer hover:opacity-75 transition-opacity pointer-events-auto"
                        href=""
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="15"
                          viewBox="0 0 24 15"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.83838 8.34119H2.9968V12.3512H6.77909C8.07444 12.3512 9.10895 11.9387 9.10895 10.4154C9.10895 8.89216 8.22266 8.34119 6.83838 8.34119ZM6.33447 2.4779H2.9968V5.90748H6.59828C7.73653 5.90748 8.61393 5.4066 8.61393 4.16323C8.59318 2.76075 7.51421 2.4779 6.34336 2.4779H6.33447ZM12.4614 10.4979C12.4614 13.4767 9.88853 14.7496 7.21187 14.7496H0V0H7.0103C9.83813 0 11.7649 1.00177 11.7649 3.73011C11.7915 5.06482 10.9912 6.28167 9.74921 6.78845C11.5544 7.30112 12.4733 8.67413 12.4733 10.4979H12.4644H12.4614ZM15.9918 0.975251H21.9735V2.94932H16.0036L15.9947 0.975251H15.9918ZM18.6655 6.02829C16.7892 6.02829 16.2437 7.0713 16.2052 7.88156H21.025C20.7641 6.42899 20.1179 6.04596 18.6744 6.04596L18.6655 6.02534V6.02829ZM16.2052 9.7967C16.2852 11.6411 17.213 12.8049 18.8463 12.8049C19.9134 12.7725 20.8679 12.145 21.3184 11.1815H23.921C23.094 13.6889 21.188 15 18.7485 15C15.3486 15 13.2025 12.7048 13.2025 9.41662C13.2025 6.12846 15.4731 3.81261 18.7485 3.81261C22.4211 3.81261 24.1937 6.50854 23.9832 9.77608L16.2082 9.7967H16.2052Z"
                            fill="currentColor"
                          />
                        </svg>
                      </a>
                      <a
                        class="cursor-pointer hover:opacity-75 transition-opacity pointer-events-auto"
                        href=""
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          height="17"
                          viewBox="0 0 20 17"
                          fill="currentColor"
                        >
                          <path
                            d="M0.43562 7.73772L18.3362 0.0969344C19.2004 -0.271035 20.1287 0.461812 19.9852 1.39874L17.808 15.6753C17.6339 16.8071 16.3575 17.373 15.42 16.7298L9.00727 12.3389C8.50342 11.9926 8.44234 11.2659 8.88207 10.8392L14.968 4.93002C15.1268 4.77541 15.1177 4.51566 14.9497 4.37342C14.8245 4.26829 14.6444 4.25901 14.51 4.35178L6.44829 9.84658C5.72152 10.3413 4.80847 10.4774 3.97177 10.2084L0.505848 9.10446C-0.135423 8.90038 -0.178172 7.99746 0.441724 7.73462L0.43562 7.73772Z"
                            fill="currentColor"
                          />
                        </svg>
                      </a>
                      <div
                        class="swiper-pagination z-40 right-36 hidden sm:block pointer-events-auto"
                      ></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= $next_post->guid ?>" class="bg-arms-gray flex items-center justify-center  order-2 md:order-none  w-1/2 md:w-auto py-4 md:py-0">
            <div class="flex flex-col items-start">
                <p class="text-xl"><?= $next_post->post_title ?></p>
                <span><?= $next_post_category ?></span>
                <svg class="mt-5 rotate-180" xmlns="http://www.w3.org/2000/svg" width="53" height="16" viewBox="0 0 53 16" fill="none">
                    <path d="M6.74251e-07 7.75963L8.06008 15.4722L9.58223 14.0132L4.07411 8.74325L53 8.74325L53 6.67931L4.10636 6.6793L9.56072 1.45873L8.03858 -0.000228044L6.80188e-07 7.69172L0.0343978 7.72671L6.74251e-07 7.75963Z" fill="#201F1F"/>
                </svg>
            </div>
        </a>
    </div>
  <script src="<?=get_template_directory_uri() . '/assets/js/swiper_cases.js.js' ?>" type="module"></script>
  <script src="<?=get_template_directory_uri() . '/assets/js/list_work.js.js' ?>" type="module"></script>

<?php get_footer(); ?>