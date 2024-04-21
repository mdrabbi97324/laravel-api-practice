<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <style>
        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
    </style>
</head>

<body class=" 2xl:container mx-auto poppins-medium">
    <div class="w-full grid grid-cols-1 lg:grid-cols-4">
        <div class=" w-full flex-shrink flex-grow-0 px-4 cols-span-1">
            <!-- Sidebar -->
            <!-- End Sidebar -->
            <!-- <div id="docs-sidebar" class="fixed top-0 bottom-0 h-screen bg-white font-medium p-6"> -->
            <div id="docs-sidebar" class=" h-screen font-medium p-6 hs-overlay [--auto-close:md] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0  bottom-0 z-[60] w-64 bg-white  pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700">
                <img alt="Peerlist" loading="lazy" width="124" height="32" src="https://dqy38fnwh4fqs.cloudfront.net/website/peerlist-logo-full.svg">
                <nav class="hs-accordion-group max-w-xs flex flex-col flex-wrap text-lg mt-10" data-hs-accordion-always-open>
                    <ul class="space-y-1.5">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white" href="#">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                               Scrolls
                            </a>
                        </li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                    <line x1="16" x2="16" y1="2" y2="6" />
                                    <line x1="8" x2="8" y1="2" y2="6" />
                                    <line x1="3" x2="21" y1="10" y2="10" />
                                    <path d="M8 14h.01" />
                                    <path d="M12 14h.01" />
                                    <path d="M16 14h.01" />
                                    <path d="M8 18h.01" />
                                    <path d="M12 18h.01" />
                                    <path d="M16 18h.01" />
                                </svg>
                                Projects
                            </a></li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[18px] h-[18px]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                </svg>

                                Inbox
                            </a></li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                    <path d="M12 12l0 .01" />
                                    <path d="M3 13a20 20 0 0 0 18 0" />
                                </svg>
                                Jobs
                            </a></li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                                search
                            </a></li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">


                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-star">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                    <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                </svg>
                                My Network
                            </a></li>
                        <li><a class="flex my-5 items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <div class="flex-shrink-0 group block">
                                    <div class="flex items-center">
                                        <img class="inline-block flex-shrink-0 size-8 rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                                        <div class="ms-3">
                                            <h3 class="font-medium text-gray-800 dark:text-white">Jane</h3>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a class="flex items-center gap-x-3.5 py-2 px-2.5  text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-mobile">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                                    <path d="M11 4h2" />
                                    <path d="M12 17v.01" />
                                </svg>
                                Get Mobile App
                            </a></li>
                    </ul>
                    <div class="flex items-center flex-wrap text-sm gap-1 text-gray-600 max-w-xs fixed bottom-0 px-5 py-3">
                        <a href="">Blog</a>
                        . <a href="">Help</a>
                        . <a href="">Support</a>
                        . <a href="">T&C</a>
                        . <a href="">Code of Conduct</a>
                        . <a href="">Privacy</a>
                        <p class="text-gray-400 text-xs">&#169;2024 Peerlist, Inc. v1.0.0</p>
                    </div>

                </nav>
            </div>
            <!-- Navigation Toggle -->

            <!-- End Navigation Toggle -->


        </div>
        <main role="main" class="col-span-2  border-x border-gray-200 h-full">
            <h1 class="text-2xl mb-4  font-medium bg-white h-16 border-b py-6 pl-6 w-full inline-flex items-center gap-2"><svg fill="#000000" width="30px" height="30px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/s30" preserveAspectRatio="xMidYMid">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M16.000,32.000 C7.178,32.000 -0.000,24.822 -0.000,16.000 C-0.000,7.178 7.178,-0.000 16.000,-0.000 C24.822,-0.000 32.000,7.178 32.000,16.000 C32.000,24.822 24.822,32.000 16.000,32.000 ZM16.000,2.000 C8.280,2.000 2.000,8.280 2.000,16.000 C2.000,23.720 8.280,30.000 16.000,30.000 C23.720,30.000 30.000,23.720 30.000,16.000 C30.000,8.280 23.720,2.000 16.000,2.000 ZM23.000,17.000 L11.414,17.000 L13.707,19.293 C14.098,19.684 14.098,20.316 13.707,20.707 C13.512,20.902 13.256,21.000 13.000,21.000 C12.744,21.000 12.488,20.902 12.293,20.707 L8.293,16.707 C8.201,16.615 8.128,16.505 8.077,16.382 C7.976,16.138 7.976,15.862 8.077,15.618 C8.128,15.495 8.201,15.385 8.293,15.293 L12.293,11.293 C12.684,10.902 13.316,10.902 13.707,11.293 C14.098,11.684 14.098,12.316 13.707,12.707 L11.414,15.000 L23.000,15.000 C23.552,15.000 24.000,15.448 24.000,16.000 C24.000,16.552 23.552,17.000 23.000,17.000 Z"></path>
                    </g>
                </svg> Settings
                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M16.707,18.707a1,1,0,0,1-1.414-1.414L19.586,13H2a1,1,0,0,1,0-2H19.586L15.293,6.707a1,1,0,0,1,1.414-1.414l6,6a1,1,0,0,1,0,1.414Z"></path>
                    </g>
                </svg>
                Profile
            </h1>

            <div class="px-6">


                <div class="flex justify-center items-center mt-4 mb-10">
                    <div class="flex-grow border-b border-black"></div>
                    <div class="mx-2 text-center">
                        <div class="px-3 flex gap-2 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            BASIC PROFILE
                        </div>
                    </div>
                    <div class="flex-grow border-b border-black"></div>
                </div>

                <div class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <img class="inline-block flex-shrink-0 size-[62px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                        <div class="ms-3">
                            <h3 class="font-semibold text-green-600 dark:text-white">Upload New</h3>
                            <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">Recommended size: 400x400px</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 my-7">
                    <div class="max-w-sm">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">First Name</label>
                        <input type="text" id="input-label" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John">
                    </div>
                    <div class="max-w-sm">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Last Name</label>
                        <input type="text" id="input-label" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Doe">
                    </div>
                </div>

                <div>
                    <label for="textarea-label-with-helper-text" class=" flex justify-between items-center text-sm font-medium mb-2 dark:text-white">Brief Bio <span class="text-gray-500 dark:text-neutral-500 text-xs">26/200</span></label>
                    <textarea id="textarea-label-with-helper-text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="3" aria-describedby="hs-textarea-helper-text"></textarea>
                    <p class="mt-2 text-xs text-gray-500 dark:text-neutral-500" id="hs-textarea-helper-text">This is the very first thing peers read about you after your name</p>
                </div>

                <div class="flex space-x-2 mt-10">
                    <div class="w-1/4">
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Country</label>
                        <select id="hs-select-label" class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected=""></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="w-1/4">
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">City</label>
                        <select id="hs-select-label" class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Menlo Park</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="w-2/4">
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Personal Pronounce</label>
                        <select id="hs-select-label" class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected=""></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                </div>
                <div class="mt-2 flex items-center gap-2">
                    <input type="checkbox" class="shrink-0 size-4 border border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-checkbox-group-2">
                    <label for="hs-checkbox-group-2" class="text-sm text-gray-500 dark:text-neutral-400">Remote</label>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-5 mb-10">
                    <div class="max-w-sm">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Website</label>
                        <input type="text" id="input-label" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                    </div>
                    <div class="max-w-sm">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Calender Link</label>
                        <input type="text" id="input-label" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                        <p class="mt-2 text-xs text-gray-500 dark:text-neutral-500" id="hs-textarea-helper-text">Add your Cal.com or Calendy URL</p>
                    </div>
                </div>

                <div class="flex justify-center items-center mb-10">
                    <div class="flex-grow border-b border-black"></div>
                    <div class="mx-2 text-center">
                        <div class="px-3 flex gap-2 font-semibold">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M9.72104 20H12.358C14.5854 20 15.6992 20 16.6289 19.4672C17.5586 18.9345 18.1488 17.958 19.3294 16.005L20.0102 14.8787C21.0034 13.2357 21.5 12.4142 21.5 11.5C21.5 10.5858 21.0034 9.76431 20.0102 8.12126L19.3294 6.99501C18.1488 5.04203 17.5586 4.06554 16.6289 3.53277C15.6992 3 14.5854 3 12.358 3H9.72104C5.84561 3 3.90789 3 2.70394 4.2448C1.5 5.48959 1.5 7.49306 1.5 11.5C1.5 15.5069 1.5 17.5104 2.70394 18.7552C3.90789 20 5.8456 20 9.72104 20Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M6.5 6.99512V16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>

                            PROFILE TAGS
                        </div>
                    </div>
                    <div class="flex-grow border-b border-black"></div>
                </div>
                <div>
                    <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white ">Search skills, tools, roles</label>
                    <div class="inline-flex flex-wrap gap-2 border  w-full p-5 rounded-lg">
                        <div class="inline-flex flex-nowrap items-center bg-black text-white border border-gray-200 rounded-full p-1.5 pe-3 dark:bg-neutral-900 dark:border-neutral-700">
                            <svg width="20px" height="20px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 16C16 13.7909 17.7909 12 20 12C22.2091 12 24 13.7909 24 16C24 18.2091 22.2091 20 20 20C17.7909 20 16 18.2091 16 16Z" fill="#1ABCFE" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 24C8 21.7909 9.79086 20 12 20H16V24C16 26.2091 14.2091 28 12 28C9.79086 28 8 26.2091 8 24Z" fill="#0ACF83" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 4V12H20C22.2091 12 24 10.2091 24 8C24 5.79086 22.2091 4 20 4H16Z" fill="#FF7262" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 8C8 10.2091 9.79086 12 12 12H16V4H12C9.79086 4 8 5.79086 8 8Z" fill="#F24E1E" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C8 18.2091 9.79086 20 12 20H16V12H12C9.79086 12 8 13.7909 8 16Z" fill="#A259FF" />
                            </svg>
                            <div class="whitespace-nowrap text-sm font-medium">
                                Figma
                            </div>
                            <div class="ms-2.5 inline-flex justify-center items-center size-5 rounded-full text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Close</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Close">
                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                                                <line x1="16.9999" y1="7" x2="7.00001" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                                <line x1="7.00006" y1="7" x2="17" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                        </div>

                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-black">
                            <img class="me-1.5 inline-block size-6 rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                            <div class="whitespace-nowrap text-sm font-medium text-white dark:text-white">
                                Mark
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-5 rounded-full text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Close</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Close">
                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                                                <line x1="16.9999" y1="7" x2="7.00001" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                                <line x1="7.00006" y1="7" x2="17" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-black">
                            <div class="whitespace-nowrap text-sm font-medium text-white dark:text-white">
                                Product Designer
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-5 rounded-full text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Close</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Close">
                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                                                <line x1="16.9999" y1="7" x2="7.00001" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                                <line x1="7.00006" y1="7" x2="17" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-black">
                            <div class="whitespace-nowrap text-sm font-medium text-white dark:text-white">
                                UX Design
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-5 rounded-full text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Close</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Close">
                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                                                <line x1="16.9999" y1="7" x2="7.00001" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                                <line x1="7.00006" y1="7" x2="17" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-black">
                            <div class="whitespace-nowrap text-sm font-medium text-white dark:text-white">
                                UI Design
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-5 rounded-full text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Close</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Close">
                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                                                <line x1="16.9999" y1="7" x2="7.00001" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                                <line x1="7.00006" y1="7" x2="17" y2="16.9999" id="Path" stroke="#ffffff" stroke-width="2" stroke-linecap="round"> </line>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-md font-semibold mt-6 mb-4">Suggested Skills</p>
                    <div class="flex flex-wrap gap-3  w-full p-3 rounded-lg font-semibold">
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                UX Research
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                Product Designer
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                Product Manager
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                Photoshop
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                VS Code
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                GitHub
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inline-flex flex-nowrap items-center border border-gray-200 rounded-full p-1.5 dark:bg-neutral-900 dark:border-neutral-700 bg-white">
                            <div class="whitespace-nowrap text-black dark:text-white">
                                Docker
                            </div>
                            <div class="ms-2 inline-flex justify-center items-center size-6 p-1 rounded-full border  text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-neutral-700/50 dark:hover:bg-neutral-700 dark:text-neutral-400 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </main>
        <div class="h-screen col-span-1 border-e ">
            <div class="border-b h-16 p-4 flex items-center gap-3 justify-center">
                <!-- SearchBox -->
                <div class="relative w-1/2">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input class="py-2 ps-10 pe-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" placeholder="Type a name" value="" data-hs-combo-box-input="">
                    <!-- End SearchBox Dropdown -->
                </div>
                <div class="border border-gray-300 rounded-full p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-gift">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                        <path d="M12 8l0 13" />
                        <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                        <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                    </svg>
                </div>
                <div class="border border-gray-300 rounded-full p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                </div>
                <img class="inline-block size-8 rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">

                <button type="button" class="text-gray-500 hover:text-gray-600 lg:hidden w-10 h-10" data-hs-overlay="#docs-sidebar" data-hs-overlay="#docs-sidebar" aria-controls="docs-sidebar" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg class="flex-shrink-0 size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

            </div>
            <ul class="mt-10 space-y-8 text-gray-400">
                <li class="pl-6 py-3 text-gray-800 font-semibold bg-gray-200 border-l-4 border-green-600">Profile</li>
                <li class="pl-6">Inbox</li>
                <li class="pl-6">Accounts</li>
                <li class="pl-6">Notifications</li>
                <li class="pl-6">Job Preferences</li>
            </ul>
        </div>
    </div>
    </div>
</body>

</html>