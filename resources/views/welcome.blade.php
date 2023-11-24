<x-guest-layout>
        <header>
            <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="{{URL::asset('/images/success-hub-logo.svg')}}" class="h-6 mr-3 sm:h-9" alt="Success Hub Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Stoute Success Hub</span>
                    </a>
                    <div class="flex items-center lg:order-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                            <a href="{{ route('register') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get started</a>
                        @endauth
                    @endif
                    </div>
                </div>
            </nav>
        </header>
        <!-- HERO -->
        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-12">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Ready to Succeed?</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Take the right steps for your businesses future by bringing on an entire marketing team for less than the cost of a single employee with the Stoute Success Hub.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        View Dashboard
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    @else
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Get Started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        Login
                    </a> 
                    @endauth 
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 ">
                <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Meet Your Team</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">When you have the Success Hub, its like you have hired an entire marketing team for your business. Meet your new marketing team!</p>
                </div> 
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{URL::asset('/images/paul-s-headshot.jpeg')}}" alt="Paul Stoute">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Paul Stoute</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Bonnie drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div> 
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Jaypee M.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">CTO</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Jese drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div> 
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Dennis P.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Senior Front-end Developer</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Michael drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div> 
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Jovel M.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div>  
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span>Paul M. <small>(he/him)</small></span>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div>  
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">John Paul (JP) S.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div>  
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Cristan (CJ) I.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div>  
                    <div class="items-center bg-white rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <span>
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                        </span>
                        <div class="p-5">
                            <h3 class="text-xl tracking-tight text-gray-900 dark:text-white">
                                <span class="font-bold">Joseph A.</span> <small class="text-sm">(he/him)</small>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        </div>
                    </div>  
                </div>  
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
            <div class="max-w-screen-xl mx-auto">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://stoutewebsolutions.com" class="flex items-center">
                            <img src="{{URL::asset('/images/success-hub-logo.svg')}}" class="h-8 mr-3" alt="Success Hub Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Stoute Web Solutions</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div></div>
                        <div></div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="https://stoutewebsolutions.com/legal/privacy-policy/" class="hover:underline" target="_BLANK">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="https://stoutewebsolutions.com/legal/terms-of-service/" class="hover:underline" target="_BLANK">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2013-{{ now()->year }} <a href="https://stoutewebsolutions.com" class="hover:underline">Stoute Web Solutions™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/StouteWebSolutions" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/stoutewebsoln/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <!-- Twitter -->
                        <a href="https://twitter.com/StouteWebSoln" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/stoute-web-solutions/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/><path d="M3 5.012H0V15h3V5.012Z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@stoutewebsolutions6997" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14"><path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
</x-guest-layout>
