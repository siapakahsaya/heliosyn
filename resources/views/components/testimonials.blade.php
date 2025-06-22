{{-- resources/views/components/testimonials.blade.php --}}
<section class="py-20 bg-white relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-green-100 rounded-full opacity-30 -translate-x-48 -translate-y-48"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tr from-green-100 to-blue-100 rounded-full opacity-30 translate-x-40 translate-y-40"></div>

    <div class="container mx-auto px-6 lg:px-8 relative">
        {{-- Section Header --}}
        <div class="text-center mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-4"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
                Client Testimonials
            </div>

            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6"
                x-show="inView"
                x-transition:enter="transition ease-out duration-600 delay-200"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0">
                What Our
                <span class="bg-gradient-to-r from-blue-600 to-green-600 bg-clip-text text-transparent">
                    Clients Say
                </span>
            </h2>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed"
               x-show="inView"
               x-transition:enter="transition ease-out duration-600 delay-300"
               x-transition:enter-start="opacity-0 translate-y-4"
               x-transition:enter-end="opacity-100 translate-y-0">
                Hear from satisfied customers who've transformed their energy future with our renewable solutions.
            </p>
        </div>

        {{-- Featured Testimonial --}}
        <div class="mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-3xl p-8 lg:p-12 relative overflow-hidden"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                {{-- Quote Icon --}}
                <div class="absolute top-6 left-6 w-16 h-16 bg-white/50 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 6a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM4 14a1 1 0 100 2h8a1 1 0 100-2H4z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <div class="grid lg:grid-cols-3 gap-8 items-center">
                    {{-- Testimonial Content --}}
                    <div class="lg:col-span-2">
                        <blockquote class="text-2xl lg:text-3xl font-semibold text-gray-900 leading-relaxed mb-6">
                            "EcoEnergy transformed our manufacturing facility with a 25MW solar installation that exceeded all expectations. We've achieved 80% energy cost reduction while meeting our sustainability goals."
                        </blockquote>

                        <div class="flex items-center space-x-4">
                            {{-- Avatar --}}
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-green-500 rounded-2xl flex items-center justify-center text-white font-bold text-xl">
                                JS
                            </div>

                            {{-- Client Info --}}
                            <div>
                                <div class="font-bold text-gray-900 text-lg">James Sullivan</div>
                                <div class="text-gray-600">CEO, GreenTech Manufacturing</div>
                                <div class="flex items-center mt-1">
                                    <div class="flex space-x-1">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-500 ml-2">5.0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Project Stats --}}
                    <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6">
                        <h4 class="font-bold text-gray-900 mb-4">Project Highlights</h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Installation Size</span>
                                <span class="font-semibold text-green-600">25 MW</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Cost Reduction</span>
                                <span class="font-semibold text-blue-600">80%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Completion Time</span>
                                <span class="font-semibold text-purple-600">6 Months</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">CO₂ Reduced</span>
                                <span class="font-semibold text-orange-600">15K tons/year</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            {{-- Testimonial 1 --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 group"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                {{-- Quote --}}
                <div class="mb-6">
                    <svg class="w-8 h-8 text-green-600 mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13H14a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <blockquote class="text-gray-900 text-lg leading-relaxed">
                        "The residential solar system has been amazing. Our electricity bills dropped by 90% and the installation process was seamless."
                    </blockquote>
                </div>

                {{-- Client Info --}}
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white font-bold">
                        MJ
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Maria Johnson</div>
                        <div class="text-gray-600 text-sm">Homeowner, California</div>
                        <div class="flex items-center mt-1">
                            <div class="flex space-x-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">5.0</span>
                        </div>
                    </div>
                </div>

                {{-- System Type --}}
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">System Type</span>
                        <span class="font-semibold text-green-600">Residential Solar</span>
                    </div>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 group"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="mb-6">
                    <svg class="w-8 h-8 text-blue-600 mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" clip-rule="evenodd"></path>
                    </svg>
                    <blockquote class="text-gray-900 text-lg leading-relaxed">
                        "Our wind farm project exceeded all performance expectations. EcoEnergy's expertise in offshore installations is unmatched."
                    </blockquote>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center text-white font-bold">
                        RA
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Robert Anderson</div>
                        <div class="text-gray-600 text-sm">Energy Director, CleanCorp</div>
                        <div class="flex items-center mt-1">
                            <div class="flex space-x-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">5.0</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">System Type</span>
                        <span class="font-semibold text-blue-600">Offshore Wind</span>
                    </div>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 group"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-8"
                 x-transition:enter-end="opacity-100 translate-y-0">

                <div class="mb-6">
                    <svg class="w-8 h-8 text-teal-600 mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z" clip-rule="evenodd"></path>
                    </svg>
                    <blockquote class="text-gray-900 text-lg leading-relaxed">
                        "The micro-hydro system provides reliable 24/7 power for our community. Professional installation and excellent ongoing support."
                    </blockquote>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl flex items-center justify-center text-white font-bold">
                        DC
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Dr. Sarah Chen</div>
                        <div class="text-gray-600 text-sm">Mayor, Mountain View</div>
                        <div class="flex items-center mt-1">
                            <div class="flex space-x-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">5.0</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">System Type</span>
                        <span class="font-semibold text-teal-600">Micro Hydro</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Trust Indicators --}}
        <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-3xl p-8 lg:p-12 mb-16" x-data="{ inView: false }" x-intersect="inView = true">
            <div class="text-center mb-8"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Trusted by Industry Leaders</h3>
                <p class="text-lg text-gray-600">
                    Join hundreds of satisfied customers who've made the switch to renewable energy.
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-100"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent mb-2">
                        4.9/5
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Average Rating</div>
                    <div class="text-gray-500 text-sm mt-1">From 500+ Reviews</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-200"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-2">
                        98%
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Client Satisfaction</div>
                    <div class="text-gray-500 text-sm mt-1">Would Recommend</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent mb-2">
                        250+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Happy Clients</div>
                    <div class="text-gray-500 text-sm mt-1">Worldwide</div>
                </div>

                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="text-4xl font-bold bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent mb-2">
                        13+
                    </div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Years</div>
                    <div class="text-gray-500 text-sm mt-1">Of Excellence</div>
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
                    Ready to Join Our Satisfied Customers?
                </h3>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Experience the same quality service and exceptional results that our clients rave about.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-green-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Get Your Quote
                    </button>
                    <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-blue-600 hover:text-blue-600 transition-all duration-200">
                        Read More Reviews
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
