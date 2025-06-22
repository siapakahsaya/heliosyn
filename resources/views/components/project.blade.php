{{-- resources/views/components/projects.blade.php --}}
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50 relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 60 60" fill="none">
            <defs>
                <pattern id="project-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor" class="text-green-600"/>
                    <circle cx="0" cy="0" r="2" fill="currentColor" class="text-blue-600"/>
                    <circle cx="60" cy="60" r="2" fill="currentColor" class="text-green-600"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#project-pattern)"/>
        </svg>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative">
        {{-- Section Header --}}
        <div class="text-center mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-4"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                </svg>
                Our Projects
            </div>

            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6"
                x-show="inView"
                x-transition:enter="transition ease-out duration-600 delay-200"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0">
                Transforming Communities with
                <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Clean Energy
                </span>
            </h2>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed"
               x-show="inView"
               x-transition:enter="transition ease-out duration-600 delay-300"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0">
                Explore our portfolio of successful renewable energy installations that are making a real difference worldwide.
            </p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex justify-center mb-12" x-data="{
            activeFilter: 'all',
            inView: false,
            filters: [
                { id: 'all', name: 'All Projects', count: 150 },
                { id: 'solar', name: 'Solar', count: 85 },
                { id: 'wind', name: 'Wind', count: 42 },
                { id: 'hydro', name: 'Hydro', count: 23 }
            ]
        }" x-intersect="inView = true">
            <div class="bg-white rounded-2xl p-2 shadow-lg border border-gray-200"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <div class="flex space-x-1">
                    <template x-for="filter in filters" :key="filter.id">
                        <button @click="activeFilter = filter.id"
                                class="px-6 py-3 rounded-xl font-semibold transition-all duration-200 relative"
                                :class="activeFilter === filter.id ?
                                    'bg-gradient-to-r from-green-600 to-blue-600 text-white shadow-md' :
                                    'text-gray-600 hover:text-gray-900 hover:bg-gray-100'">
                            <span x-text="filter.name"></span>
                            <span class="ml-2 text-xs px-2 py-1 rounded-full"
                                  :class="activeFilter === filter.id ? 'bg-white/20' : 'bg-gray-200'"
                                  x-text="filter.count"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>

        {{-- Featured Projects Grid --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            {{-- Project 1 - Featured --}}
            <div class="lg:col-span-2 bg-white rounded-3xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-300"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="grid lg:grid-cols-2">
                    {{-- Project Image --}}
                    <div class="relative bg-gradient-to-br from-blue-400 to-green-500 h-80 lg:h-auto overflow-hidden">
                        {{-- Placeholder for real image --}}
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-24 h-24 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <div class="text-sm font-medium opacity-90">Green Valley Solar Farm</div>
                            </div>
                        </div>

                        {{-- Project Type Badge --}}
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-sm font-semibold rounded-full">
                                Featured Project
                            </span>
                        </div>

                        {{-- Capacity Badge --}}
                        <div class="absolute bottom-4 right-4">
                            <span class="px-3 py-1 bg-yellow-400 text-gray-900 text-sm font-bold rounded-full">
                                50 MW
                            </span>
                        </div>
                    </div>

                    {{-- Project Content --}}
                    <div class="p-8 lg:p-12">
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-yellow-600 font-semibold">Solar Energy</span>
                        </div>

                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Green Valley Solar Farm</h3>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Our largest utility-scale solar installation providing clean energy to 15,000 homes in California. This groundbreaking project demonstrates the scalability and efficiency of modern photovoltaic technology.
                        </p>

                        {{-- Project Stats --}}
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-green-600">50MW</div>
                                <div class="text-xs text-gray-600 uppercase tracking-wide">Capacity</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-blue-600">15K</div>
                                <div class="text-xs text-gray-600 uppercase tracking-wide">Homes Powered</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-purple-600">2023</div>
                                <div class="text-xs text-gray-600 uppercase tracking-wide">Completed</div>
                            </div>
                        </div>

                        <button class="flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
                            View Project Details
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Project Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            {{-- Project 2 --}}
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="relative bg-gradient-to-br from-blue-400 to-blue-600 h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <div class="text-sm font-medium opacity-90">Ocean Wind Farm</div>
                        </div>
                    </div>

                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">Wind</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2 py-1 bg-white text-blue-600 text-xs font-bold rounded-full">25 MW</span>
                    </div>
                </div>

                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Atlantic Ocean Wind Farm</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Offshore wind installation featuring 12 state-of-the-art turbines generating sustainable energy for coastal communities.
                    </p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="text-sm text-gray-500">
                            <span class="font-semibold text-gray-900">8,500</span> homes powered
                        </div>
                        <div class="text-sm text-gray-500">
                            Completed <span class="font-semibold text-gray-900">2022</span>
                        </div>
                    </div>

                    <button class="w-full py-2 border border-gray-200 text-gray-700 font-medium rounded-lg hover:border-blue-600 hover:text-blue-600 transition-colors">
                        Learn More
                    </button>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="relative bg-gradient-to-br from-green-400 to-teal-500 h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                            </svg>
                            <div class="text-sm font-medium opacity-90">Mountain Hydro Plant</div>
                        </div>
                    </div>

                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-teal-500 text-white text-xs font-semibold rounded-full">Hydro</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2 py-1 bg-white text-teal-600 text-xs font-bold rounded-full">15 MW</span>
                    </div>
                </div>

                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Alpine Hydroelectric Plant</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Micro-hydro installation harnessing mountain stream flow to provide 24/7 renewable energy for remote communities.
                    </p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="text-sm text-gray-500">
                            <span class="font-semibold text-gray-900">5,200</span> homes powered
                        </div>
                        <div class="text-sm text-gray-500">
                            Completed <span class="font-semibold text-gray-900">2021</span>
                        </div>
                    </div>

                    <button class="w-full py-2 border border-gray-200 text-gray-700 font-medium rounded-lg hover:border-teal-600 hover:text-teal-600 transition-colors">
                        Learn More
                    </button>
                </div>
            </div>

            {{-- Project 4 --}}
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="relative bg-gradient-to-br from-orange-400 to-yellow-500 h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <div class="text-sm font-medium opacity-90">Corporate Solar</div>
                        </div>
                    </div>

                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-yellow-500 text-white text-xs font-semibold rounded-full">Solar</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2 py-1 bg-white text-yellow-600 text-xs font-bold rounded-full">8 MW</span>
                    </div>
                </div>

                <div class="p-6">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">TechCorp Headquarters</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Commercial rooftop solar installation helping a major technology company achieve carbon neutrality goals.
                    </p>

                    <div class="flex justify-between items-center mb-4">
                        <div class="text-sm text-gray-500">
                            <span class="font-semibold text-gray-900">2,800</span> homes powered
                        </div>
                        <div class="text-sm text-gray-500">
                            Completed <span class="font-semibold text-gray-900">2023</span>
                        </div>
                    </div>

                    <button class="w-full py-2 border border-gray-200 text-gray-700 font-medium rounded-lg hover:border-yellow-600 hover:text-yellow-600 transition-colors">
                        Learn More
                    </button>
                </div>
            </div>
        </div>

        {{-- Project Statistics --}}
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="text-center mb-8"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Project Impact Overview</h3>
                <p class="text-lg text-gray-600">
                    Collective impact of our renewable energy projects worldwide.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent mb-2">
                        150+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Total Projects</div>
                    <div class="text-gray-500 text-sm mt-1">Successfully Delivered</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-2">
                        500MW
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Total Capacity</div>
                    <div class="text-gray-500 text-sm mt-1">Renewable Energy</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent mb-2">
                        325K
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Homes Powered</div>
                    <div class="text-gray-500 text-sm mt-1">Clean Energy Access</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent mb-2">
                        850K
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Tons CO₂</div>
                    <div class="text-gray-500 text-sm mt-1">Prevented Annually</div>
                </div>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="text-center" x-data="{ inView: false }" x-intersect="inView = true">
            <div x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Have a Project in Mind?
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Let's discuss how we can bring sustainable energy solutions to your community or business.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-green-600 to-blue-600 text-white font-semibold rounded-lg hover:from-green-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Start Your Project
                    </button>
                    <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-green-600 hover:text-green-600 transition-all duration-200">
                        View All Projects
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
