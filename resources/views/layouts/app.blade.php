<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/assets/css/tailwind.css">
        <link rel="stylesheet" href="/assets/icofont/icofont.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @livewireStyles
    </head>
    <body x-data="{ showSearch: false }">
        <nav class="container mx-auto flex sticky top-0 bg-white px-6 lg:px-0 z-20">
            <div :class="{ 'hidden lg:flex' : showSearch}" class="lg:w-1/6 font-semibold text-2xl h-16 flex items-center border-b lg:border-b-0">
                <a href="#">
                    snaplogic
                </a>
            </div>
            <div class="w-full lg:w-5/6 xl:w-4/6 h-16 border-b flex items-center justify-end lg:justify-start">
                <i class="text-gray-600 px-3 lg:hidden" :class="showSearch ? 'icofont-arrow-left text-xl' : 'icofont-search text-lg'" @click="showSearch = !showSearch"></i>
                <i class="text-gray-600 px-3 icofont-search text-lg hidden lg:block"></i>
                <input type="text" placeholder="Search your Template" class="focus:outline-none flex-1" :class="showSearch ? 'block' : 'hidden lg:block'"/>
                <i class="icofont-ui-cart text-3xl cursor-pointer text-gray-600"></i>
            </div>
        </nav>
        <livewire:home-page/>
        <footer class="bg-green-900">
            <div class="container mx-auto py-20 lg:py-40 px-6 text-center text-white">
                <h1 class="font-bold text-3xl lg:text-5xl mb-5">
                    Save time, code less. <br>
                    Get a head start on your next project, today!
                </h1>
                <p class="text-sm mb-3">
                    Our mission at Snaplogic is to help web developers and entrepreneurs launch their own apps with minimum effort and cost, but with maximum speed.
                    Download our premium or free app templates to make your own app today! Highly customizable, our app templates, coded in Swift, Kotlin and React Native, will jump start your mobile app development and will help you launch your app 10x faster.
                </p>
                <p class="text-sm">
                    We offer a 30-day money-back guarantee, no questions asked.
                </p>
            </div>
        </footer>
        <footer>
            <div class="container mx-auto p-6 lg:px-0 flex flex-col items-center">
                <ul class="flex flex-col lg:flex-row items-center mb-5">
                    <li class="lg:mx-5 mb-3 lg:mb-0">
                        <a href="#">
                            About Us
                        </a>
                    </li>
                    <li class="lg:mx-5 mb-3 lg:mb-0">
                        <a href="mailto:rayehizoba@gmail.com">
                            Contact Us
                        </a>
                    </li>
                    <li class="lg:mx-5 mb-3 lg:mb-0">
                        <a href="#">
                            Refunds
                        </a>
                    </li>
                    <li class="lg:mx-5 mb-3 lg:mb-0">
                        <a href="mailto:rayehizoba@gmail.com">
                            Custom Development / Hire Us
                        </a>
                    </li>
                    <li class="lg:mx-5 mb-3 lg:mb-0">
                        <a href="#">
                            License Terms
                        </a>
                    </li>
                </ul>
                <p class="text-xs text-gray-500 font-normal leading-relaxed text-gray-400 text-center">
                    Snaplogic is a Trademark of Raymond Ehizoba. Copyright © 2021.
                </p>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
