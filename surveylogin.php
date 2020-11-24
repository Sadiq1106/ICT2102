<?php session_start();?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>ezTravel - Login</title>
      <!--favicon-->
      <link rel="shortcut icon" type="image/x-icon" href="img/sitang-sleeping.png">
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Font-->
      <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
      <!-- Css -->
      <link rel="stylesheet" href="css/loginstyle.css"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/gijgo.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" type="text/css" href="css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="css/style.css">
      <!--JS-->
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
      <!--SCSS-->
      <link rel="stylesheet" href="scss/login.scss"/>
   </head>
   <body class="form-v8">
      <header>
      <?php
         include "./navbar.php";
         ?>
      </header>
      <div class="page-content">
         <div class="form-v8-content">
            <!--window animation START-->
            <div class="form-left">
               <div class="box">
                  <svg id="lettravel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                     <defs>
                        <clipPath id="clip-path">
                           <rect id="n-mask" x="281.5" y="134.5" width="237" height="321" rx="115.4" fill="none" />
                        </clipPath>
                        <clipPath id="clip-path-4">
                           <rect x="281.5" y="134.5" width="237" height="321" rx="115.4" fill="none" stroke="#e5e5e6" stroke-miterlimit="10" stroke-width="16" />
                        </clipPath>
                     </defs>
                     <path id="bg" fill="white" d="M0 0h800v600H0z" />
                     <rect id="window-back" x="262.3" y="108.5" width="275.39" height="373" rx="137.7" fill="#f2f2f2" />
                     <g id="night">
                        <g clip-path="url(#clip-path)">
                           <rect x="281.5" y="134.5" width="237" height="321" rx="115.4" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="15" />
                           <path fill="#143e70" d="M216.68 129.03h344.21v243.82H216.68z" />
                           <g id="n-moon" fill="#fff">
                              <path d="M394.56 241a24.5 24.5 0 005.18-15.15A24.78 24.78 0 00375 201.06c-.6 0-1.24 0-2 .09l-6 .47 3.67-4.74a30.06 30.06 0 0153.83 18.4 30.19 30.19 0 01-27.69 30l-6 .46z" opacity=".5" />
                              <path d="M394.49 187.87a27.34 27.34 0 00-21.67 10.64c.71-.06 1.44-.1 2.17-.1a27.4 27.4 0 0121.66 44.18 27.4 27.4 0 00-2.16-54.72z" />
                           </g>
                           <g id="n-city">
                              <path d="M262.3 328.45l65.17-16.71 16.71-7.16s9.55 1.59 8.75 5.57 11.93 6.36 11.93 6.36 19.08-5.57 19.48-5.57 15.66-3.18 15.66-3.18l6.23 4 17.5 4.77s1.64 4.78 4 4.78 31.8-4.78 31.8-4.78l27.58-9.28 5.83 7 53.3-6.46 20.69-12.15L599.54 312l-53.3 173.14-283.94 20.71-74.05-118.54s-7.16-24.66-6.36-27-3.18-18.3 4-22.28 16.7-11.93 16.7-11.93 3.19-8.75 4.78-4l1.59 4.77h11.93c3.18 0 10.34-2.38 10.34-2.38l8.75 4 4 2.38z" fill="#0a3160" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M219.53 364.52l367.06-7.73 58.15 384.2-686.36-126.74 261.15-249.73z" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M-23.63 597.05l663.42 111.22" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M-15.05 588.85l652.54 104.2" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M-6.73 580.89l642.02 97.64" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M1.35 573.16l631.84 91.5" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M9.2 565.66l621.98 85.73" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M16.81 558.37l612.45 80.32" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M24.22 551.29l603.2 75.23" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M31.42 544.41l594.23 70.44" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M38.42 537.71l585.53 65.93" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M45.23 531.2l577.1 61.68" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M51.86 524.86l568.9 57.68" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M58.31 518.69l560.94 53.89" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M64.6 512.68L617.8 563" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M70.72 506.82l545.68 46.95" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M76.69 501.11l538.37 43.75" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M82.51 495.55l531.25 40.72" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M88.19 490.12l524.31 37.86" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M93.72 484.83l517.57 35.14" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M99.13 479.66l510.99 32.57" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M104.4 474.62l504.58 30.12" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M109.55 469.69l498.34 27.8" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M114.58 464.88l492.25 25.6" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M119.49 460.18l486.31 23.5" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M124.29 455.59L604.8 477.1" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M128.99 451.1l474.84 19.61" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M133.58 446.71l469.32 17.81" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M138.07 442.42l463.92 16.09" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M142.46 438.22l458.64 14.45" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M146.75 434.11L600.24 447" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M150.96 430.09l448.45 11.4" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M155.07 426.16l443.53 9.98" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M159.1 422.3l438.71 8.63" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M163.05 418.53l433.99 7.33" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M166.91 414.83l429.39 6.1" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M170.7 411.21l424.87 4.91" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M174.41 407.66l420.45 3.79" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M178.05 404.18l416.12 2.71" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M181.62 400.77l411.88 1.68" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M185.11 397.43l407.74.69" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M188.54 394.15l403.67-.25" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M191.91 390.93l399.67-1.15" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M195.21 387.77l395.77-2.01" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M198.45 384.68l391.93-2.85" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M201.63 381.64L589.8 378" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M204.75 378.65l384.49-4.39" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M207.81 375.72l380.87-5.11" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M210.82 372.85l377.32-5.82" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M213.77 370.02l373.84-6.48" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M216.68 367.25l370.42-7.12" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M577.61 356.98l46.13 380.14" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M568.73 357.16l34.48 376.16" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M559.92 357.35l23.2 372.26" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M551.21 357.53l12.26 368.46" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M542.58 357.71l1.66 364.73" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M534.03 357.89l-8.61 361.07" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M525.56 358.07L507 715.56" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M517.18 358.25l-28.22 353.98" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M508.87 358.42l-37.58 350.54" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M500.65 358.6l-46.67 347.17" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M492.5 358.77l-55.48 343.86" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M484.43 358.94l-64.04 340.62" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M476.43 359.11L404.1 696.56" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M468.51 359.27l-80.39 334.34" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M460.66 359.44l-88.2 331.27" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M452.88 359.6l-95.79 328.28" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M445.17 359.77L342.02 685.09" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M437.54 359.93L327.23 682.36" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M429.97 360.09L312.72 679.68" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M422.47 360.24l-124 316.81" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M415.04 360.4L284.49 674.47" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M407.68 360.56L270.76 671.93" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M400.38 360.71L257.27 669.44" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M393.15 360.86L244.03 667" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M385.98 361.01L231.02 664.59" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M378.87 361.16L218.24 662.23" />
                              <path fill="#0a3160" d="M371.83 361.31L205.68 659.92" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M364.85 361.46L193.34 657.64" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M357.92 361.6L181.2 655.4" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M351.06 361.75L169.28 653.19" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M344.26 361.89L157.55 651.03" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M337.51 362.03L146.02 648.9" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M330.83 362.17L134.68 646.8" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M324.2 362.31L123.52 644.74" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M317.62 362.45L112.54 642.72" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M101.75 640.72L311.1 362.59" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M304.64 362.73L91.12 638.76" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M298.23 362.86L80.66 636.83" />
                              <path fill="#0a3160" d="M291.87 363L70.37 634.93" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M285.57 363.13L60.24 633.06" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M279.32 363.26L50.26 631.21" />
                              <path fill="#0a3160" d="M40.44 629.4l232.68-266.01" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M266.97 363.52L30.76 627.61" />
                              <path fill="#0a3160" d="M260.87 363.65L21.24 625.86" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M254.82 363.78L11.85 624.12" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M248.82 363.9L2.61 622.42" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M242.87 364.03L-6.5 620.73" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M236.96 364.15L-15.47 619.08" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M231.1 364.28L-24.31 617.44" />
                              <path fill="none" stroke="#fbb03b" stroke-miterlimit="10" d="M225.29 364.4L-33.03 615.83" />
                              <path d="M169.05 387.77s58.88-30.92 65.83-32.12 17.62 0 17.62 0l21.8-.53s20.65-4.05 34.2-4.05 6.84 14.13 19 9.36 26.07-10.74 26.07-10.74l41.09-11.93s31.19-7.16 38.22-7.16h126.39s26-4.24 25.14 0 4.26 9.55 11.42 15.51 15.91-4.77 7.16 6 0 12.8-12.85 13.12-8.88 3.58-20.69-1.19-3.36 14.53-18.77 9.55-18.61-6.17-28.15-3.78 0 4-16.7 3.78-6-3.37-26.06 0-31.37-3.9-41.29.87-34.85-9.23-34.85-9.23-13.76-1.19-19.37 0-12.77 0-15.95 1.19-12.34 2.39-14.52 2.39S342 370 338.84 370h-11.33c-4.55 0-.1-1.19-8.69 0s-10.14 1.19-14.53 1.19a79.89 79.89 0 01-15.13-1.19c-7.56-1.19-7-2.39-14.86-3.58a92.84 92.84 0 00-12.59-1.19h-9.21c-6.7 0-7.86-4.77-17.62 0s-8.25 6.37-17.76 12.73-3.09 5.51-15.76 12.71-11.46 4.3-18.52 4.34 1.7 0-7.05 0-6.74-7.24-6.74-7.24z" fill="#0a3160" />
                              <path d="M279.71 404.91c7.74.87 28.52-5.11 42.53 0s28.84-.86 32.56-3.71 10.91-2 10-7.2 1.16-10.11-10-10.3-23.05 3.37-23.05 3.37-17.27-.69-24.95 0-27.12 1.81-32.78 5-6.07.5-11.7 5.54-14.86 8.35-6 9.34a90 90 0 0017.7 0" fill="#0a3160" />
                              <path d="M411.56 446.68c4.05.46 14.95-2.68 22.29 0s15.12-.45 17.07-1.94 5.73-1.06 5.23-3.78.61-5.3-5.23-5.4a46.28 46.28 0 00-12.08 1.77s-9.06-.36-13.08 0-14.22.95-17.19 2.6-3.18.26-6.13 2.9-7.8 4.38-3.15 4.9a47.57 47.57 0 009.28 0" fill="#0a3160" />
                              <g id="hello" fill="#fff">
                                 <path d="M310.83 353.22h-3.59v3.57h-1.68v-8.37h1.68v3.44h3.59v-3.44h1.68v8.37h-1.68z" />
                                 <path d="M317.07 356.9a3.22 3.22 0 01-3.33-3.44 3.18 3.18 0 013.33-3.42 3.11 3.11 0 013.27 3.28 4.73 4.73 0 010 .65h-4.86a1.55 1.55 0 001.52 1.53 1.36 1.36 0 001.33-.8h1.82a3.1 3.1 0 01-3.08 2.2zm-1.62-4.06h3.15a1.48 1.48 0 00-1.58-1.43 1.55 1.55 0 00-1.57 1.43z" />
                                 <path d="M321.57 347.91h1.68v8.88h-1.68z" />
                                 <path d="M324.91 347.91h1.68v8.88h-1.68z" />
                                 <path d="M331.19 356.9a3.43 3.43 0 113.47-3.44 3.33 3.33 0 01-3.47 3.44zm0-1.47a1.77 1.77 0 001.74-2 1.74 1.74 0 00-1.71-2 1.72 1.72 0 00-1.69 2c0 1.35.76 2 1.66 2z" />
                                 <path d="M338.19 348.42H340l1.47 6.5 1.71-6.5H345l1.61 6.46 1.48-6.46h1.81l-2.33 8.37h-2l-1.57-6-1.65 6h-2z" />
                                 <path d="M354 356.9a3.43 3.43 0 113.47-3.44 3.33 3.33 0 01-3.47 3.44zm0-1.47a1.77 1.77 0 001.74-2 1.74 1.74 0 00-1.71-2 1.72 1.72 0 00-1.69 2c-.01 1.35.75 2 1.66 2z" />
                                 <path d="M360.38 356.79h-1.68v-6.65h1.68v1a2.3 2.3 0 012-1.12v1.76H362c-1 0-1.59.38-1.59 1.67z" />
                                 <path d="M363.55 347.91h1.67v8.88h-1.67z" />
                                 <path d="M369.5 350a2.72 2.72 0 012.17 1v-3.16h1.7v8.88h-1.7v-1a2.51 2.51 0 01-2.19 1.1 3.15 3.15 0 01-3-3.46 3.11 3.11 0 013.02-3.36zm.42 1.47a1.77 1.77 0 00-1.75 1.93 1.82 1.82 0 001.75 2 2 2 0 000-3.91z" />
                              </g>
                              <path id="n-l4" fill="#fff" d="M373.5 336.93l-3.47 3.71 8.84 11.94-5.37-15.65z" />
                              <path id="n-l3" fill="#fff" d="M298.23 358.6l6.41-14.78h-4.48l-1.93 14.78z" />
                              <path id="n-l2" fill="#fff" d="M372.49 404.18l11.93 52.77-3.76-52.77h-8.17z" />
                              <path id="n-l1" fill="#fff" d="M287.9 411.96l3.18 36.27 4.77-36.27h-7.95z" />
                           </g>
                           <g id="n-stars" fill="#fff">
                              <path class="n-star" d="M490.75 226.67c-3.49 0-6.32 3.89-6.32 8.68 0-4.79-2.84-8.68-6.33-8.68 3.49 0 6.33-3.89 6.33-8.69 0 4.8 2.83 8.69 6.32 8.69z" />
                              <path class="n-star" d="M309.64 259.63c-3.49 0-6.32 3.89-6.32 8.68 0-4.79-2.83-8.68-6.32-8.68 3.49 0 6.32-3.89 6.32-8.69 0 4.8 2.83 8.69 6.32 8.69z" />
                              <path class="n-star" d="M337.15 176.53c-3.49 0-6.32 3.89-6.32 8.69 0-4.8-2.83-8.69-6.33-8.69 3.5 0 6.33-3.88 6.33-8.68 0 4.8 2.83 8.68 6.32 8.68z" />
                              <path class="n-star" d="M471.08 274.15c-3.49 0-6.32 3.89-6.32 8.69 0-4.8-2.83-8.69-6.32-8.69 3.49 0 6.32-3.89 6.32-8.68 0 4.79 2.83 8.68 6.32 8.68z" />
                              <path class="n-star" d="M515.2 171.26c-3.5 0-6.32 3.89-6.32 8.69 0-4.8-2.84-8.69-6.33-8.69 3.49 0 6.33-3.88 6.33-8.68 0 4.8 2.82 8.68 6.32 8.68z" />
                              <path class="n-star" d="M416.74 291.53c-3.49 0-6.32 3.89-6.32 8.69 0-4.8-2.83-8.69-6.32-8.69 3.49 0 6.32-3.89 6.32-8.69 0 4.8 2.83 8.69 6.32 8.69z" />
                           </g>
                        </g>
                     </g>
                     <g id="sunset">
                        <g clip-path="url(#clip-path)">
                           <path fill="#ffb052" d="M176.32 128.32H530V482H176.32z" />
                           <g id="s-sun" fill="#ffeed4">
                              <circle cx="400" cy="204" r="39" opacity=".5" />
                              <circle cx="400" cy="204" r="33" />
                           </g>
                           <path id="s-ml3" d="M423.5 270q-1.37 0-2.7.09c-4.51-8.6-15.48-14.67-28.3-14.67a38.26 38.26 0 00-5.4.37c-5.55-5.8-14.5-9.57-24.6-9.57a38.23 38.23 0 00-12.05 1.9c-5.37-6.67-15-11.11-25.95-11.11-13.69 0-25.27 6.92-29.13 16.44-10 1.3-18.27 6.29-22.45 13.08a39 39 0 00-9.42-1.14 35.33 35.33 0 00-22 7.21 35.33 35.33 0 00-22-7.21c-16.84 0-30.5 10.48-30.5 23.4a18 18 0 00.5 4.22H454c-.27-12.75-13.83-23.01-30.5-23.01z" fill="#ffca70" />
                           <path id="s-ml1" d="M248 283.1s23.1-20.85 27.5-18.54 11 9.27 15.4 9.27 13.2-4.63 16.5-6.95 11-11.58 15.4-8.11 8.8 8.11 15.4 5.79 20.9-9.26 28.6-3.47S402 297 402 297H293.1s-38.5 0-45.1-13.9z" fill="#ffb052" />
                           <path id="s-ml2" d="M189 285s27.45-18 32.68-16 13.07 8 18.3 8 15.68-4 19.61-6 13.07-10 18.3-7 10.45 7 18.3 5 24.83-8 34-3S372 297 372 297H242.59s-45.75 0-53.59-12z" fill="#e77a32" />
                           <g id="s-m2" fill="#ca413c">
                              <path d="M390 312.2s27.64-23.69 32.91-21.06 13.16 10.53 18.43 10.53 15.79-5.26 19.74-7.89 13.16-13.17 18.43-9.22 10.53 9.22 18.43 6.58 25-10.53 34.22-3.95 42.12 21.07 42.12 21.07V328H444s-46.1 0-54-15.8z" />
                              <path d="M390 312.2s79.14 18.75 33.73 52c-16.79 12.3-87 34.2-84.89 103S656 496 656 496l-26-168z" />
                           </g>
                           <g id="s-m1" fill="#9b002e">
                              <path d="M474 363.59s34.16-29.28 40.67-26 16.27 13 22.77 13 19.52-6.5 24.4-9.76 16.27-16.26 22.78-11.38 13 11.38 22.77 8.13 30.91-13 42.29-4.88 52.06 26 52.06 26v24.4h-161s-26.71 0-46.67-6.27c-9.25-2.83-17.01-7.09-20.07-13.24z" />
                              <path d="M512.35 372.06s34.16-29.28 40.67-26 16.27 13 22.77 13 19.52-6.51 24.4-9.76S616.46 333 623 337.9s13 11.39 22.77 8.14 30.91-13 42.29-4.88 52.06 26 52.06 26v24.4h-161s-26.71 0-46.67-6.27c-9.26-2.86-17.02-7.08-20.1-13.23z" />
                              <path d="M432.69 378.76s34.16-29.28 40.66-26 16.27 13 22.78 13 19.52-6.51 24.4-9.76 16.26-16.27 22.77-11.39 13 11.39 22.77 8.13 30.91-13 42.3-4.88 52 26 52 26v24.4h-161s-26.7 0-46.67-6.27c-9.18-2.86-16.94-7.08-20.01-13.23z" />
                              <path d="M471.46 388.11s-14 8.2-23.07 31.82c-7.3 18.95-.88 53 22.28 51.71l138.42 8.75s-6.36-109-8.75-109-128.88 16.72-128.88 16.72z" />
                           </g>
                           <path id="s-c2" d="M595.75 214.21a72.69 72.69 0 00-12 1c-3.13-10.6-19.94-18.7-40.21-18.7s-36.91 8-40.17 18.53c-17.21 2.6-29.84 11.23-29.84 21.47h163c-.03-12.32-18.27-22.3-40.78-22.3z" fill="#ffca70" />
                           <path id="s-c1" d="M270.46 202.51a47.77 47.77 0 00-7.81.64c-2-6.89-13-12.15-26.15-12.15s-24 5.2-26.1 12c-11.19 1.7-19.4 7.3-19.4 14h106c0-8-11.91-14.49-26.54-14.49z" fill="#ffca70" />
                           <g id="s-y" fill="#9b002e">
                              <path d="M319.09 384.77A3 3 0 01318 387h-8.66a3.06 3.06 0 01-1.08-2.23z" />
                              <path d="M311.49 373.26v9.55h7.64l-7.64-9.55z" />
                           </g>
                           <g id="s-b2" fill="#9b002e">
                              <path class="s-bw2" d="M314.21 221.05a9.4 9.4 0 019.3 8 9.09 9.09 0 00.12-1.39 9.42 9.42 0 10-18.83 0 10.57 10.57 0 00.11 1.39 9.41 9.41 0 019.3-8z" />
                              <path class="s-bw1" d="M333 221.05a9.4 9.4 0 019.3 8 9.09 9.09 0 00.12-1.39 9.42 9.42 0 10-18.83 0 9.09 9.09 0 00.11 1.39 9.41 9.41 0 019.3-8z" />
                           </g>
                           <g id="s-b1" fill="#9b002e">
                              <path class="s-bw2" d="M447.53 257.48a6 6 0 015.92 5.11 6.54 6.54 0 00.07-.89 6 6 0 00-12 0 5.26 5.26 0 00.08.89 6 6 0 015.93-5.11z" />
                              <path class="s-bw1" d="M459.51 257.48a6 6 0 015.93 5.11 6.54 6.54 0 00.07-.89 6 6 0 00-12 0 6.54 6.54 0 00.07.89 6 6 0 015.93-5.11z" />
                           </g>
                           <g class="s-gl">
                              <rect class="s-gls" x="366.82" y="342.87" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="361.16" y="351.95" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="377.5" y="361.02" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="321.85" y="306.24" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="307" y="315.49" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="321.85" y="324.57" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="252.81" y="359.33" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                              <rect class="s-gls" x="267.66" y="368.4" width="32.67" height="6.05" rx="3.03" fill="#ffca70" />
                           </g>
                        </g>
                     </g>
                     <g id="morning">
                        <g clip-path="url(#clip-path)">
                           <path id="m-bg" fill="#78ece3" d="M206.02 124.66h365.9V300h-365.9z" />
                           <path id="m-m5" d="M183.48 294.24c7.27-27 29.11-59.44 50.92-58.08 25.42 1.6 33.88 48.1 54.09 46.14 18.46-1.79 17.76-41.2 40.57-47.73 25.89-7.41 42.65 38.79 80.35 39 34.84.18 43-39.13 78.76-41.36 33.19-2.07 67.16 29.18 80.35 58.87 28 63.07-20.83 157.38-89.9 194.11-106.47 56.59-246.95-31.1-284.8-112.19-5.28-11.31-19.99-42.85-10.34-78.76z" fill="#6de2d9" />
                           <path id="m-m4" d="M207.35 279.92c19.65 21.54 29.7 32.28 40.57 31 24.3-2.81 29.11-59 46.14-58.87 17.46.14 24.89 59.3 39 58.87 17-.51 22.1-86.77 39-87.51 16.45-.72 27 80.49 46.94 80.35 17.51-.12 24.63-62.66 43.75-62.84 17.43-.17 20.59 51.65 47.74 58.07s47.2-40.26 66.82-35.8c31.55 7.17 63.35 146.87.8 227.52-72.87 93.94-252 79.73-356.4 6.37-59.5-41.75-124.11-123.35-109.83-198.87 6.61-34.92 30.81-72.34 49.33-70.8 12.3 1.03 15.28 18.69 46.14 52.51z" fill="#00b3b2" />
                           <path id="m-m3" d="M260.12 323.23c19.65 21.54 29.7 32.28 40.57 31 24.3-2.81 29.11-59 46.14-58.87 17.46.13 24.89 59.3 39 58.87 17-.52 22.1-86.77 39-87.51 16.45-.72 27 80.48 46.94 80.35 17.51-.12 24.63-62.67 43.75-62.85 17.43-.16 20.59 51.65 47.74 58.07s47.2-40.25 66.82-35.79c31.55 7.16 63.35 146.87.8 227.52-72.87 93.94-252 79.72-356.4 6.36C215 498.64 150.37 417.05 164.65 341.53c6.61-34.93 30.81-72.35 49.33-70.8 12.3 1.02 15.28 18.68 46.14 52.5z" fill="#00818a" />
                           <path id="m-m2" d="M177.15 371.36c23.49 21.54 35.5 32.28 48.49 31 29.06-2.81 34.8-59 55.16-58.87 20.88.13 29.76 59.29 46.6 58.87 20.28-.52 26.42-86.77 46.6-87.51 19.66-.72 32.23 80.48 56.1 80.35 20.94-.12 29.44-62.67 52.31-62.85 20.82-.17 24.6 51.65 57.06 58.07s56.43-40.25 79.88-35.8c37.71 7.17 75.73 146.87.95 227.53-87.1 93.93-301.22 79.72-426 6.36C123.19 546.77 46 465.18 63 389.66c7.9-34.93 36.82-72.35 59-70.81 14.7 1.03 18.26 18.69 55.15 52.51z" fill="#4b98a6" />
                           <path id="m-m1" d="M229.92 424.13c23.49 21.53 35.5 32.28 48.5 31 29.05-2.81 34.79-59 55.15-58.87 20.88.14 29.76 59.3 46.6 58.87 20.28-.52 26.42-86.77 46.6-87.51 19.66-.72 32.23 80.49 56.1 80.35 20.94-.12 29.45-62.66 52.31-62.85 20.82-.16 24.6 51.66 57.06 58.08s56.43-40.26 79.88-35.8c37.71 7.17 75.73 146.87 1 227.52-87.1 93.94-301.22 79.72-426 6.37C176 599.53 98.72 517.94 115.8 442.42c7.9-34.93 36.82-72.34 59-70.8 14.67 1.03 18.2 18.68 55.12 52.51z" fill="#34607e" />
                           <g id="m-sun" fill="#fff">
                              <circle cx="428.97" cy="211.57" r="32.71" opacity=".5" />
                              <circle cx="428.97" cy="211.57" r="28.97" />
                           </g>
                           <path id="m-c1" d="M289.29 196.65c41.77-9.32 45-6.65 45.35-5.57 1 3-14.31 10.35-13.52 11.93s17-8.45 36.59-6.36c6.32.67 16.66 2.49 16.71 4.77.17 8.82-153.9 23-155.13 15.12-.65-4.12 41.1-13.44 70-19.89z" fill="#fff" opacity=".5" />
                           <path id="m-c2" d="M507.93 193.62c-12.79 9.38-16.64 12.85-19.93 15.11-9.61 6.69-16.31 4.5-46.94 6.37-16.77 1-41.13 3.28-41.1 4.77s24.26 2.51 45.08 2.39c15.56-.09 34.55-.28 58.87-4 25.42-3.87 47.24-10.14 46.94-11.93-.4-2.31-37.61 2.55-38.19-.8-.45-2.64 22.44-6.55 22.28-12.73-.09-3.12-6.05-6.08-11.14-6.36-5.49-.29-9.6 2.56-15.87 7.18z" fill="#fff" opacity=".5" />
                        </g>
                     </g>
                     <g id="window">
                        <g clip-path="url(#clip-path-4)">
                           <path fill="#e6e6e6" d="M386.51 292.18l29.89 6.4v4.27l-23.52 2.61-44.8 4.86 38.43-18.14z" />
                           <path fill="#999" d="M416.4 298.58l-23.96 1.09-43.84 6.37-5.75 3.97 50.06.31 23.49-7.47v-4.27z" />
                           <path fill="#e6e6e6" d="M368.74 306.1l29.89 6.4v4.27l-24.13 2.66-44.19 4.82 38.43-18.15z" />
                           <path fill="#999" d="M398.63 312.5l-23.96 1.1-43.84 6.36-5.74 3.98 50.06.31 23.48-7.48v-4.27z" />
                           <path fill="#e6e6e6" d="M287.95 346.74l49.07-10.34 29.05 2.26v-5.34l-36.29-8.54-41.83 21.96z" />
                           <path fill="#999" d="M366.07 333.32l-28.34.25-43.85 6.37-8.31 6.89 52.75-1.77 27.75-6.4v-5.34z" />
                           <path fill="#999" d="M338.28 326.88l-26.54 12.88-11.32-1.11L332.64 325l5.64 1.88z" />
                           <path fill="#999" d="M357.64 317.37l-8.49 1.33 24.46-11.87 6.63.49-22.6 10.05z" />
                           <path fill="#999" d="M403.57 295.8l-16.23 7.76-.86-2.16 15.24-5.96 1.85.36z" />
                           <path fill="#e6e6e6" d="M270 309.83l152.65-30.95 14.61-7.36 1.94.18 1.6 6.11-163.33 73.66-7.47-41.64z" />
                           <path fill="#999" d="M285.84 325.26l145.76-46.91 1.81-.11-152.26 51.09 4.69-4.07z" />
                           <path fill="#999" d="M422.65 278.88l18.15-1.07L444 265h-6.4l-14.95 13.88z" />
                           <path id="window-b" fill="#999" d="M280.5 134h238v15.45h-238z" />
                        </g>
                        <rect x="281.5" y="134.5" width="237" height="321" rx="115.4" fill="none" stroke="#e5e5e6" stroke-miterlimit="10" stroke-width="16" />
                     </g>
                  </svg>
               </div>
               <script src="js/windowui.js"></script>
            </div>
            <!--window animation END-->
            <div class="form-right">
               <div class="tab">
                  <div class="tab-inner">
                     <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
                  </div>
                  <div class="tab-inner">
                     <button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
                  </div>
               </div>
               <!--START OF SIGN UP-->
               <form class="form-detail" action="process_registration.php" method="post" name="formRegister" enctype="multipart/form-data">
                  <div class="tabcontent" id="sign-up">
                     <div class="form-row">
                        <label class="form-row-inner">
                        <input required type="text" name="first_name" id="first_name" class="input-text" >
                        <span class="label">First Name:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row">
                        <label class="form-row-inner">
                        <input required type="text" name="last_name" id="last_name" class="input-text" >
                        <span class="label">Last Name:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row">
                        <label class="form-row-inner">
                        <input required type="email" name="email" id="email" class="input-text" >
                        <span class="label">E-mail:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row">
                        <label class="form-row-inner">
                        <input required type="password" name="password" id="password" class="input-text" >
                        <span class="label">Password:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row-last">
                        <input type="submit" name="submit" class="register" value="Register">
                     </div>
                  </div>
               </form>
               <!--END OF SIGN UP-->
               
               <!--START OF SIGN IN-->
               <form class="form-detail" action="surveychecklogin.php" method="post" name="formlogin" novalidate>
                  <div class="tabcontent" id="sign-in">
                     <div class="form-row">
                        <label class="form-row-inner">
                        <!-- <input type="email" name="email" id="email" class="input-text" > -->
                        <input required type="text" name="first_name" id="first_name" class="input-text" >
                        <span class="label">First Name:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row">
                        <label class="form-row-inner">
                        <input required type="password" name="password" id="password" class="input-text" >
                        <span class="label">Password:</span>
                        <span class="border"></span>
                        </label>
                     </div>
                     <div class="form-row-last">
                        <input type="submit" name="submit" id="btn1" class="register" value="Login">
                     </div>
                     <div class="text-center p-t-12">  
                        <a class="txt2" href="#" style="color:white; font-size:22px;"> Forgot Username / Password?</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal Search-->
      <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="serch_form">
                  <input type="text" placeholder="Search">
                  <button type="submit">search</button>
               </div>
            </div>
         </div>
      </div>
      <!--JS-->
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/scrollIt.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/nice-select.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/gijgo.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="plugins/easing/easing.js"></script>
      <script type="text/javascript">
         function openCity(evt, cityName) {
             var i, tabcontent, tablinks;
             tabcontent = document.getElementsByClassName("tabcontent");
             for (i = 0; i < tabcontent.length; i++) {
                 tabcontent[i].style.display = "none";
             }
             tablinks = document.getElementsByClassName("tablinks");
             for (i = 0; i < tablinks.length; i++) {
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
             }
             document.getElementById(cityName).style.display = "block";
             evt.currentTarget.className += " active";
         }
         
         // Get the element with id="defaultOpen" and click on it
         document.getElementById("defaultOpen").click();
      </script>
      <script src="js/main.js"></script>
      <script>
         $('#datepicker').datepicker({
          iconsLibrary: 'fontawesome',
          icons: {
         	 rightIcon: '<span class="fa fa-caret-down"></span>'
          }
         });
         
      </script>
   </body>
</html>