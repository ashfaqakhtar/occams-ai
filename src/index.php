<?php $title = "Occams | Ai";
$meta = "Occams | Ai";
$metakeyword = "";
include "header.php";
?>

<section class="relative w-full h-screen overflow-hidden">
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="./assets/videos/occams-ai-hero.mp4" type="video/mp4">
    </video>

    <div class="relative w-full h-screen lg:px-24 sm:px-7 px-5 flex items-center">
        <div class='container mx-auto'>
            <div class="relative z-20 container mx-auto h-full flex items-center">
                <div class="relative flex sm:items-center items-start flex-col w-full">
                    <h1 class="lg:text-[52px] md:text-4xl text-2xl font-bold linear-text-gradient">
                        Applied AI for America’s SMBs
                    </h1>

                    <p class="sm:text-[24px] md:text-lg text-base font-medium mt-1">
                        Clear. Understandable. Actionable.
                    </p>

                    <p
                        class="sm:text-[22px] md:text-lg text-base font-light max-w-3xl mx-auto mt-2 sm:text-center text-left">
                        We build AI that founders and finance teams can understand, use, and trust-clear value,
                        transparent guardrails
                    </p>

                    <div class='flex sm:flex-row flex-col items-center gap-4 mt-5'>
                        <a href='/' class="rounded-lg text-base py-2.5 h-12 flex items-center font-semibold cursor-pointer
                            px-5 text-white linear-background w-48 justify-center sm:w-auto">
                            Speak with our team
                        </a>

                        <a href='/' class="rounded-lg text-base py-2.5 h-12 flex items-center px-5 font-semibold cursor-pointer
                            justify-center sm:w-auto text-[#EF6A24] bg-white border-2 border-[#F99D3C] w-48">
                            See our Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="scroll-down" class="absolute sm:bottom-9 bottom-7 flex w-full justify-center z-20 opacity-40">
        <img src="./assets/images/scroll-down.gif" alt="Scroll Down" class="w-12.5">
    </div>
</section>

<?php
include 'footer.php';
?>