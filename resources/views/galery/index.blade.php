@extends('layouts.app')
@section('content')
   <!-- component -->
<!-- Gogole Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<!-- AlpineJS -->
<script
    defer
    src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Tailwind -->
<script src="https://cdn-tailwindcss.vercel.app/"></script>

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>




<div id="default-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
            <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="/img/camara.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="/img/ice.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="/img/motor.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!-- Card List Section -->
<section x-data="xData()" class="bg-gray-100 dark:bg-gray-900 py-10 px-12">
    <!-- Card Grid -->
    <div
        class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <template x-for="post in posts">
            <!-- Card Item -->
            <div
                class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1"
                x-for="(post, index) in posts">
                <!-- Clickable Area -->
                <a _href="link" class="cursor-pointer">
                    <figure>
                        <!-- Image -->
                        <img
                            :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                            class="rounded-t h-72 w-full object-cover" />

                        <figcaption class="p-4">
                            <!-- Title -->
                            <p
                                class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300"
                                x-text="post.title">
                                <!-- Post Title -->
                            </p>

                            <!-- Description -->
                            <small
                                class="leading-5 text-gray-500 dark:text-gray-400"
                                x-text="post.description">
                                <!-- Post Description -->
                            </small>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </template>
    </div>
</section>

<script>
    function xData() {
        /**
         * Shuffle an array
         * @param {Array} array
         * @source https://stackoverflow.com/a/2450976/6940144
         */
        function shuffle(array) {
            let currentIndex = array.length,
                randomIndex;

            // While there remain elements to shuffle.
            while (currentIndex != 0) {
                // Pick a remaining element.
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex--;

                // And swap it with the current element.
                [array[currentIndex], array[randomIndex]] = [
                    array[randomIndex],
                    array[currentIndex],
                ];
            }

            return array;
        }

        const posts = [
            {
                image:
                    "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085",
                title: "5 Easy Tips That Will Make Your Latte Art Flourish",
                description:
                    "Latte art is quite often the most attractive thing for a new barista, and latte art is an excellent gateway to the exciting world of coffee. Latte art easy to start with, but to master latte art patterns, you need a lot practice and determination. Here are my tips that helped me to improve my latte art a few years ago!",
            },
            {
                image:
                    "https://images.unsplash.com/photo-1512034400317-de97d7d6c3ed",
                title: "Coffee Roasting Basics: Developing Flavour by Roasting",
                description:
                    "Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white? Let's see what makes caffé latte and flat white different from each other!",
            },
            {
                image:
                    "https://images.unsplash.com/photo-1445077100181-a33e9ac94db0",
                title: "Latte vs. Flat White - What is the Difference?",
                description:
                    "I bet roasting is the thing that every barista wants to know about! We can develop flavour by roasting coffee. How can we achieve the best tasting coffee? What actually happens when roasting?",
            },
            {
                image:
                    "https://images.unsplash.com/photo-1459257868276-5e65389e2722",
                title: "Creating the Perfect Espresso Recipe",
                description:
                    "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
            },
        ];

        return {
            posts: [
                ...shuffle(posts),
            ],
        };
    }
</script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js" ></script>
@endsection