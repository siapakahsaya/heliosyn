{{-- resources/views/components/services.blade.php --}}
<section class="py-20 bg-white relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-100 to-blue-100 rounded-full opacity-50 -translate-y-48 translate-x-48"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-100 to-green-100 rounded-full opacity-50 translate-y-40 -translate-x-40"></div>

    <div class="container mx-auto px-6 lg:px-8 relative">
        {{-- Section Header --}}
        <div class="text-center mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-4"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                </svg>
                Our Services
            </div>

            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6"
                x-show="inView"
                x-transition:enter="transition ease-out duration-600 delay-200"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0">
                Complete
                <span class="bg-gradient-to-r from-blue-600 to-green-600 bg-clip-text text-transparent">
                    Energy Solutions
                </span>
            </h2>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed"
               x-show="inView"
               x-transition:enter="transition ease-out duration-600 delay-300"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0">
                From consultation to installation and maintenance, we provide end-to-end renewable energy solutions tailored to your specific needs.
            </p>
        </div>

        {{-- Main Services Grid --}}
        <div class="grid lg:grid-cols-3 gap-8 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            {{-- Solar Power --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-yellow-200"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-4">Solar Power Systems</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    High-efficiency photovoltaic systems designed for residential, commercial, and industrial applications with maximum energy output.
                </p>

                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Rooftop & Ground-mounted
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        25-year warranty
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Smart monitoring systems
                    </li>
                </ul>

                <button class="w-full py-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-lg hover:from-yellow-600 hover:to-orange-600 transition-all duration-200">
                    Learn More
                </button>
            </div>

            {{-- Wind Energy --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-blue-200"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-4">Wind Energy Solutions</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Advanced wind turbine systems engineered for optimal performance in various wind conditions and environments.
                </p>

                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Onshore & Offshore
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Predictive maintenance
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Grid integration
                    </li>
                </ul>

                <button class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-200">
                    Learn More
                </button>
            </div>

            {{-- Hydroelectric --}}
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-green-200"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hydroelectric Power</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Sustainable hydroelectric installations that harness water flow to generate clean, reliable renewable energy.
                </p>

                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Micro & Small hydro
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Minimal environmental impact
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        24/7 power generation
                    </li>
                </ul>

                <button class="w-full py-3 bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold rounded-lg hover:from-green-600 hover:to-teal-600 transition-all duration-200">
                    Learn More
                </button>
            </div>
        </div>

        {{-- Additional Services --}}
        <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 lg:p-12" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="text-center mb-8"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Additional Services</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Complete support throughout your renewable energy journey.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Energy Audit --}}
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Energy Audit</h4>
                    <p class="text-gray-600 text-sm">Comprehensive analysis of your current energy usage and efficiency opportunities.</p>
                </div>

                {{-- Project Planning --}}
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Project Planning</h4>
                    <p class="text-gray-600 text-sm">Detailed planning and design services from concept to installation completion.</p>
                </div>

                {{-- Maintenance --}}
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Maintenance</h4>
                    <p class="text-gray-600 text-sm">Ongoing maintenance and support to ensure optimal system performance and longevity.</p>
                </div>

                {{-- Consulting --}}
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow duration-200"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Consulting</h4>
                    <p class="text-gray-600 text-sm">Expert consultation on sustainability strategy and renewable energy integration.</p>
                </div>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="text-center mt-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Ready to Start Your Renewable Energy Project?
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Get a free consultation and customized energy solution proposal for your specific needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-green-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Get Free Quote
                    </button>
                    <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all duration-200">
                        View All Services
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
