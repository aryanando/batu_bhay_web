

<!-- header -->
<header class="py-8 lg:pt-6 lg:pb-14">
    <div class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0">
        <!-- logo -->
        <div class="flex justify-center lg:justify-normal">
            <a href="#">
                <img src="/assets/img/header/logo-2.png" alt="" class=" h-16" />
            </a>
        </div>

        <div class="flex flex-col gap-y-4 lg:flex-row lg:gap-x-10 lg:gap-y-0 pl-5">
            <!-- location -->
            <div class="flex justify-center items-center gap-x-2 lg:justify-normal lg:max-w-80">
                <i class="ri-map-pin-2-fill text-xl text-accent "></i>
                <div class="text-secondary text-center xl:text-left">Ngaglik, Jl Kartini no 1, Kec. Batu, Kota Batu,
                    Jawa Timur 65311</div>
            </div>
            <!-- phone -->
            <div class="flex justify-center items-center gap-x-2 lg:justify-normal">
                <i class="ri-phone-fill text-2xl text-accent"></i>
                <div class="text-secondary">(0341) 591067</div>
            </div>
            <!-- btn -->
            {{-- <button class="btn btn-sm btn-outline w-[240px] lg:w-auto mx-auto lg:mx-0">
                Book now
            </button> --}}
            <!-- mobile nav -->
            <nav
                class="mnav bg-white fixed w-[300px] top-0 h-screen -left-[300px] shadow-2xl lg:hidden transition-all duration-300 z-20">
                <!-- nav trigger btn -->
                <div
                    class="mnav__close-btn bg-primary w-8 h-8 relative -right-full top-8 flex justify-center items-center rounded-tr-lg rounded-br-lg cursor-pointer transition-all">
                    <i class="mnav__close-btn-icon ri-arrow-right-s-line text-2xl text-white"></i>
                </div>

                <!-- logo, list, form -->
                <div class="px-12 flex flex-col gap-y-12 h-full">
                    <!-- logo -->
                    <a href="/">
                        <img src="/assets/img/header/logo-2.png" alt="" />
                    </a>
                    <!-- list -->
                    <ul class="flex flex-col gap-y-5">
                        <li>
                            <a href="/"
                                class="text-secondary hover:text-accent transition-all duration-300">Beranda</a>
                        </li>
                        <li>
                            <a href="#" onclick="my_modal_2.showModal()"
                                class="text-secondary hover:text-accent transition-all duration-300">Profil</a>
                        </li>
                        <li>
                            <a href="#" onclick="my_modal_2.showModal()"
                                class="text-secondary hover:text-accent transition-all duration-300">Dokter</a>
                        </li>
                        <li>
                            <a href="#" onclick="my_modal_2.showModal()"
                                class="text-secondary hover:text-accent transition-all duration-300">Department</a>
                        </li>
                        <li>
                            <a href="#" onclick="my_modal_2.showModal()"
                                class="text-secondary hover:text-accent transition-all duration-300">Pelayanan</a>
                        </li>
                        <li>
                            <a href="/id/blog"
                                class="text-secondary hover:text-accent transition-all duration-300">Blog</a>
                        </li>
                        <li>
                            <a href="#" onclick="my_modal_2.showModal()"
                                class="text-secondary hover:text-accent transition-all duration-300">Contact</a>
                        </li>
                    </ul>
                    <!-- form -->
                    <form class="relative flex gap-x-[10px]">
                        <label for="mnav-search-input">
                            <i class="ri-search-line text-2xl text-accent"></i>
                        </label>
                        <input type="text" id="mnav-search-input" placeholder="Search..."
                            class="outline-none w-[160px] border-b-2 focus:border-b-2 focus:border-accent placeholder:italic" />
                    </form>
                </div>
            </nav>
            <!-- desktop nav -->

            <nav
                class="bg-white absolute w-full left-0 -bottom-[86px] shadow-custom1 h-16 rounded-[10px] hidden lg:flex lg:items-center lg:justify-between lg:px-[50px]">
                <!-- list -->
                <ul class="flex gap-x-4">
                    <li>
                        <a href="/"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Beranda</a>
                    </li>
                    <li>
                        <a href="#" onclick="my_modal_2.showModal()"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Profil</a>
                    </li>
                    <li>
                        <a href="#" onclick="my_modal_2.showModal()"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Dokter</a>
                    </li>
                    <li>
                        <a href="#" onclick="my_modal_2.showModal()"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Department</a>
                    </li>
                    <li>
                        <a href="#" onclick="my_modal_2.showModal()"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Pelayanan</a>
                    </li>
                    <li>
                        <a href="/id/blog"
                            class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300">Blog</a>
                    </li>
                    <li>
                        <a href="#" onclick="my_modal_2.showModal()"
                            class="text-secondary hover:text-accent transition-all duration-300">Contact</a>
                    </li>
                </ul>
                <!-- form -->
                <form class="relative flex gap-x-[10px]">
                    <label for="search-input" class="flex justify-center items-center group">
                        <i class="ri-search-line text-2xl text-accent"></i>
                    </label>
                    <input type="text" id="search-input" placeholder="Search..."
                        class="outline-none w-[100px] focus:w-[180px] focus:border-b-2 focus:border-accent placeholder:italic placeholder:text-base transition-all duration-150" />
                </form>
            </nav>
        </div>
    </div>
</header>

<x-modal />

