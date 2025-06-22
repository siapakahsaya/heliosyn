{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-gray-900 text-white relative overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
            <defs>
                <pattern id="footer-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M0 20L20 0M-5 5L5 -5M15 25L25 15" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#footer-pattern)" class="text-green-400"/>
        </svg>
    </div>

    {{-- Newsletter Section --}}
    <div class="bg-gradient-to-r from-green-600 to-blue-600 relative">
        <div class="container mx-auto px-6 lg:px-8 py-16">
            <div class="text-center" x-data="{ inView: false }" x-intersect="inView = true">
                <div x-show="inView"
                     x-transition:enter="transition ease-out duration-600"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <h3 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                        Stay Updated on Clean Energy
                    </h3>
                    <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                        Get the latest news, insights, and tips on renewable energy solutions delivered to your inbox.
                    </p>

                    {{-- Newsletter Form --}}
                    <div class="max-w-md mx-auto" x-data="{ email: '', subscribed: false }">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <div class="flex-1">
                                <input x-model="email"
                                       type="email"
                                       placeholder="Enter your email address"
                                       class="w-full px-4 py-3 rounded-lg text-gray-900 bg-white/95 border border-white/20 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent backdrop-blur-sm">
                            </div>
                            <button @click="subscribed = true; email = ''"
                                    :disabled="!email || subscribed"
                                    class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white/50 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                                <span x-show="!subscribed">Subscribe</span>
                                <span x-show="subscribed" class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Subscribed!
                                </span>
                            </button>
                        </div>
                        <p class="text-green-100 text-sm mt-3">
                            No spam, unsubscribe at any time. Read our
                            <a href="#" class="underline hover:text-white">Privacy Policy</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Footer Content --}}
    <div class="container mx-auto px-6 lg:px-8 py-16 relative">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 lg:gap-12" x-data="{ inView: false }" x-intersect="inView = true">

            {{-- Company Info --}}
            <div class="lg:col-span-1"
                 x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-100"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">

                {{-- Logo --}}
                <div class="flex items-center space-x-3 mb-6">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 w-12 h-12 bg-green-400 rounded-xl animate-ping opacity-20"></div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white">EcoEnergy</h3>
                        <p class="text-green-400 text-sm">Renewable Solutions</p>
                    </div>
                </div>

                <p class="text-gray-300 mb-6 leading-relaxed">
                    Leading the renewable energy revolution with innovative solar, wind, and hydroelectric solutions for a sustainable future.
                </p>

                {{-- Social Media --}}
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors duration-200 group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-200 group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors duration-200 group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-red-600 transition-colors duration-200 group">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-200"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-bold text-white mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            About Us
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Our Services
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Projects
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Case Studies
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            News & Insights
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-green-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            Contact Us
                        </a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-300"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-bold text-white mb-6">Our Services</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            Solar Power Systems
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                            Wind Energy Solutions
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z" clip-rule="evenodd"></path>
                            </svg>
                            Hydroelectric Power
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" clip-rule="evenodd"></path>
                            </svg>
                            Energy Audits
                        </a></li>
                    <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-200 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
                            </svg>
                            System Maintenance
                        </a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div x-show="inView"
                 x-transition:enter="transition ease-out duration-600 delay-400"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0">
                <h4 class="text-lg font-bold text-white mb-6">Get in Touch</h4>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-300 leading-relaxed">
                                1234 Green Energy Blvd<br>
                                Sustainable City, SC 12345<br>
                                United States
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-300">+1 (555) 123-4567</p>
                            <p class="text-gray-400 text-sm">Mon-Fri 8AM-6PM</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-300">info@ecoenergy.com</p>
                            <p class="text-gray-400 text-sm">24/7 Support</p>
                        </div>
                    </div>

                    {{-- Certifications --}}
                    <div class="pt-4">
                        <p class="text-sm text-gray-400 mb-2">Certified & Accredited</p>
                        <div class="flex space-x-2">
                            <div class="w-8 h-8 bg-gray-700 rounded flex items-center justify-center">
                                <span class="text-xs font-bold text-green-400">ISO</span>
                            </div>
                            <div class="w-8 h-8 bg-gray-700 rounded flex items-center justify-center">
                                <span class="text-xs font-bold text-blue-400">IEC</span>
                            </div>
                            <div class="w-8 h-8 bg-gray-700 rounded flex items-center justify-center">
                                <span class="text-xs font-bold text-yellow-400">CE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-6 lg:px-8 py-8">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">

                {{-- Copyright --}}
                <div class="text-gray-400 text-sm text-center lg:text-left">
                    <p>&copy; 2025 EcoEnergy. All rights reserved. Powering the future with renewable energy.</p>
                </div>

                {{-- Legal Links --}}
                <div class="flex flex-wrap justify-center lg:justify-end space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-200">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-200">Cookie Policy</a>
                    <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-200">Sitemap</a>
                </div>
            </div>

            {{-- Back to Top Button --}}
            <div class="text-center mt-8" x-data="{ showButton: false }" @scroll.window="showButton = window.pageYOffset > 300">
                <button @click="window.scrollTo({top: 0, behavior: 'smooth'})"
                        x-show="showButton"
                        x-transition
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg hover:from-green-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                    Back to Top
                </button>
            </div>
        </div>
    </div>
</footer>
