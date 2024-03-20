<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>
{{-- bg-zinc-100 --}}

<body class="font-sans antialiased ">
    @include('components.layouts.navigation')
    <x-logo />
    <nav class="fi-sidebar-nav flex-grow flex flex-col gap-y-7 overflow-y-auto overflow-x-hidden px-6 py-8"
        style="scrollbar-gutter: stable">



        <ul class="fi-sidebar-nav-groups -mx-2 flex flex-col gap-y-7">
            <li x-data="{ label: null }" data-group-label="" class="fi-sidebar-group flex flex-col gap-y-1 fi-active">


                <ul class="fi-sidebar-group-items flex flex-col gap-y-1">

                    <li class="fi-sidebar-item fi-active fi-sidebar-item-active flex flex-col gap-y-1">
                        <a href="https://demo.filamentphp.com"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 bg-gray-100 dark:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-primary-600 dark:text-primary-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-primary-600 dark:text-primary-400">
                                Dashboard
                            </span>

                        </a>

                    </li>
                </ul>
            </li>
            <li x-data="{ label: 'Shop' }" data-group-label="Shop" class="fi-sidebar-group flex flex-col gap-y-1">
                <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                    class="fi-sidebar-group-button flex items-center gap-x-3 px-2 py-2 cursor-pointer">

                    <span
                        class="fi-sidebar-group-label flex-1 text-sm font-medium leading-6 text-gray-500 dark:text-gray-400">
                        Shop
                    </span>

                    <!--[if BLOCK]><![endif]--> <button
                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-sidebar-group-collapse-button"
                        title="Shop" type="button" x-bind:aria-expanded="! $store.sidebar.groupIsCollapsed(label)"
                        x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                        x-bind:class="{ '-rotate-180': $store.sidebar.groupIsCollapsed(label) }" aria-expanded="true">
                        <!--[if BLOCK]><![endif]--> <span class="sr-only">
                            Shop
                        </span>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->
                    </button>
                    <!--[if ENDBLOCK]><![endif]-->
                </div>


                <ul x-show="! $store.sidebar.groupIsCollapsed(label)" x-collapse.duration.200ms=""
                    class="fi-sidebar-group-items flex flex-col gap-y-1">

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/shop/products"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Products
                            </span>

                        </a>

                    </li>

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/shop/orders"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Orders
                            </span>

                            <span>
                                <span
                                    style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                    class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30 fi-color-primary">
                                    <!--[if BLOCK]><![endif]-->
                                    <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <span class="grid">
                                        <span class="truncate">
                                            162
                                        </span>
                                    </span>

                                    <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->
                                </span>
                            </span>
                        </a>

                    </li>

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/shop/customers"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Customers
                            </span>

                        </a>

                    </li>
                </ul>
            </li>
            <li x-data="{ label: 'Blog' }" data-group-label="Blog" class="fi-sidebar-group flex flex-col gap-y-1">
                <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                    class="fi-sidebar-group-button flex items-center gap-x-3 px-2 py-2 cursor-pointer">

                    <span
                        class="fi-sidebar-group-label flex-1 text-sm font-medium leading-6 text-gray-500 dark:text-gray-400">
                        Blog
                    </span>

                    <!--[if BLOCK]><![endif]--> <button
                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-sidebar-group-collapse-button"
                        title="Blog" type="button" x-bind:aria-expanded="! $store.sidebar.groupIsCollapsed(label)"
                        x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                        x-bind:class="{ '-rotate-180': $store.sidebar.groupIsCollapsed(label) }" aria-expanded="true">
                        <!--[if BLOCK]><![endif]--> <span class="sr-only">
                            Blog
                        </span>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->
                    </button>
                    <!--[if ENDBLOCK]><![endif]-->
                </div>


                <ul x-show="! $store.sidebar.groupIsCollapsed(label)" x-collapse.duration.200ms=""
                    class="fi-sidebar-group-items flex flex-col gap-y-1">

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/posts"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Posts
                            </span>

                        </a>

                    </li>

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/categories"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Categories
                            </span>

                        </a>

                    </li>

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/authors"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Authors
                            </span>

                        </a>

                    </li>

                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/links"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244">
                                </path>
                            </svg>
                            <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate text-sm font-medium text-gray-700 dark:text-gray-200">
                                Links
                            </span>

                        </a>

                    </li>
                </ul>
            </li>
        </ul>

        <script>
            var collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            if (collapsedGroups === null || collapsedGroups === 'null') {
                localStorage.setItem(
                    'collapsedGroups',
                    JSON.stringify([]),
                )
            }

            collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            document
                .querySelectorAll('.fi-sidebar-group')
                .forEach((group) => {
                    if (
                        !collapsedGroups.includes(group.dataset.groupLabel)
                    ) {
                        return
                    }

                    // Alpine.js loads too slow, so attempt to hide a
                    // collapsed sidebar group earlier.
                    group.querySelector(
                        '.fi-sidebar-group-items',
                    ).style.display = 'none'
                    group
                        .querySelector('.fi-sidebar-group-collapse-button')
                        .classList.add('rotate-180')
                })
        </script>


    </nav>
    <main class="w-full p-8 m-2">
        {{ $slot }}
    </main>

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>