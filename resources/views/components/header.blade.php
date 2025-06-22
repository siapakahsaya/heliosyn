{{-- resources/views/components/header.blade.php --}}
<div class="relative overflow-hidden bg-gradient-to-br from-green-50 to-blue-50 min-h-screen flex items-center">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
            </pattern>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>
    </div>

    {{-- Floating Elements --}}
    <div class="absolute top-20 left-10 w-20 h-20 bg-green-200 rounded-full opacity-20 animate-bounce"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-blue-200 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute bottom-40 left-20 w-12 h-12 bg-yellow-200 rounded-full opacity-20 animate-bounce delay-300"></div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content Section --}}
            <div class="text-center lg:text-left space-y-8">
                {{-- Badge --}}
                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Sustainable Future
                </div>

                {{-- Main Heading --}}
                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Powering Tomorrow with
                        <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                            Clean Energy
                        </span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-2xl">
                        We harness the power of wind, solar, and innovative technologies to create sustainable energy solutions for a greener planet.
                    </p>
                </div>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="px-8 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-xl hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Explore Solutions
                    </button>
                    <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-green-500 hover:text-green-600 transition-all duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                        </svg>
                        Watch Video
                    </button>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-600">500+</div>
                        <div class="text-sm text-gray-600">Projects Completed</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-blue-600">2.5GW</div>
                        <div class="text-sm text-gray-600">Energy Generated</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-yellow-600">15+</div>
                        <div class="text-sm text-gray-600">Years Experience</div>
                    </div>
                </div>
            </div>

            {{-- Image Section --}}
            <div class="relative">
                {{-- Main Image Container --}}
                <div class="relative z-10">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img
                            src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Wind turbines in renewable energy field"
                            class="w-full h-[500px] object-cover"
                        >
                        {{-- Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>

                        {{-- Floating Card --}}
                        <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-sm rounded-xl p-4 shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-900">Wind Farm Project</div>
                                    <div class="text-sm text-gray-600">Generating 150MW Clean Energy</div>
                                </div>
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Decorative Elements --}}
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-gradient-to-br from-blue-400 to-green-500 rounded-full opacity-20 animate-bounce delay-700"></div>
            </div>
        </div>
    </div>

    {{-- Bottom Wave --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-20 fill-white" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
        </svg>
    </div>
</div>
