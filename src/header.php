<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="shortcut icon" href="./assets/icons/Fevicon.png" type="png">
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="description" content=" <?php echo $meta; ?>" />
    <meta name="keywords" content="<?php echo $metakeyword; ?>">
</head>

<body class="overflow-x-hidden">
    <header class="fixed top-0 left-0 right-0 z-40 w-full py-9.75 px-5">
        <div class='container mx-auto flex justify-between items-center'>
            <div class='flex justify-between w-full items-center'>
                <div class="inline-block my-auto">
                    <img src='./assets/images/occams-white-ai.svg' alt='Occams Ai' class="lg:h-12 h-10 max-w-max" />
                </div>

                <!-- <div class="flex xl:justify-center md:justify-end w-full"> -->
                <div class="md:flex items-center xl:gap-7.5 md:gap-5 gap-8 md:text-lg text-base hidden h-17.5 pr-6
                    rounded-[50px] pl-1.25 text-[#1E1E1E] font-medium bg-white border border-[#E3E3E3]">
                    <a href='/' class="flex items-center rounded-[50px] justify-center h-15 w-26 linear-background">
                        <img src='./assets/icons/home_icon.svg' alt='Home Icon' />
                    </a>

                    <div class="relative group cursor-pointer">
                        <div class="flex items-center gap-1.5">
                            <a href='/who-we-are.php' class='block inter'>Who We Are</a>
                            <img src='./assets//icons/down_arrow.svg' alt='Down Arrow' class="mt-0.75" />
                        </div>

                        <div class="absolute left-0 p-[15px_10px_13px_20px] bg-white text-[#1E1E1E] rounded-xl 
                            opacity-0 group-hover:opacity-100 w-max invisible group-hover:visible transition-all 
                            duration-200 z-50 top-13.5 border border-[#E4E4E7]">
                            <div class="flex flex-col space-y-2">
                                <a href='/brand-story' class='flex items-center gap-2.5 pr-5'>
                                    <span class="w-1.5 h-1.5 bg-black rounded-full"></span>
                                    Brand Story
                                </a>

                                <a href='/researchers' class='flex items-center gap-2.5 pr-5'>
                                    <span class="w-1.5 h-1.5 bg-black rounded-full"></span>
                                    Researchers
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href='/product'>Product</a>
                    <a href='/insights'>Insights</a>

                    <a class="cursor-pointer">
                        <img src='./assets/icons/three_dots.svg' alt='Three Dots' />
                    </a>
                </div>
                <!-- </div> -->

                <!-- <a href="/contact" class="inline-flex items-center justify-center h-12 rounded-[30px]
                    p-[3px] linear-background">
                    <span class="inline-flex items-center justify-center h-[43px] rounded-[30px] text-sm
                        font-semibold bg-black px-[30px] text-[#EF6A24] whitespace-nowrap">
                        Contact us
                    </span>
                </a> -->
                <a href='/contact' class="lg:flex rounded-[30px] text-sm py-2.5 h-12 items-center px-7.5 font-semibold
                    justify-center text-[#EF6A24] bg-black border-2 border-[#F99D3C] hidden">
                    Contact us
                </a>
            </div>

            <button id="menu-toggle" class="md:hidden flex items-center justify-center cursor-pointer">
                <img id="hamburger-icon" class="h-9.75 max-w-max" alt='Menu Icon' src="./assets/icons/menu_icon.svg">

                <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2"
                    class="absolute w-9.75 h-9.75 text-white transition-all duration-300 ease-in-out opacity-0 rotate-90">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div id="mobile-menu" class="hidden absolute top-25 -right-full w-[65%] sm:w-1/2 bg-white border-[#E3E3E3] 
                border rounded-2xl shadow-lg p-6 z-50 transition-all duration-300 ease-in-out">
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="/who-we-are" class=" text-black navigation-font">
                            Who We Are

                            <ul class="mt-1 ml-7 list-disc flex flex-col gap-2">
                                <li class="text-base leading-[1.8]">
                                    <a href='/brand-story'>Brand Story</a>
                                </li>

                                <li class="text-base leading-[1.8]">
                                    <a href='/researchers'>Researchers</a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <!-- <li><a href="/brand-story" class=" text-black navigation-font">Brand Story</a></li>
                    <li><a href="/researchers" class=" text-black navigation-font">Researchers</a></li> -->
                    <li><a href="/product" class=" text-black navigation-font">Product</a></li>
                    <li><a href="/insights" class=" text-black navigation-font">Insights</a></li>
                    <li><a href="/contact" class=" text-black navigation-font">Contact us</a></li>
                </ul>
            </div>
    </header>

    <button id="backToTop" class="hidden fixed bottom-6 right-6 z-50 rounded-full linear-background text-white
        transition cursor-pointer w-11 h-11">
        <img alt='Arrow Up' class="mx-auto mr-[10.5px]" src="./assets/icons/arrow-up.png">
    </button>


    <script>
        const toggleBtn = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const closeIcon = document.getElementById("close-icon");

        toggleBtn.addEventListener("click", () => {
            if (mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.remove("hidden");
                setTimeout(() => {
                    mobileMenu.classList.remove("right-[-100%]");
                    mobileMenu.classList.add("right-5");
                }, 10);

                hamburgerIcon.classList.remove("opacity-100", "rotate-0");
                hamburgerIcon.classList.add("opacity-0", "rotate-90");

                closeIcon.classList.remove("opacity-0", "rotate-90");
                closeIcon.classList.add("opacity-100", "rotate-0");
            } else {
                mobileMenu.classList.remove("right-5");
                mobileMenu.classList.add("right-[-100%]");
                setTimeout(() => {
                    mobileMenu.classList.add("hidden");
                }, 300);

                hamburgerIcon.classList.remove("opacity-0", "rotate-90");
                hamburgerIcon.classList.add("opacity-100", "rotate-0");

                closeIcon.classList.remove("opacity-100", "rotate-0");
                closeIcon.classList.add("opacity-0", "rotate-90");
            }
        })
    </script>

    <script>
        const btn = document.getElementById("backToTop");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                btn.classList.remove("hidden");
            } else {
                btn.classList.add("hidden");
            }
        });

        btn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>