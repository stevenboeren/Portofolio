<!-- navbar goes here -->
<nav class="nav-bg fixed w-full">
  <div class="max-w-8xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex">
        <!-- logo -->
        <div>
          <a href="index.php" class="flex items-center py-3 px-2 txt-white ">
            <span>STEVEN</span>
          </a>
        </div>

        <!-- primary nav -->
<!--        <div class="hidden md:flex items-center space-x-1">-->
<!--          <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Features</a>-->
<!--          <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Pricing</a>-->
<!--        </div>-->
      </div>

      <!-- secondary nav -->
      <div class="hidden md:flex items-center ">
        <a href="programming.php" class="py-3 px-3 txt-white">PROGRAMMING</a>
        <a href="aboutme.php" class="py-3 px-3 txt-white">ABOUT ME</a>
        <a href="contact.php" class="py-3 px-3 txt-white">CONTACT</a>
        <!-- <a href="" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>-->
      </div>

      <!-- mobile button goes here -->
      <div class="md:hidden flex items-center">
        <button class="mobile-menu-button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#E1EEFF">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu hidden md:hidden mobile-menu-nav" >
    <a href="programming.php" class="block py-2 px-4 text-sm txt-white">PROGRAMMING</a>
    <a href="aboutme.php" class="block py-2 px-4 text-sm txt-white">ABOUT ME</a>
    <a href="contact.php" class="block py-2 px-4 text-sm txt-white">CONTACT</a>
  </div>
</nav>


<!-- Sildeshow-->
<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Welcome to my page!!</div>
              <div class="text">
                <p>Vindt hier meer over mijzelf op deze website.</p>
              </div>
              <a href="aboutme.php" class="btn">
               <span class="btn-inner">About Me</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="img/bluebkg.png" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Mijn Programmer-Kennis</div>
              <div class="text">
                <p>Kom meer te weten over welke programmeertalen ik gebruik. <br> En wat voor projecten ik nu al heb gemaakt!</p>
              </div>
            </div>
          </div>
          <div class="image-container">
            <img src="img/code.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Hobby's</div>
              <div class="text">
                <p>Naast programmeren doe ik ook andere hobby's. <br> Zoals Muziek Produceren, Youtube-Kanaal en nog veel meer!</p>
              </div>
            </div>
          </div>
          <div class="image-container">
            <img src="img/ytbg.png" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="pagination">
        <div class="item is-active">
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div>
  </section>
</main>
