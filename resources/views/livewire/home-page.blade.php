<div x-data="{ showSidebar: false }">
    <div class="container mx-auto flex">
        <div class="lg:w-1/6 fixed top-0 left-0 bottom-0 lg:relative z-20 lg:z-0" :class="{ 'hidden lg:block': !showSidebar }">
            <div @click="showSidebar = false" class="bg-black fixed top-0 left-0 right-0 bottom-0 bg-opacity-50 lg:hidden"></div>
            <div class="sticky lg:top-16 overflow-y-auto px-6 lg:px-0 bg-white lg:bg-transparent h-full lg:h-auto w-64 lg:w-auto">
                <ul class="pt-8 text-gray-500 text-sm">
                    <li class="text-sm uppercase mb-2 text-black">
                        Framework
                    </li>
                    <li class="flex items-center my-1">
                        <input id="react" type="checkbox" class="mr-2"/>
                        <label for="react">
                            React
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="vue" type="checkbox" class="mr-2"/>
                        <label for="vue">
                            Vue
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="rn" type="checkbox" class="mr-2"/>
                        <label for="rn">
                            React Native
                        </label>
                    </li>
                </ul>
                <ul class="pt-8 text-gray-500 text-sm">
                    <li class="text-sm uppercase mb-2 text-black">
                        Category
                    </li>
                    <li class="flex items-center my-1">
                        <input id="bus" type="checkbox" class="mr-2"/>
                        <label for="bus">
                            Business
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="ecom" type="checkbox" class="mr-2"/>
                        <label for="ecom">
                            Ecommerce
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="list" type="checkbox" class="mr-2"/>
                        <label for="list">
                            Listings
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="social" type="checkbox" class="mr-2"/>
                        <label for="social">
                            Social
                        </label>
                    </li>
                </ul>
                <ul class="pt-8 text-gray-500 text-sm">
                    <li class="text-sm uppercase mb-2 text-black">
                        Pricing
                    </li>
                    <li class="flex items-center my-1">
                        <input id="prem" type="checkbox" class="mr-2"/>
                        <label for="prem">
                            Premium
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="deal" type="checkbox" class="mr-2"/>
                        <label for="deal">
                            Deals
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="free" type="checkbox" class="mr-2"/>
                        <label for="free">
                            Free
                        </label>
                    </li>
                </ul>
                <ul class="pt-8 text-gray-500 text-sm">
                    <li class="text-sm uppercase mb-2 text-black">
                        Backend
                    </li>
                    <li class="flex items-center my-1">
                        <input id="laravel" type="checkbox" class="mr-2"/>
                        <label for="laravel">
                            Laravel
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="node" type="checkbox" class="mr-2"/>
                        <label for="node">
                            Node
                        </label>
                    </li>
                    <li class="flex items-center my-1">
                        <input id="fire" type="checkbox" class="mr-2"/>
                        <label for="fire">
                            Firebase
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:w-5/6 xl:w-4/6 px-6 lg:px-0">
            <h1 class="font-bold text-5xl lg:leading-normal mt-5 mb-5 lg:mb-0">
                Premium App Templates
            </h1>
            <h2 class="text-xl lg:text-2xl text-gray-500 lg:w-5/6">
                Professional ready-to-use <span class="text-green-900">templates</span>, <span class="text-green-900">source codes</span> and <span class="text-green-900">starter kits</span> for developers and startups.
            </h2>

            <select class="mt-14 focus:outline-none bg-white" name="sort" id="sort">
                <option value="ltoh">Sort by Price: Low to high</option>
            </select>

            <ul class="flex flex-wrap my-5 -m-5">
                @foreach($products as $product)
                <li class="lg:w-1/2">
                    <a href="#" class="block p-5 focus:ring-4 ring-green-300 hover:bg-green-50 transition ease-out">
                        <div class="h-64 bg-gray-200" style="background-image: url({{ $product->cover_img }})"></div>
                        <div class="p-5 flex">
                            <div>
                                <p class="font-bold">
                                    {{ $product->heading }}
                                </p>
                                <p class="text-gray-600 text-sm">
                                    {{ $product->subheading }}
                                </p>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="font-semibold px-3 rounded-full bg-green-300 text-green-900">
                                    ${{ $product->price }}
                                </div>
                                <div class="py-2 text-xs">
                                    <i class="icofont-download text-gray-500"></i>
                                    12
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div @click="showSidebar = !showSidebar" class="h-16 w-16 bg-black rounded-full fixed bottom-0 right-0 m-6 lg:hidden flex items-center justify-center z-20">
        <i :class="showSidebar ? 'icofont-close' : 'icofont-filter'" class="text-white text-2xl"></i>
    </div>
</div>
