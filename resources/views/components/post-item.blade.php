                    <div class="flex bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs mb-8">
                        <div class="p-5 flex-1">
                            <a href="#">
                                <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            <div class="mb-6 text-body">
                                {{ Str::words($post->content, 20) }}
                            </div>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                        <a href="#">
                            <img class="w-48 h-full object-cover rounded-r-lg"
                                src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>
