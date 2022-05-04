<!-- navbar goes here -->
<nav class="nav-bg w-full" id="nav">
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

