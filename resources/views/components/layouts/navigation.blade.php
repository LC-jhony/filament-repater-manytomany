<div class="fi-topbar sticky top-0 z-20 overflow-x-clip">
    <nav
        class="flex h-16 items-center gap-x-4 bg-white px-4 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 md:px-6 lg:px-8">


        <!--[if BLOCK]><![endif]--> <button
            style="--c-300: var(--gray-300); --c-400: var(--gray-400); --c-500: var(--gray-500); --c-600: var(--gray-600); display: none;"
            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-topbar-open-sidebar-btn lg:hidden"
            title="Expand sidebar" type="button" x-data="{}" x-on:click="$store.sidebar.open()"
            x-show="! $store.sidebar.isOpen">
            <!--[if BLOCK]><![endif]--> <span class="sr-only">
                Expand sidebar
            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
            </svg>
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->
        </button>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <button
            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-topbar-close-sidebar-btn lg:hidden"
            title="Collapse sidebar" type="button" x-data="{}" x-on:click="$store.sidebar.close()"
            x-show="$store.sidebar.isOpen">
            <!--[if BLOCK]><![endif]--> <span class="sr-only">
                Collapse sidebar
            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
            </svg>
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->
        </button>
        <!--[if ENDBLOCK]><![endif]-->


        <div x-persist="topbar.end" class="ms-auto flex items-center gap-x-4">


            <div wire:id="h0xGcsy29bBCjQvjgUTY" class="fi-global-search flex items-center"
                x-on:focus-first-global-search-result.stop="$el.querySelector('.fi-global-search-result-link')?.focus()"
                x-data="{}">


                <div class="sm:relative">
                    <div x-id="['input']" class="fi-global-search-field">
                        <label x-bind:for="$id('input')" class="sr-only" for="input-1">
                            Global search
                        </label>

                        <div
                            class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                            <!--[if BLOCK]><![endif]-->
                            <div class="items-center gap-x-3 ps-3 flex pe-2">
                                <!--[if BLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                <!--[if BLOCK]><![endif]--> <svg style=";" wire:loading.remove.delay.default="1"
                                    wire:target="search"
                                    class="fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <svg fill="none" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="animate-spin fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                    wire:loading.delay.default="wire:loading.delay.default" wire:target="search">
                                    <path clip-rule="evenodd"
                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                        fill="currentColor"></path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <!--[if ENDBLOCK]><![endif]-->

                            <div class="min-w-0 flex-1">
                                <input
                                    class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-0 pe-3"
                                    autocomplete="off" placeholder="Search" type="search"
                                    wire:key="global-search.field.input" x-bind:id="$id('input')"
                                    x-on:keydown.down.prevent.stop="$dispatch('focus-first-global-search-result')"
                                    x-data="{}" wire:model.live.debounce.500ms="search" id="input-1">
                            </div>

                            <!--[if BLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>

                    <!--[if BLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>


            </div>


            <div wire:id="E9CnepnCJqecHk3O10vv" class="flex" wire:poll.30s="">
                <!--[if BLOCK]><![endif]-->
                <div x-data="{}" x-on:click="$dispatch('open-modal', { id: 'database-notifications' })"
                    class="inline-block">
                    <!--[if BLOCK]><![endif]--> <button
                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-topbar-database-notifications-btn"
                        title="Open notifications" type="button">
                        <!--[if BLOCK]><![endif]--> <span class="sr-only">
                            Open notifications
                        </span>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0">
                            </path>
                        </svg>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <div
                            class="fi-icon-btn-badge-ctn absolute start-full top-0 z-[1] -ms-1 w-max -translate-x-1/2 rounded-md bg-white dark:bg-gray-900 rtl:translate-x-1/2">
                            <span
                                style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30 fi-color-primary">
                                <!--[if BLOCK]><![endif]-->
                                <!--[if BLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->

                                <span class="grid">
                                    <span class="truncate">
                                        6
                                    </span>
                                </span>

                                <!--[if BLOCK]><![endif]-->
                                <!--[if ENDBLOCK]><![endif]-->
                            </span>
                        </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </button>
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if ENDBLOCK]><![endif]-->

                <div aria-modal="true" role="dialog" x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'database-notifications' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'database-notifications' }),
            )
        },
    }" x-on:close-modal.window="if ($event.detail.id === 'database-notifications') close()"
                    x-on:open-modal.window="if ($event.detail.id === 'database-notifications') open()"
                    x-trap.noscroll="isOpen" x-bind:class="{
        'fi-modal-open': isOpen,
    }" class="fi-modal inline-block">
                    <!--[if BLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->

                    <div x-show="isOpen" style="display: none;">
                        <div aria-hidden="true" x-show="isOpen" x-transition.duration.300ms.opacity=""
                            class="fi-modal-close-overlay fixed inset-0 z-40 bg-gray-950/50 dark:bg-gray-950/75"
                            style="display: none;"></div>

                        <div class="fixed inset-0 z-40 cursor-pointer">
                            <div x-ref="modalContainer" x-on:click.self="
                        document.activeElement.selectionStart === undefined &amp;&amp;
                            document.activeElement.selectionEnd === undefined &amp;&amp;
                            $dispatch('close-modal', { id: 'database-notifications' })
                    " class="relative grid min-h-full grid-rows-[1fr_auto_1fr] justify-items-center sm:grid-rows-[1fr_auto_3fr]">
                                <div x-data="{ isShown: false }" x-init="
                        $nextTick(() => {
                            isShown = isOpen
                            $watch('isOpen', () => (isShown = isOpen))
                        })
                    " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'database-notifications' })"
                                    x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300"
                                    x-transition:enter-start="translate-x-full rtl:-translate-x-full"
                                    x-transition:enter-end="translate-x-0" x-transition:leave-start="translate-x-0"
                                    x-transition:leave-end="translate-x-full rtl:-translate-x-full"
                                    class="fi-modal-window pointer-events-auto relative row-start-2 flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 fi-modal-slide-over-window ms-auto overflow-y-auto h-[100dvh] max-w-md"
                                    style="display: none;">
                                    <!--[if BLOCK]><![endif]-->
                                    <div
                                        class="fi-modal-header flex px-6 pt-6 fi-sticky sticky top-0 z-10 border-b border-gray-200 bg-white pb-6 dark:border-white/10 dark:bg-gray-900 gap-x-5">
                                        <!--[if BLOCK]><![endif]-->
                                        <div class="absolute end-6 top-6">
                                            <!--[if BLOCK]><![endif]--> <button
                                                style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-modal-close-btn"
                                                title="Close" type="button" tabindex="-1"
                                                x-on:click="$dispatch('close-modal', { id: 'database-notifications' })">
                                                <!--[if BLOCK]><![endif]--> <span class="sr-only">
                                                    Close
                                                </span>
                                                <!--[if ENDBLOCK]><![endif]-->

                                                <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                    data-slot="icon">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12"></path>
                                                </svg>
                                                <!--[if ENDBLOCK]><![endif]-->

                                                <!--[if BLOCK]><![endif]-->
                                                <!--[if ENDBLOCK]><![endif]-->

                                                <!--[if BLOCK]><![endif]-->
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </button>
                                            <!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                        <!--[if ENDBLOCK]><![endif]-->

                                        <!--[if BLOCK]><![endif]-->
                                        <div>
                                            <h2
                                                class="fi-modal-heading text-base font-semibold leading-6 text-gray-950 dark:text-white">
                                                <span class="relative">
                                                    Notifications

                                                    <!--[if BLOCK]><![endif]--> <span
                                                        style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                        class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30 fi-color-primary absolute -top-1 start-full ms-1 w-max">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <span class="grid">
                                                            <span class="truncate">
                                                                6
                                                            </span>
                                                        </span>

                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </span>
                                                    <!--[if ENDBLOCK]><![endif]-->
                                                </span>
                                            </h2>

                                            <div class="mt-2 flex gap-x-3">
                                                <!--[if BLOCK]><![endif]-->
                                                <!--[if BLOCK]><![endif]--> <button
                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary"
                                                    type="button" wire:loading.attr="disabled"
                                                    wire:target="markAllNotificationsAsRead" tabindex="-1"
                                                    wire:click="markAllNotificationsAsRead">
                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <!--[if BLOCK]><![endif]--> <svg fill="none" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="animate-spin fi-link-icon h-5 w-5 text-custom-600 dark:text-custom-400"
                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                        wire:loading.delay.default=""
                                                        wire:target="markAllNotificationsAsRead">
                                                        <path clip-rule="evenodd"
                                                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            fill-rule="evenodd" fill="currentColor" opacity="0.2">
                                                        </path>
                                                        <path
                                                            d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <span
                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                        Mark all as read
                                                    </span>

                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->
                                                </button>
                                                <!--[if ENDBLOCK]><![endif]-->
                                                <!--[if ENDBLOCK]><![endif]-->

                                                <!--[if BLOCK]><![endif]--> <button
                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-danger"
                                                    type="button" wire:loading.attr="disabled"
                                                    wire:target="clearNotifications" tabindex="-1"
                                                    wire:click="clearNotifications" x-on:click="close()">
                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <!--[if BLOCK]><![endif]--> <svg fill="none" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="animate-spin fi-link-icon h-5 w-5 text-custom-600 dark:text-custom-400"
                                                        style="--c-400:var(--danger-400);--c-600:var(--danger-600);"
                                                        wire:loading.delay.default="" wire:target="clearNotifications">
                                                        <path clip-rule="evenodd"
                                                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            fill-rule="evenodd" fill="currentColor" opacity="0.2">
                                                        </path>
                                                        <path
                                                            d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <span
                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                        style="--c-400:var(--danger-400);--c-600:var(--danger-600);">
                                                        Clear
                                                    </span>

                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->

                                                    <!--[if BLOCK]><![endif]-->
                                                    <!--[if ENDBLOCK]><![endif]-->
                                                </button>
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->
                                    <div class="fi-modal-content flex flex-col gap-y-4 py-6 flex-1 px-6">
                                        <!--[if BLOCK]><![endif]-->
                                        <div class="-mx-6 -mt-6 divide-y divide-gray-200 dark:divide-white/10 -mb-6">
                                            <!--[if BLOCK]><![endif]-->
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u00223c1ffe1a-f341-44c1-80b5-a9c6f4178c35\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/810\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Marilou Sipes ordered 2 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.3c1ffe1a-f341-44c1-80b5-a9c6f4178c35"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Marilou Sipes ordered 2 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/810/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u00223db264a2-c11e-49c2-9b22-6e77980a5ad6\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/357\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Forest Rosenbaum ordered 5 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.3db264a2-c11e-49c2-9b22-6e77980a5ad6"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Forest Rosenbaum ordered 5 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/357/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u002278f5b5cf-5822-4a5d-b0e4-2f7f6dda8d65\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/777\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Prof. Bernadine Herman Jr. ordered 5 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.78f5b5cf-5822-4a5d-b0e4-2f7f6dda8d65"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Prof. Bernadine Herman Jr. ordered 5 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/777/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u0022b280c787-aff9-4224-a6a4-4e499a611e84\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/4\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Estel Reinger ordered 5 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.b280c787-aff9-4224-a6a4-4e499a611e84"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Estel Reinger ordered 5 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/4/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u0022d0e464a4-78cd-4db1-8d8d-bd4b33890595\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/225\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Brice Hudson ordered 5 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.d0e464a4-78cd-4db1-8d8d-bd4b33890595"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Brice Hudson ordered 5 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/225/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                class="relative before:absolute before:start-0 before:h-full before:w-0.5 before:bg-primary-600 dark:before:bg-primary-500">
                                                <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u0022e6b8c247-2360-4f5a-b4ab-475a3db70ade\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022tooltip\u0022:null,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/384\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022Ms. Beryl Spencer Jr. ordered 4 products.\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022status\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                    class="pointer-events-auto invisible fi-no-notification w-full overflow-hidden transition duration-300 fi-inline"
                                                    style="display: block; visibility: visible;"
                                                    wire:key="E9CnepnCJqecHk3O10vv.notifications.e6b8c247-2360-4f5a-b4ab-475a3db70ade"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="flex w-full gap-3 p-4 ">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <!--[if BLOCK]><![endif]--> <svg
                                                            style="--c-400:var(--gray-400);"
                                                            class="fi-no-notification-icon text-gray-400 fi-color-gray h-6 w-6"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            aria-hidden="true" data-slot="icon">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                                            </path>
                                                        </svg>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->

                                                        <div class="mt-0.5 grid flex-1">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <h3
                                                                class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                New order
                                                            </h3>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <time
                                                                class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                2 minutes ago
                                                            </time>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div
                                                                class="fi-no-notification-body overflow-hidden break-words text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                Ms. Beryl Spencer Jr. ordered 4 products.
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <div class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                <!--[if BLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--> <a
                                                                    href="https://demo.filamentphp.com/shop/orders/384/edit"
                                                                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <span
                                                                        class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400"
                                                                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                                                        View
                                                                    </span>

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]-->
                                                                    <!--[if ENDBLOCK]><![endif]-->
                                                                </a>
                                                                <!--[if ENDBLOCK]><![endif]-->

                                                                <!--[if ENDBLOCK]><![endif]-->
                                                            </div>
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </div>

                                                        <!--[if BLOCK]><![endif]--> <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-color-gray fi-no-notification-close-btn"
                                                            type="button" x-on:click="close">
                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]--> <svg
                                                                class="fi-icon-btn-icon h-5 w-5"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path
                                                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z">
                                                                </path>
                                                            </svg>
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->

                                                            <!--[if BLOCK]><![endif]-->
                                                            <!--[if ENDBLOCK]><![endif]-->
                                                        </button>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--[if ENDBLOCK]><![endif]-->
                                        </div>

                                        <!--[if BLOCK]><![endif]-->
                                        <!--[if ENDBLOCK]><![endif]-->
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--[if BLOCK]><![endif]-->
                <div x-data="{}" x-init="
        window.addEventListener('EchoLoaded', () => {
            window.Echo.private('App.Models.User.1').listen('.database-notifications.sent', () => {
                setTimeout(() => $wire.call('$refresh'), 500)
            })
        })

        if (window.Echo) {
            window.dispatchEvent(new CustomEvent('EchoLoaded'))
        }
    "></div>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
            <div x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },

        open: function (event) {
            $refs.panel.open(event)
        },

        close: function (event) {
            $refs.panel.close(event)
        },
    }" class="fi-dropdown fi-user-menu">
                <div x-on:click="toggle" class="fi-dropdown-trigger flex cursor-pointer">
                    <button aria-label="User menu" type="button" class="shrink-0">
                        <img class="fi-avatar object-cover object-center fi-circular rounded-full h-8 w-8 fi-user-avatar"
                            src="https://ui-avatars.com/api/?name=D+U&amp;color=FFFFFF&amp;background=09090b">
                    </button>
                </div>

                <div x-float.placement.bottom-end.flip.teleport.offset="{ offset: 8 }" x-ref="panel"
                    x-transition:enter-start="opacity-0" x-transition:leave-end="opacity-0"
                    class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-[14rem]"
                    style="position: fixed; display: none;">
                    <div
                        class="fi-dropdown-header flex w-full gap-2 p-3 text-sm  fi-dropdown-header-color-gray fi-color-gray">
                        <!--[if BLOCK]><![endif]--> <svg
                            class="fi-dropdown-header-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <!--[if ENDBLOCK]><![endif]-->

                        <span
                            class="fi-dropdown-header-label flex-1 truncate text-start text-gray-700 dark:text-gray-200"
                            style="">
                            Demo User
                        </span>
                    </div>



                    <div class="fi-dropdown-list p-1">
                        <div x-data="{ theme: null }" x-init="
        $watch('theme', () => {
            $dispatch('theme-changed', theme)
        })

        theme = localStorage.getItem('theme') || 'system'    " class="fi-theme-switcher grid grid-flow-col gap-x-1">
                            <button aria-label="Enable light theme" type="button"
                                x-on:click="(theme = 'light') &amp;&amp; close()" x-tooltip="{
        content: 'Enable light theme',
        theme: $store.theme,
    }" class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400"
                                x-bind:class="
        theme === 'light'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    ">
                                <!--[if BLOCK]><![endif]--> <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path
                                        d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z">
                                    </path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->
                            </button>

                            <button aria-label="Enable dark theme" type="button"
                                x-on:click="(theme = 'dark') &amp;&amp; close()" x-tooltip="{
        content: 'Enable dark theme',
        theme: $store.theme,
    }" class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400"
                                x-bind:class="
        theme === 'dark'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    ">
                                <!--[if BLOCK]><![endif]--> <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M7.455 2.004a.75.75 0 0 1 .26.77 7 7 0 0 0 9.958 7.967.75.75 0 0 1 1.067.853A8.5 8.5 0 1 1 6.647 1.921a.75.75 0 0 1 .808.083Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->
                            </button>

                            <button aria-label="Enable system theme" type="button"
                                x-on:click="(theme = 'system') &amp;&amp; close()" x-tooltip="{
        content: 'Enable system theme',
        theme: $store.theme,
    }" class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400"
                                x-bind:class="
        theme === 'system'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    ">
                                <!--[if BLOCK]><![endif]--> <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->
                            </button>
                        </div>
                    </div>

                    <div class="fi-dropdown-list p-1">
                        <form action="https://demo.filamentphp.com/logout" method="post">
                            <input type="hidden" name="_token" value="rRvci1p74BuAa3blW2dP0T9sstClIsYWyUMca1Jw"
                                autocomplete="off">
                            <button type="submit" style=";"
                                class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 fi-dropdown-list-item-color-gray fi-color-gray">
                                <!--[if BLOCK]><![endif]--> <svg
                                    class="fi-dropdown-list-item-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->

                                <span
                                    class="fi-dropdown-list-item-label flex-1 truncate text-start text-gray-700 dark:text-gray-200"
                                    style="">
                                    Sign out
                                </span>

                            </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </nav>
</div>