{{-- resources/views/components/navbar.blade.php --}}
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     x-data="{
        isOpen: false,
        scrolled: false,
        activeDropdown: null,

        init() {
            const handleScroll = () => {
                this.scrolled = window.pageYOffset > 50;
            };
            window.addEventListener('scroll', handleScroll);

            this.$nextTick(() => {
                if (this.$el._x_cleanup) {
                    this.$el._x_cleanup.push(() => {
                        window.removeEventListener('scroll', handleScroll);
                    });
                } else {
                    this.$el._x_cleanup = [() => {
                        window.removeEventListener('scroll', handleScroll);
                    }];
                }
            });
        },

        toggleMobile() {
            this.isOpen = !this.isOpen;
            this.activeDropdown = null;
        },

        openDropdown(name) {
            this.activeDropdown = this.activeDropdown === name ? null : name;
        },

        closeDropdowns() {
            this.activeDropdown = null;
        },

        closeAll() {
            this.isOpen = false;
            this.activeDropdown = null;
        },

        isActiveDropdown(name) {
            return this.activeDropdown === name;
        }
     }"
     @click.away="closeDropdowns()"
     @keydown.escape="closeAll()"
     :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'">

    <div class="container mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo Section --}}
            <div class="flex items-center space-x-3">
                <div class="relative">
                    {{-- Logo Icon --}}
                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    {{-- Pulse effect --}}
                    <div class="absolute inset-0 w-10 h-10 bg-green-400 rounded-xl animate-ping opacity-20"></div>
                </div>
                <div>
                    <h1 class="text-xl font-bold" :class="scrolled ? 'text-gray-900' : 'text-white'">
                        EcoEnergy
                    </h1>
                    <p class="text-xs" :class="scrolled ? 'text-gray-600' : 'text-green-100'">
                        Renewable Solutions
                    </p>
                </div>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-8">
                {{-- Home --}}
                <a href="#" class="font-medium transition-colors duration-200 hover:text-green-600"
                   :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                    Home
                </a>

                {{-- About Dropdown --}}
                <div class="relative"
                     @mouseenter="openDropdown('about')"
                     @mouseleave="closeDropdowns()">
                    <button class="flex items-center font-medium transition-colors duration-200 hover:text-green-600"
                            :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                        About
                        <svg class="w-4 h-4 ml-1 transition-transform"
                             :class="isActiveDropdown('about') ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div x-show="isActiveDropdown('about')"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Our Story</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Mission & Vision</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Leadership Team</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Certifications</a>
                    </div>
                </div>

                {{-- Services Dropdown --}}
                <div class="relative"
                     @mouseenter="openDropdown('services')"
                     @mouseleave="closeDropdowns()">
                    <button class="flex items-center font-medium transition-colors duration-200 hover:text-green-600"
                            :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                        Services
                        <svg class="w-4 h-4 ml-1 transition-transform"
                             :class="isActiveDropdown('services') ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    {{-- Mega Dropdown --}}
                    <div x-show="isActiveDropdown('services')"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 mt-2 w-80 bg-white rounded-xl shadow-xl border border-gray-100 p-6 z-50">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-3">Energy Solutions</h3>
                                <div class="space-y-2">
                                    <a href="#" class="flex items-center text-gray-600 hover:text-green-600 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        Solar Power
                                    </a>
                                    <a href="#" class="flex items-center text-gray-600 hover:text-green-600 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                        </svg>
                                        Wind Energy
                                    </a>
                                    <a href="#" class="flex items-center text-gray-600 hover:text-green-600 transition-colors">
                                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13H14a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Hydroelectric
                                    </a>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-3">Consulting</h3>
                                <div class="space-y-2">
                                    <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Energy Audit</a>
                                    <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Project Planning</a>
                                    <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Sustainability Reports</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Projects --}}
                <a href="#" class="font-medium transition-colors duration-200 hover:text-green-600"
                   :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                    Projects
                </a>

                {{-- News --}}
                <a href="#" class="font-medium transition-colors duration-200 hover:text-green-600"
                   :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                    News
                </a>

                {{-- Contact --}}
                <a href="#" class="font-medium transition-colors duration-200 hover:text-green-600"
                   :class="scrolled ? 'text-gray-900 hover:text-green-600' : 'text-white hover:text-green-300'">
                    Contact
                </a>
            </div>

            {{-- CTA Button & Mobile Menu Button --}}
            <div class="flex items-center space-x-4">
                {{-- CTA Button --}}
                <div class="hidden lg:block">
                    <button class="px-6 py-2.5 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Get Quote
                    </button>
                </div>

                {{-- Mobile Menu Button --}}
                <button @click="toggleMobile()" class="lg:hidden p-2 rounded-lg transition-colors duration-200"
                        :class="scrolled ? 'text-gray-900 hover:bg-gray-100' : 'text-white hover:bg-white/10'">
                    <svg x-show="!isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden border-t border-white/20 bg-white/95 backdrop-blur-md">
            <div class="px-6 py-4 space-y-4">
                <a href="#" class="block text-gray-900 font-medium hover:text-green-600 transition-colors">Home</a>

                {{-- Mobile About Section --}}
                <div>
                    <button @click="openDropdown('mobile-about')" class="flex items-center justify-between w-full text-gray-900 font-medium hover:text-green-600 transition-colors">
                        About
                        <svg class="w-4 h-4 transition-transform"
                             :class="isActiveDropdown('mobile-about') ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="isActiveDropdown('mobile-about')"
                         x-transition
                         class="mt-2 ml-4 space-y-2">
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Our Story</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Mission & Vision</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Leadership Team</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Certifications</a>
                    </div>
                </div>

                {{-- Mobile Services Section --}}
                <div>
                    <button @click="openDropdown('mobile-services')" class="flex items-center justify-between w-full text-gray-900 font-medium hover:text-green-600 transition-colors">
                        Services
                        <svg class="w-4 h-4 transition-transform"
                             :class="isActiveDropdown('mobile-services') ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="isActiveDropdown('mobile-services')"
                         x-transition
                         class="mt-2 ml-4 space-y-2">
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Solar Power</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Wind Energy</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Hydroelectric</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Energy Audit</a>
                        <a href="#" class="block text-gray-600 hover:text-green-600 transition-colors">Project Planning</a>
                    </div>
                </div>

                <a href="#" class="block text-gray-900 font-medium hover:text-green-600 transition-colors">Projects</a>
                <a href="#" class="block text-gray-900 font-medium hover:text-green-600 transition-colors">News</a>
                <a href="#" class="block text-gray-900 font-medium hover:text-green-600 transition-colors">Contact</a>

                {{-- Mobile CTA --}}
                <div class="pt-4">
                    <button class="w-full px-6 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-lg hover:from-green-700 hover:to-green-800 transition-all duration-200 shadow-lg">
                        Get Quote
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
