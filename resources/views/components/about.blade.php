{{-- resources/views/components/about-us.blade.php --}}
<section class="py-20 bg-gradient-to-br from-green-50 via-white to-blue-50 relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" class="text-green-600"/>
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
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13H14a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                About EcoEnergy
            </div>

            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6"
                x-show="inView"
                x-transition:enter="transition ease-out duration-600 delay-200"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0">
                Powering Tomorrow with
                <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Clean Energy
                </span>
            </h2>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed"
               x-show="inView"
               x-transition:enter="transition ease-out duration-600 delay-300"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0">
                We're leading the renewable energy revolution, creating sustainable solutions that protect our planet while powering communities across the globe.
            </p>
        </div>

        {{-- Main Content Grid --}}
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
            {{-- Left Content --}}
            <div x-data="{ inView: false }" x-intersect="inView = true">
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600"
                     x-transition:enter-start="opacity-0 -translate-x-8"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">
                        Our Mission: A Sustainable Future for All
                    </h3>

                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Since 2010, EcoEnergy has been at the forefront of renewable energy innovation. We believe that sustainable energy isn't just an option—it's the only path forward for our planet and future generations.
                    </p>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our team of dedicated engineers, environmental scientists, and sustainability experts work tirelessly to develop cutting-edge solutions that make clean energy accessible, affordable, and efficient for businesses and communities worldwide.
                    </p>

                    {{-- Key Points --}}
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Carbon Neutral Operations</h4>
                                <p class="text-gray-600">100% renewable energy in all our facilities since 2018</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Global Impact</h4>
                                <p class="text-gray-600">Projects across 25+ countries, 500MW+ installed capacity</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Innovation First</h4>
                                <p class="text-gray-600">R&D investment of 15% annual revenue in clean technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Visual --}}
            <div class="relative" x-data="{ inView: false }" x-intersect="inView = true">
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-x-8"
                     x-transition:enter-end="opacity-100 translate-x-0">

                    {{-- Main Image Container --}}
                    <div class="relative bg-gradient-to-br from-green-400 to-blue-500 rounded-2xl p-8 shadow-2xl">
                        {{-- Background Pattern --}}
                        <div class="absolute inset-0 bg-white/10 rounded-2xl backdrop-blur-sm"></div>

                        {{-- Content --}}
                        <div class="relative z-10">
                            {{-- Solar Panel Icon --}}
                            <div class="w-24 h-24 bg-white/20 rounded-xl flex items-center justify-center mb-6 backdrop-blur-sm">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 6v12M10 6v12M14 6v12M18 6v12"></path>
                                </svg>
                            </div>

                            <h4 class="text-2xl font-bold text-white mb-4">
                                Leading Innovation
                            </h4>

                            <p class="text-white/90 text-lg mb-6">
                                From cutting-edge solar technology to advanced wind solutions, we're pioneering the future of clean energy.
                            </p>

                            {{-- Stats --}}
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white/10 rounded-lg p-3 backdrop-blur-sm">
                                    <div class="text-2xl font-bold text-white">13+</div>
                                    <div class="text-white/80 text-sm">Years Experience</div>
                                </div>
                                <div class="bg-white/10 rounded-lg p-3 backdrop-blur-sm">
                                    <div class="text-2xl font-bold text-white">200+</div>
                                    <div class="text-white/80 text-sm">Expert Team</div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating Elements --}}
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400 rounded-full animate-pulse"></div>
                        <div class="absolute -bottom-2 -left-2 w-6 h-6 bg-green-300 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Values Section --}}
        <div class="mb-20" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="text-center mb-12"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    The principles that guide everything we do and every decision we make.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Sustainability --}}
                <div class="text-center group"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Sustainability</h4>
                    <p class="text-gray-600">Every solution we create contributes to a healthier planet and sustainable future for generations to come.</p>
                </div>

                {{-- Innovation --}}
                <div class="text-center group"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Innovation</h4>
                    <p class="text-gray-600">We continuously push boundaries, developing cutting-edge technologies that redefine what's possible in renewable energy.</p>
                </div>

                {{-- Excellence --}}
                <div class="text-center group"
                     x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Excellence</h4>
                    <p class="text-gray-600">We deliver exceptional quality in every project, ensuring the highest standards in safety, performance, and reliability.</p>
                </div>
            </div>
        </div>

        {{-- Statistics Section --}}
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="text-center mb-8"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Our Impact in Numbers</h3>
                <p class="text-lg text-gray-600">
                    Real results that showcase our commitment to sustainable energy solutions.
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 text-center">
                {{-- Stat 1 --}}
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent mb-2">
                        500+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">MW Installed</div>
                    <div class="text-gray-500 text-sm mt-1">Renewable Capacity</div>
                </div>

                {{-- Stat 2 --}}
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-2">
                        1.2M
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Tons CO₂</div>
                    <div class="text-gray-500 text-sm mt-1">Reduced Annually</div>
                </div>

                {{-- Stat 3 --}}
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent mb-2">
                        150+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Projects</div>
                    <div class="text-gray-500 text-sm mt-1">Successfully Completed</div>
                </div>

                {{-- Stat 4 --}}
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent mb-2">
                        25+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Countries</div>
                    <div class="text-gray-500 text-sm mt-1">Global Presence</div>
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
                    Ready to Join the Clean Energy Revolution?
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Partner with us to create sustainable energy solutions that benefit your business and the planet.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Get Started Today
                    </button>
                    <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-green-600 hover:text-green-600 transition-all duration-200">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
