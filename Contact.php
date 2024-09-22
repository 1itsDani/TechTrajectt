<?php
include "includes/discord.inc.php";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jaïr - To do's</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/typewrite.js"></script>
</head>

<body class="min-h-screen flex flex-col">

  <div class="overflow-hidden">
    <svg viewBox="0 0 814 834" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 z-0">
      <g filter="url(#filter0_f_104_157)">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M295.115 59.1601C344.418 64.1227 399.334 40.4798 441.012 67.2809C482.661 94.0626 488.246 151.559 508.835 196.591C527.488 237.392 545.396 276.528 556.545 319.983C570.739 375.303 618.533 441.446 583.159 486.285C545.494 534.028 461.66 487.789 405.59 511.331C359.85 530.535 342.527 592.628 295.115 607.223C243.654 623.064 186.93 613.909 136.883 594.048C82.7959 572.583 15.6167 546.343 0.266022 490.214C-15.9307 430.991 59.9401 381.348 61.9299 319.983C63.8166 261.798 -2.69996 212.564 11.1028 156.008C24.7487 100.095 76.7396 54.6731 131.214 36.0975C184.338 17.982 239.269 53.5388 295.115 59.1601Z" fill="url(#paint0_linear_104_157)" fill-opacity="0.5" />
      </g>
      <defs>
        <filter id="filter0_f_104_157" x="-220" y="-187" width="1033.94" height="1020.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="109" result="effect1_foregroundBlur_104_157" />
        </filter>
        <linearGradient id="paint0_linear_104_157" x1="-269.581" y1="326.139" x2="286.88" y2="895.603" gradientUnits="userSpaceOnUse">
          <stop stop-color="#F5D6FA" />
          <stop offset="1" stop-color="#E6E0FE" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="flex-grow relative z-10 w-full">
    <header class="container mx-auto mt-4">
      <?php include "includes/ui/menu.inc.php"; ?>
    </header>
    <section class="mt-32">
      <h1 id="typewriter" class="text-center text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-black font-bold w-3/4 lg:w-1/2 mx-auto"></h1>
    </section>

    <div class="isolate px-6 py-24 sm:py-32 lg:px-8">
      <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div>
            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
            <div class="mt-2.5">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
            <div class="mt-2.5">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
            <div class="mt-2.5">
              <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="mt-2.5">
              <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
            <div class="mt-2.5">
              <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>
          <div class="flex gap-x-4 sm:col-span-2">
            <div class="flex h-6 items-center">
              <button type="button" class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                <span class="sr-only">Agree to policies</span>
                <span aria-hidden="true" class="h-4 w-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
              </button>
            </div>
            <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
              By selecting this, you agree to our
              <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
            </label>
          </div>
        </div>
        <div class="mt-10">
          <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
        </div>
      </form>
    </div>
  </div>

  <footer class="bg-gray-200 text-center py-4">
    <p>&copy; 2024. All rights reserved. Credits to ItsDani <a href="https://github.com/1itsDani" target="_blank" style="color: inherit; text-decoration: none;">@it.gov</a></p>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const typewriter = new Typewriter('#typewriter', {
        loop: false,
        delay: 75,
        cursor: '|',
      });

      typewriter.typeString('Stuur mij een berichtje :)').start();
    });
  </script>
</body>

</html>