<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./input.css" rel="stylesheet">
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="./script.js"></script>
    <title>Portfolio Anjay</title>
</head>
<body class="bg-gray-200 p-0 m-0 font-poppins text-lg">
    <!-- Navbar (Desktop) -->
    <header class="p-4">
        <nav class="container flex justify-between items-center mx-auto">
        <a href="./index.html" class="flex items-center gap-2">
            <img src="../assets/img/icon.jpg" alt="Foto Ikon" class="w-14 h-14 rounded-full hover:ring-2 hover:ring-slate-400">
        </a>

        <ul class="hidden md:flex gap-10 text-xl">
            <li><a href="./index.html" class="hover:text-slate-500">Home</a></li>
            <li><a href="#about" class="hover:text-slate-500">About</a></li>
            <li><a href="#project" class="hover:text-slate-500">Projects</a></li>
        </ul>

        <!-- Hamburger icon (Mobile) -->
        <div class="md:hidden">
            <ion-icon name="menu" class="text-3xl cursor-pointer" onclick="openMenu()"></ion-icon>
        </div>
        </nav>
    </header>

    <!-- FULLSCREEN OVERLAY MENU (mobile) -->
    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-white z-50 flex flex-col items-center justify-center transition-transform duration-300 transform -translate-x-full">
        <div class="absolute top-4 right-4"><ion-icon name="close" class="text-3xl cursor-pointer" onclick="closeMenu()"></ion-icon></div>

        <img src="../assets/img/icon.jpg" alt="Foto Ikon" class="w-24 h-24 rounded-full mb-6">

        <!-- Navigation links (Mobile) -->
        <ul class="flex flex-col items-center gap-6 text-2xl">
            <li><a href="./index.html" class="hover:text-slate-500" onclick="closeMenu()">Home</a></li>
            <li><a href="#about" class="hover:text-slate-500" onclick="closeMenu()">About</a></li>
            <li><a href="#project" class="hover:text-slate-500" onclick="closeMenu()">Projects</a></li>
        </ul>
    </div>

    <!-- Profile -->
    <section class="pt-4 mx-4 my-0 min-h-screen box-border md:mx-40">
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-20 min-h-[80vh]">
            <img src="../assets/img/profile.png" alt="Foto Gueh" class="w-32 h-32 md:w-[400px] md:h-[400px] rounded-full drop-shadow-lg">
            <div class="text-center">
                <p class="text-lg md:text-2xl text-slate-600">Nama Saya...</p>
                <h1 class="text-3xl md:text-5xl font-medium">Farid Noer Hakim</h1>
                <p class="text-xl md:text-3xl text-slate-700 underline">
                    <span class="txt-rotate blinking-caret" data-period="700" data-rotate='["Software Engineer", "Front-End Developer"]'></span>
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 my-4">
                    <button class="transition ease-in-out delay-150 font-medium text-black border-2 border-black rounded-full px-4 py-2 w-auto hover:bg-black hover:text-white">
                        <a href="../assets/CV.pdf" target="_blank">CV</a>
                    </button>
                    <button class="transition ease-in-out delay-150 font-medium text-white border-2 border-sky-600 rounded-full bg-sky-600 px-4 py-2 w-auto hover:bg-sky-900 hover:border-sky-900">
                        <a href="mailto:ridz4011@gmail.com" target="_blank">Contact Me!</a>
                    </button>
                </div>
                <div class="flex justify-center mt-4 gap-4">
                    <a href="https://www.linkedin.com/in/farid-noer-hakim" target="_blank">
                        <img src="../assets/img/linkedin.svg" alt="linkedin" class="cursor-pointer h-6 md:h-8">
                    </a>
                    <a href="https://github.com/ridzz4011" target="_blank">
                        <img src="../assets/img/github-mark.svg" alt="github" class="cursor-pointer h-6 md:h-8">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero -->
    <section class="text-gray-600 body-font" id="about">
        <div class="container mx-auto flex md:px-24 md:py-10 md:flex-row flex-col items-center">
            <div class="lg:flex-grow mt-5 md:mt-0 md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="text-2xl font-extrabold leading-9 tracking-tight mb-3 text-gray-900 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                    Tentang Saya
                </h1>
                <p class="mb-8 md:pl-0 pl-2 pr-2 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae gravida urna. Mauris et accumsan velit. Aliquam eu venenatis tortor. 
                    Pellentesque sollicitudin nisl a magna dignissim condimentum.
                </p>
            </div>
            <div class="lg:max-w-lg lg:w-[600px] mb-5 md:mb-0 md:w-1/2 w-3/6">
                <img class="object-cover object-center rounded-lg drop-shadow-lg" alt="foto" src="../assets/img/foto1.jpg">
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="dark:bg-gray-200 dark:text-gray-800">
        <div class="container max-w-5xl px-4 py-12 mx-auto">
            <div class="grid gap-4 mx-4 sm:grid-cols-12">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:dark:bg-sky-600">
                        <h3 class="text-3xl font-semibold">Pendidikan</h3>
                        <span class="text-sm font-bold tracking-wider uppercase dark:text-gray-600">Cogito Ergo Sum</span>
                    </div>
                </div>
                <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                    <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-gray-300">
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-sky-600">
                            <h3 class="text-xl font-semibold tracking-wide">Universitas Singaperbangsa Karawang </h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">Now - 2023</time>
                            <p class="mt-3">Mahasiswa Ilmu Komputer yang senang akan Machine Learning dan Software Engineering. Bismillah IPK 4.</p>
                        </div>
                        <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-sky-600">
                            <h3 class="text-xl font-semibold tracking-wide">SMAN 1 Cikarang Utara</h3>
                            <time class="text-xs tracking-wide uppercase dark:text-gray-600">2020 - 2023</time>
                            <p class="mt-3">Keroco yang belum paham apa-apa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project -->
    <section class="container mx-auto flex md:px-24 md:py-10 md:flex-row flex-col items-center" id="project">
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h2 class="mr-10 text-2xl font-bold leading-none md:text-5xl">Projects</h2>
            <div class="flex flex-wrap justify-center mt-10">
                <!-- card 1 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 1</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan1/struktur.html" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
  
                <!-- card 2 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 2</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan2/home.html" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 3</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan3/latihanPhp.php" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- card 4 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 4</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan4/kategoriusia.php" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- card 5 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 5</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan5/perulangan.php" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- card 6 -->
                <div class="p-4 max-w-sm">
                    <div class="flex rounded-lg h-full bg-white p-8 flex-col transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        </div>
                        <h2 class="text-lg font-medium">Tugas 6</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base">
                        Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                        <a href="./tugas/latihan6/array.php" class="mt-3 hover:text-sky-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    <div class="flex justify-end fixed bottom-8 right-8 z-[99]">
        <button class="group relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-neutral-950 font-medium text-neutral-200 hidden opacity-50" id="btn-to-top">
            <div class="flex items-center justify-center transition translate-y-0 group-hover:translate-y-[300%]">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                    <path d="M18 15l-6-6-6 6" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="absolute flex items-center justify-center -translate-y-[300%] transition group-hover:translate-y-0">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                    <path d="M18 15l-6-6-6 6" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path/>
                </svg>
            </div>
        </button>
    </div>
    

    <!-- Footer -->
    <footer class="m-4">
        <hr class="my-6 border-gray-400 sm:mx-auto lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center">© 2025 <a href="#" class="hover:underline">Garid™</a>. Semua hak cipta dilindungi.</span>
    </footer>

    <script>
        // Overlay Menu
        function openMenu() {
          const mobileMenu = document.getElementById('mobile-menu')
          mobileMenu.classList.remove('-translate-x-full')
        }
    
        function closeMenu() {
          const mobileMenu = document.getElementById('mobile-menu')
          mobileMenu.classList.add('-translate-x-full')
        }
    </script>
</body>
</html>