<section class="w-full bg-medium-gray lg:py-48 py-20 font-lato">
    <div class="max-w-5xl w-full mx-auto">
        <div class="w-full flex">
            <div class="w-2/3 pr-10">
                <h2 class="font-black text-6xl mb-5 text-black">o acervo da arte <br> pública capixaba</h2>
                <div class="mb-10 space-y-3">
                    <p class="text-black pr-2">
                        O acervo digital disponibiliza aos visitantes um repertório imagético, técnico e histórico das obras de Arte Pública, de diferentes modalidades, localizadas nos 78 municípios do estado do Espírito Santo.
                    </p>
                    <p class="text-black pr-4">
                        O material, aqui apresentado, é passível de complementações e atualizações ao longo da pesquisa, visando contribuir para uma experiência de conhecimento que contribua para o enriquecimento visual e identitário sobre esta modalidade artística.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hidden lg:block py-10 px-4">
    <div class="flex gap-6">
        <div class="h-96 bg-medium-gray rounded-lg w-3/12"></div>
        <div class="h-96 bg-medium-gray rounded-lg w-2/12"></div>
        <div class="h-96 bg-medium-gray rounded-lg w-3/12"></div>
        <div class="h-96 bg-medium-gray rounded-lg w-4/12"></div>
        <div class="h-96 bg-medium-gray rounded-lg w-2/12"></div>
    </div>
</section>

<section class="py-20 max-w-5xl mx-auto px-8 lg:px-0">


    <form class="max-w-xl mx-auto mb-16">
        <div class="flex flex-col lg:flex-row items-center">
            <label class="lg:mr-6 mb-12 lg:mb-0 text-2xl font-medium text-subtitle-gray">Pesquisar</label>
            <div class="flex flex-1 space-x-6 lg:m-0">
                <!-- <div x-data="{ isOpen: false, openedWithKeyboard: false }" class="relative" @keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                    <button type="button" @click="isOpen = ! isOpen" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-md border border-neutral-300 bg-neutral-50 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-800 dark:border-neutral-700 dark:bg-neutral-900 dark:focus-visible:outline-neutral-300" aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" :class="isOpen || openedWithKeyboard ? 'text-neutral-900 dark:text-white' : 'text-neutral-600 dark:text-neutral-300'" :aria-expanded="isOpen || openedWithKeyboard">
                        Actions Menu
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-md border border-neutral-300 bg-neutral-50 py-1.5 dark:border-neutral-700 dark:bg-neutral-900" role="menu">
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">Dashboard</a>
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">Subscription</a>
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">Settings</a>
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">Sign Out</a>
                    </div>
                </div> -->

                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-3 px-4 text-sm font-medium text-center text-subtitle-gray bg-light-gray rounded-lg focus:ring-4 focus:outline-none focus:ring-gray-100 shadow-common-shadow" type="button">cidade<svg class="w-2.5 h-2.5 ms-2.5 text-subtitle-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-common-shadow w-44">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Cidade</button>
                        </li>
                        <li>
                            <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Estado</button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" class="block p-3 w-full z-20 text-sm text-subtitle-gray bg-light-gray rounded-lg placeholder:text-preto-60 shadow-common-shadow" placeholder="Digite sua pesquisa aqui" required />
                    <button type="submit" class="absolute top-0 end-0 p-3 text-sm font-medium h-full text-preto-60">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="text-preto-60">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <div class="grid grid-cols-1 gap-8 sm:gap-8 text-lg leading-6 text-subtitle-gray lg:grid-cols-2">
        <div class="space-y-8">
            <div x-data="accordion(1)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-xl lg:text-2xl font-bold font-lato">Região Noroeste</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
            <div x-data="accordion(2)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-xl lg:text-2xl font-bold font-lato">Região Metropolitana</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
            <div x-data="accordion(3)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-2xl font-bold font-lato">Região Sudoeste</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-8">
            <div x-data="accordion(4)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-xl lg:text-2xl font-bold font-lato">Região Central</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
            <div x-data="accordion(5)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-xl lg:text-2xl font-bold font-lato">Litoral Norte</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
            <div x-data="accordion(6)" class="relative transition-all duration-300">
                <div @click="handleClick()" class="shadow-common-shadow w-full px-8 py-4 text-left cursor-pointer rounded-xl" :class="handleBackground()">
                    <div class="flex items-center justify-between">
                        <span :class="handleTextChange()" class="tracking-wide text-subtitle-gray text-xl lg:text-2xl font-bold font-lato">Litoral Sul</span>
                        <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current">
                            <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div x-ref="tab" :style="handleToggle()" class="relative pt-4 overflow-hidden transition-all duration-300 max-h-0">
                    <div class="px-6 font-bold text-xl text-subtitle-gray space-y-4">
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>
                        <p class="">Cidade Tal</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>