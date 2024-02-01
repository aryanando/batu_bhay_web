<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RS Bhayangkara Batu - Website Resmi</title>
    @vite('resources/css/app.css')
    <!-- css -->
    <link rel="stylesheet" href="dist/output.css" />
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css"
    />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="icon" href="https://batubhayangkara.com/wp-content/uploads/2022/06/cropped-logo-hasta-192x192.png" sizes="192x192">
  </head>
  <body>
    <!-- header -->
    <header class="py-8 lg:pt-6 lg:pb-14">
      <div
        class="container mx-auto lg:relative flex flex-col lg:flex-row lg:justify-between gap-y-4 lg:gap-y-0"
      >
        <!-- logo -->
        <div class="flex justify-center lg:justify-normal">
          <a href="#">
            <img src="./assets/img/header/logo-2.png" alt="" class=" h-16"/>
          </a>
        </div>

        <div class="flex flex-col gap-y-4 lg:flex-row lg:gap-x-10 lg:gap-y-0 pl-5">
          <!-- location -->
          <div
            class="flex justify-center items-center gap-x-2 lg:justify-normal max-w-80"
          >
            <i class="ri-map-pin-2-fill text-xl text-accent "></i>
            <div class="text-secondary">Ngaglik, Jl Kartini no 1, Kec. Batu, Kota Batu, Jawa Timur 65311</div>
          </div>
          <!-- phone -->
          <div
            class="flex justify-center items-center gap-x-2 lg:justify-normal"
          >
            <i class="ri-phone-fill text-2xl text-accent"></i>
            <div class="text-secondary">(0341) 591067</div>
          </div>
          <!-- btn -->
          <button
            class="btn btn-sm btn-outline w-[240px] lg:w-auto mx-auto lg:mx-0"
          >
            Book now
          </button>
          <!-- mobile nav -->
          <nav
            class="mnav bg-white fixed w-[300px] top-0 h-screen -left-[300px] shadow-2xl lg:hidden transition-all duration-300 z-20"
          >
            <!-- nav trigger btn -->
            <div
              class="mnav__close-btn bg-primary w-8 h-8 relative -right-full top-8 flex justify-center items-center rounded-tr-lg rounded-br-lg cursor-pointer transition-all"
            >
              <i
                class="mnav__close-btn-icon ri-arrow-right-s-line text-2xl text-white"
              ></i>
            </div>

            <!-- logo, list, form -->
            <div class="px-12 flex flex-col gap-y-12 h-full">
              <!-- logo -->
              <a href="#">
                <img src="assets/img/header/logo.svg" alt="" />
              </a>
              <!-- list -->
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Beranda</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Dokter</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Department</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Services</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-secondary hover:text-accent transition-all duration-300"
                    >Contact</a
                  >
                </li>
              </ul>
              <!-- form -->
              <form class="relative flex gap-x-[10px]">
                <label for="mnav-search-input">
                  <i class="ri-search-line text-2xl text-accent"></i>
                </label>
                <input
                  type="text"
                  id="mnav-search-input"
                  placeholder="Search..."
                  class="outline-none w-[160px] border-b-2 focus:border-b-2 focus:border-accent placeholder:italic"
                />
              </form>
            </div>
          </nav>
          <!-- desktop nav -->
          <nav
            class="bg-white absolute w-full left-0 -bottom-[86px] shadow-custom1 h-16 rounded-[10px] hidden lg:flex lg:items-center lg:justify-between lg:px-[50px]"
          >
            <!-- list -->
            <ul class="flex gap-x-4">
              <li>
                <a
                  href="#"
                  class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300"
                  >Beranda</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300"
                  >Dokter</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300"
                  >Department</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300"
                  >Services</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="border-r pr-4 text-secondary hover:text-accent transition-all duration-300"
                  >Blog</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-secondary hover:text-accent transition-all duration-300"
                  >Contact</a
                >
              </li>
            </ul>
            <!-- form -->
            <form class="relative flex gap-x-[10px]">
              <label
                for="search-input"
                class="flex justify-center items-center group"
              >
                <i class="ri-search-line text-2xl text-accent"></i>
              </label>
              <input
                type="text"
                id="search-input"
                placeholder="Search..."
                class="outline-none w-[100px] focus:w-[180px] focus:border-b-2 focus:border-accent placeholder:italic placeholder:text-base transition-all duration-150"
              />
            </form>
          </nav>
        </div>
      </div>
    </header>

    <!-- hero -->
    <section class="hero bg-grey py-12 xl:pt-12 xl:pb-0 overflow-hidden">
      <div class="container mx-auto h-full">
        <!-- text & img -->
        <div
          class="flex flex-col xl:flex-row items-center justify-between h-full"
        >
          <!-- text -->
          <div class="hero__text xl:w-[48%] text-center xl:text-left">
            <!-- badge -->
            <div
              class="flex items-center bg-white py-[10px] px-[20px] w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0"
            >
              <!-- badge icon -->
              <i class="ri-heart-pulse-line text-2xl text-accent"></i>
              <div
                class="uppercase text-base font-medium text-[#9ab4b7] tracking-[2.24px]"
              >
                RS Bhayangkara Batu
              </div>
            </div>
            <!-- title -->
            <h1 class="h1 mb-6">Layanan Kesehatan</h1>
            <!-- desc -->
            <p class="mb-[42px] md:max-w-xl">
              Bekerja Sepenuh Hati
            </p>
            <!-- btn -->
            <button class="btn btn-lg btn-accent mx-auto xl:mx-0">
              Contact us
            </button>
          </div>
          <!-- image -->
          <div class="hero__img hidden xl:flex max-w-[814px] self-end min-h-full">
            <img src="assets/img/hero/hero-image.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->

    <!-- stats -->
    <section class="stats section">
      <div class="container mx-auto">
        <!-- wrapper -->
        <div class="flex flex-col xl:flex-row gap-y-6 justify-between">
          <!-- item -->
          <div
            class="stats__item flex-1 xl:border-r flex flex-col items-center"
          >
            <div
              class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2"
            >
              +5120
            </div>
            <div>Happy Patients</div>
          </div>
          <!-- item -->
          <div
            class="stats__item flex-1 xl:border-r flex flex-col items-center"
          >
            <div
              class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2"
            >
              26
            </div>
            <div>Total Branches</div>
          </div>
          <!-- item -->
          <div
            class="stats__item flex-1 xl:border-r flex flex-col items-center"
          >
            <div
              class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2"
            >
              +53
            </div>
            <div>Senior Doctors</div>
          </div>
          <!-- item -->
          <div class="stats__item flex-1 flex flex-col items-center">
            <div
              class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary xl:mb-2"
            >
              +10
            </div>
            <div>Years Experience</div>
          </div>
        </div>
      </div>
    </section>
    <!-- end stats -->

    <!-- services -->
    <section class="services">
      <!-- bg -->
      <div
        class="bg-services bg-cover bg-no-repeat max-w-[1466px] mx-4 xl:mx-auto rounded-[20px] xl:pt-[70px] px-6 xl:px-0 relative h-[368px] flex items-center xl:items-start -z-10"
      >
        <div class="container mx-auto">
          <!-- text -->
          <div
            class="services__top flex items-center flex-col xl:flex-row xl:mb-[60px]"
          >
            <h2
              class="h2 text-white flex-1 mb-4 xl:mb-0 text-center xl:text-left"
            >
              Our best services for your solution
            </h2>
            <p
              class="text-white flex-1 text-center xl:text-left max-w-2xl xl:max-w-none"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae similique eveniet nobis reprehenderit est explicabo
              sunt sapiente dolore, maxime.
            </p>
          </div>
        </div>
      </div>
      <!-- grid container -->
      <div class="container mx-auto mt-8 xl:-mt-[144px]">
        <!-- grid -->
        <div class="grid xl:grid-cols-4 gap-5 px-8 xl:px-0">
          <!-- grid item -->
          <div
            class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center"
          >
            <!-- grid item icon -->
            <div class="mb-[15px]">
              <img src="assets/icons/services/icon-1.svg" alt="" />
            </div>
            <!-- grid item title -->
            <h3 class="h3 mb-[10px]">General Practitioners</h3>
            <!-- grid item description -->
            <p class="font-light leading-normal max-w-[300px]">
              Lorem ipsum dolor sit amet consectetur adipisicing amet elit.
            </p>
          </div>
          <!-- grid item -->
          <div
            class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center"
          >
            <!-- grid item icon -->
            <div class="mb-[15px]">
              <img src="assets/icons/services/icon-2.svg" alt="" />
            </div>
            <!-- grid item title -->
            <h3 class="h3 mb-[10px]">Pregnancy Support</h3>
            <!-- grid item description -->
            <p class="font-light leading-normal max-w-[300px]">
              Lorem ipsum dolor sit amet consectetur adipisicing amet elit.
            </p>
          </div>
          <!-- grid item -->
          <div
            class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center"
          >
            <!-- grid item icon -->
            <div class="mb-[15px]">
              <img src="assets/icons/services/icon-3.svg" alt="" />
            </div>
            <!-- grid item title -->
            <h3 class="h3 mb-[10px]">Nutritional Support</h3>
            <!-- grid item description -->
            <p class="font-light leading-normal max-w-[300px]">
              Lorem ipsum dolor sit amet consectetur adipisicing amet elit.
            </p>
          </div>
          <!-- grid item -->
          <div
            class="services__item bg-white p-[30px] rounded-[10px] shadow-custom2 min-h-[288px] flex flex-col items-center text-center"
          >
            <!-- grid item icon -->
            <div class="mb-[15px]">
              <img src="assets/icons/services/icon-4.svg" alt="" />
            </div>
            <!-- grid item title -->
            <h3 class="h3 mb-[10px]">Pharmaceutical Care</h3>
            <!-- grid item description -->
            <p class="font-light leading-normal max-w-[300px]">
              Lorem ipsum dolor sit amet consectetur adipisicing amet elit.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end services -->

    <!-- appointment -->
    <section class="appointment section">
      <div class="container mx-auto">
        <!-- title -->
        <h2
          class="appointment__title h2 mb-5 xl:mb-[50px] text-center xl:text-left"
        >
          Book Appointment or call:
          <span class="text-accent-tertiary">(+487) 384 9452</span>
        </h2>
        <!-- form -->
        <form class="appointment__form flex flex-col gap-y-5">
          <!-- select wrapper -->
          <div class="flex flex-col xl:flex-row gap-5">
            <!-- select 1 -->
            <div class="select relative flex items-center">
              <!-- icon -->
              <div class="absolute right-4">
                <i class="ri-arrow-down-s-line text-[26px] text-primary"></i>
              </div>
              <!-- select -->
              <select
                class="appearance-none outline-none h-full w-full bg-transparent px-4"
              >
                <option value="1">Select department</option>
                <option value="2">Department 1</option>
                <option value="3">Department 2</option>
                <option value="4">Department 3</option>
              </select>
            </div>
            <!-- select 2 -->
            <div class="select relative flex items-center">
              <!-- icon -->
              <div class="absolute right-4">
                <i class="ri-arrow-down-s-line text-[26px] text-primary"></i>
              </div>
              <!-- select -->
              <select
                class="appearance-none outline-none h-full w-full bg-transparent px-4"
              >
                <option value="1">Select doctor</option>
                <option value="2">Dr. Jane Doe</option>
                <option value="2">Dr. Jhon Doe</option>
                <option value="2">Dr. Bob Smith</option>
              </select>
            </div>
          </div>
          <!-- input wrapper -->
          <div class="flex flex-col xl:flex-row gap-5">
            <input type="text" class="input" placeholder="Full Name" />
            <input type="text" class="input" placeholder="Phone Number" />
          </div>
          <!-- input wrapper -->
          <div class="flex flex-col xl:flex-row gap-5">
            <input class="input" type="date" />
            <input class="input" type="time" />
          </div>
          <!-- btn -->
          <button class="btn btn-lg btn-accent self-start" type="submit">
            Book an appointment
          </button>
        </form>
      </div>
    </section>
    <!-- end appointment -->

    <!-- testimonials -->
    <section class="testimonial bg-testimonials bg-cover bg-right bg-no-repeat py-12 xl:min-h-[595px] xl:py-0">
      <div class="testimonial__constainer container mx-auto">
        <div class="flex flex-col items-center gap-x-14 xl:flex-row">
          <!-- img -->
          <div class="hidden xl:flex">
            <img src="assets/img/testimonials/image-head-new.png" alt="" />
          </div>
          <!-- slider -->
          <div class="max-w-[98%] xl:max-w-[710px]">
            <!-- slider main container -->
            <div class="swiper h-[400px]">
              <!-- additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- slide 1 -->
                <div class="swiper-slide">
                  <div class="h-full flex flex-col justify-center items-start">
                    <div class="max-w-[680px] mx-auto text-center xl:text-left">
                      <!-- message -->
                      <p
                        class="font-light relative text-[22px] text-[#4c5354] leading-[190%] text-center xl:text-left before:bg-quoteLeft before:bg-contain before:bg-bottom before:inline-block before:top-0 before:w-10 before:h-10 before:bg-no-repeat after:bg-quoteRight after:bg-contain after:bg-bottom after:inline-block after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7"
                      >
                        <span class="mx-2"
                          >Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Doloribus dolores facere, totam minima error
                          quisquam numquam sint libero expedita doloremque eaque
                          harum.</span
                        >
                      </p>
                      <!-- name -->
                      <div class="text-[26px] text-[#4c5354] font-semibold">
                        James Rodrigo
                      </div>
                      <!-- job -->
                      <div
                        class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]"
                      >
                        Customer
                      </div>
                    </div>
                  </div>
                </div>
                <!-- slide 2 -->
                <div class="swiper-slide">
                  <div class="h-full flex flex-col justify-center items-start">
                    <div class="max-w-[680px] mx-auto text-center xl:text-left">
                      <!-- message -->
                      <p
                        class="font-light relative text-[22px] text-[#4c5354] leading-[190%] text-center xl:text-left before:bg-quoteLeft before:bg-contain before:bg-bottom before:inline-block before:top-0 before:w-10 before:h-10 before:bg-no-repeat after:bg-quoteRight after:bg-contain after:bg-bottom after:inline-block after:top-0 after:w-10 after:h-10 after:bg-no-repeat mb-7"
                      >
                        <span class="mx-2"
                          >Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Doloribus dolores facere, totam minima error
                          quisquam numquam sint libero expedita doloremque eaque
                          harum.</span
                        >
                      </p>
                      <!-- name -->
                      <div class="text-[26px] text-[#4c5354] font-semibold">
                        James Rodrigo
                      </div>
                      <!-- job -->
                      <div
                        class="text-[#9ab4b7] font-medium uppercase tracking-[2.24px]"
                      >
                        Customer
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- swiper pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end testimonials -->

    <!-- team -->
    <section class="team section">
      <div class="container mx-auto">
        <!-- title -->
        <h2 class="team__title h2 mb-[50px] text-center xl:text-left">
          Our Team
        </h2>
        <!-- slider -->
        <div class="team__slider swiper min-h-[400px]">
          <!-- additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- slide 1 -->
            <div class="swiper-slide">
              <div class="flex flex-col md:flex-row gap-9">
                <!-- item -->
                <div class="flex-1 flex flex-col xl:flex-row">
                  <div
                    class="flex flex-col xl:flex-row items-center gap-[30px]"
                  >
                    <!-- img -->
                    <div class="flex-1">
                      <img src="assets/img/team/doctor-1.png" alt="" />
                    </div>
                    <!-- info -->
                    <div class="flex-1 flex flex-col">
                      <!-- name -->
                      <h4 class="h4 mb-[10px]">Dr. Leslie Taylor</h4>
                      <!-- job -->
                      <div
                        class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]"
                      >
                        Pediatrician
                      </div>
                      <!-- desc -->
                      <p class="font-light mb-[26px] max-w-[320px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore possimus eum atque.
                      </p>
                      <!-- socials -->
                      <div
                        class="flex items-center text-[30px] gap-x-5 text-accent-tertiary"
                      >
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-youtube-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-instagram-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="flex-1 flex flex-col xl:flex-row">
                  <div
                    class="flex flex-col xl:flex-row items-center gap-[30px]"
                  >
                    <!-- img -->
                    <div class="flex-1">
                      <img src="assets/img/team/doctor-2.png" alt="" />
                    </div>
                    <!-- info -->
                    <div class="flex-1 flex flex-col">
                      <!-- name -->
                      <h4 class="h4 mb-[10px]">Dr. Zachary Brown</h4>
                      <!-- job -->
                      <div
                        class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]"
                      >
                        Cardiologist
                      </div>
                      <!-- desc -->
                      <p class="font-light mb-[26px] max-w-[320px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore possimus eum atque.
                      </p>
                      <!-- socials -->
                      <div
                        class="flex items-center text-[30px] gap-x-5 text-accent-tertiary"
                      >
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-youtube-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-instagram-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 2 -->
            <div class="swiper-slide">
              <div class="flex flex-col md:flex-row gap-9">
                <!-- item -->
                <div class="flex-1 flex flex-col xl:flex-row">
                  <div
                    class="flex flex-col xl:flex-row items-center gap-[30px]"
                  >
                    <!-- img -->
                    <div class="flex-1">
                      <img src="assets/img/team/doctor-1.png" alt="" />
                    </div>
                    <!-- info -->
                    <div class="flex-1 flex flex-col">
                      <!-- name -->
                      <h4 class="h4 mb-[10px]">Dr. Leslie Taylor</h4>
                      <!-- job -->
                      <div
                        class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]"
                      >
                        Pediatrician
                      </div>
                      <!-- desc -->
                      <p class="font-light mb-[26px] max-w-[320px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore possimus eum atque.
                      </p>
                      <!-- socials -->
                      <div
                        class="flex items-center text-[30px] gap-x-5 text-accent-tertiary"
                      >
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-youtube-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-instagram-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- item -->
                <div class="flex-1 flex flex-col xl:flex-row">
                  <div
                    class="flex flex-col xl:flex-row items-center gap-[30px]"
                  >
                    <!-- img -->
                    <div class="flex-1">
                      <img src="assets/img/team/doctor-2.png" alt="" />
                    </div>
                    <!-- info -->
                    <div class="flex-1 flex flex-col">
                      <!-- name -->
                      <h4 class="h4 mb-[10px]">Dr. Zachary Brown</h4>
                      <!-- job -->
                      <div
                        class="font-medium uppercase tracking-[2.24px] text-[#9ab4b7] mb-[20px]"
                      >
                        Cardiologist
                      </div>
                      <!-- desc -->
                      <p class="font-light mb-[26px] max-w-[320px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore possimus eum atque.
                      </p>
                      <!-- socials -->
                      <div
                        class="flex items-center text-[30px] gap-x-5 text-accent-tertiary"
                      >
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-youtube-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-instagram-fill"></i>
                        </a>
                        <a
                          href="#"
                          class="cursor-pointer hover:text-accent transition-all"
                        >
                          <i class="ri-pinterest-fill"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- swiper pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- end team -->

    <!-- faq -->
    <section class="faq">
      <div class="container mx-auto">
        <h2 class="faq__title h2 text-center mb-[50px]">We've got answers</h2>
        <!-- item wrapper -->
        <div class="max-w-5xl mx-auto">
          <!-- item -->
          <div
            class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none"
          >
            <!-- title & icon -->
            <div class="flex items-center justify-between mb-[10px]">
              <!-- title -->
              <h4 class="h4">Why to believe in Insove medical healthcare ?</h4>
              <!-- icon -->
              <div class="faq__btn text-accent">
                <i class="ri-add-fill text-2xl"></i>
              </div>
            </div>
            <!-- answer text -->
            <div class="faq__answer h-0 overflow-hidden">
              <p class="font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                obcaecati autem!
              </p>
            </div>
          </div>
          <!-- item -->
          <div
            class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none"
          >
            <!-- title & icon -->
            <div class="flex items-center justify-between mb-[10px]">
              <!-- title -->
              <h4 class="h4">Will we get healthcare updates after surgery ?</h4>
              <!-- icon -->
              <div class="faq__btn text-accent">
                <i class="ri-add-fill text-2xl"></i>
              </div>
            </div>
            <!-- answer text -->
            <div class="faq__answer h-0 overflow-hidden">
              <p class="font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                obcaecati autem!
              </p>
            </div>
          </div>
          <!-- item -->
          <div
            class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none"
          >
            <!-- title & icon -->
            <div class="flex items-center justify-between mb-[10px]">
              <!-- title -->
              <h4 class="h4">
                What preparations are necessary before undergoing surgery ?
              </h4>
              <!-- icon -->
              <div class="faq__btn text-accent">
                <i class="ri-add-fill text-2xl"></i>
              </div>
            </div>
            <!-- answer text -->
            <div class="faq__answer h-0 overflow-hidden">
              <p class="font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                obcaecati autem!
              </p>
            </div>
          </div>
          <!-- item -->
          <div
            class="faq__item px-[30px] pt-7 pb-4 border-b cursor-pointer select-none"
          >
            <!-- title & icon -->
            <div class="flex items-center justify-between mb-[10px]">
              <!-- title -->
              <h4 class="h4">
                How long will it take to recover after the surgery ?
              </h4>
              <!-- icon -->
              <div class="faq__btn text-accent">
                <i class="ri-add-fill text-2xl"></i>
              </div>
            </div>
            <!-- answer text -->
            <div class="faq__answer h-0 overflow-hidden">
              <p class="font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                ipsam est cumque repellendus omnis, quam magnam sequi autem nam
                aliquam pariatur illo dignissimos magni! Cumque nihil quia animi
                obcaecati autem!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end faq -->

    <!-- departments -->
    <section class="departments section">
      <div
        class="departments__bg bg-departments bg-cover xl:bg-auto bg-center bg-no-repeat max-w-[1466px] mx-4 xl:mx-auto rounded-[20px] px-6 xl:px-0 py-12 xl:pt-[80px] xl:pb-[90px] relative min-h-[588px] flex items-center"
      >
        <div class="departments__container container mx-auto">
          <div class="flex flex-col xl:flex-row gap-x-5">
            <div
              class="xl:w-[310px] flex flex-col gap-y-[30px] xl:gap-y-[40px] font-medium uppercase text-center xl:text-left text-base text-[#9ab4b7] xl:pt-3 xl:text-[17px] mb-[50px] xl:mb-0"
            >
              <div class="cursor-pointer hover:text-accent transition-all">
                Laboratory Analysis
              </div>
              <div class="cursor-pointer hover:text-accent transition-all">
                Cardiology Clinic
              </div>
              <div class="cursor-pointer hover:text-accent transition-all">
                Gynecology Clinic
              </div>
              <div class="cursor-pointer hover:text-accent transition-all">
                Pathology Clinic
              </div>
              <div class="cursor-pointer hover:text-accent transition-all">
                Pediatrics Clinic
              </div>
              <div class="cursor-pointer hover:text-accent transition-all">
                Neurology Clinic
              </div>
            </div>
            <div class="xl:w-[640px]">
              <!-- title -->
              <h2 class="h2 mb-[20px] text-center xl:text-left">
                Cardiology Clinic
              </h2>
              <!-- description -->
              <p class="mb-[30px] font-light text-center xl:text-left">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                molestiae libero ipsa atque accusamus temporibus odio corrupti
                pariatur sed enim deserunt tempore repellendus provident.
                <br /><br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad qui
                voluptates reprehenderit maxime veniam quam neque distinctio
                asperiores quaerat inventore.
              </p>
              <div
                class="flex flex-col xl:flex-row items-center xl:justify-between max-w-[555px] mb-[50px] mx-auto xl:mx-0"
              >
                <div class="text-accent xl:border-r border-[#dcdcdc] xl:pr-6">
                  Neurocritical Care
                </div>
                <div class="text-accent xl:border-r border-[#dcdcdc] xl:pr-6">
                  Neuro Oncology
                </div>
                <div class="text-accent">Geriatric Neurology</div>
              </div>
              <button class="btn btn-lg btn-accent mx-auto xl:mx-0">
                Learn more
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end departments -->

    <!-- blog -->
    <section class="blog">
      <div class="container mx-auto">
        <h2 class="blog__title h2 mb-[50px] text-center xl:text-left">
          Our Recents Posts
        </h2>
        <!-- blog posts -->
        <div
          class="flex flex-col xl:flex-row gap-y-6 xl:gap-y-0 items-center xl:justify-between mb-[50px]"
        >
          <!-- post 1 -->
          <div
            class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group"
          >
            <!-- img -->
            <div class="relative overflow-hidden">
              <img
                class="group-hover:scale-110 transition-all duration-500"
                src="assets/img/blog/img-1.png"
                alt=""
              />
              <!-- badge -->
              <div
                class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]"
              >
                Medical
              </div>
            </div>
            <!-- text -->
            <div class="px-5 py-6">
              <!-- date -->
              <div class="mb-4">Jan 2, 2023</div>
              <!-- title -->
              <h4 class="h4 mb-[10px]">
                10 foods to avoid for your heart health
              </h4>
              <!-- description -->
              <p class="font-light">
                It's normal to feel anxiety, worry and grief any time you're
                diagnosed with a condition that's certainly true...

                <a href="" class="italic underline text-[#4c5354]">Read more</a>
              </p>
            </div>
          </div>
          <!-- post 2 -->
          <div
            class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group"
          >
            <!-- img -->
            <div class="relative overflow-hidden">
              <img
                class="group-hover:scale-110 transition-all duration-500"
                src="assets/img/blog/img-2.png"
                alt=""
              />
              <!-- badge -->
              <div
                class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]"
              >
                Medical
              </div>
            </div>
            <!-- text -->
            <div class="px-5 py-6">
              <!-- date -->
              <div class="mb-4">Jan 2, 2023</div>
              <!-- title -->
              <h4 class="h4 mb-[10px]">
                10 foods to avoid for your heart health
              </h4>
              <!-- description -->
              <p class="font-light">
                It's normal to feel anxiety, worry and grief any time you're
                diagnosed with a condition that's certainly true...

                <a href="" class="italic underline text-[#4c5354]">Read more</a>
              </p>
            </div>
          </div>
          <!-- post 3 -->
          <div
            class="blog__post max-w-[420px] shadow-custom2 rounded-[10px] overflow-hidden cursor-pointer group"
          >
            <!-- img -->
            <div class="relative overflow-hidden">
              <img
                class="group-hover:scale-110 transition-all duration-500"
                src="assets/img/blog/img-3.png"
                alt=""
              />
              <!-- badge -->
              <div
                class="bg-accent-tertiary absolute bottom-0 left-0 text-white text-base tracking-[2.24px] font-medium uppercase py-[6px] px-[18px]"
              >
                Medical
              </div>
            </div>
            <!-- text -->
            <div class="px-5 py-6">
              <!-- date -->
              <div class="mb-4">Jan 2, 2023</div>
              <!-- title -->
              <h4 class="h4 mb-[10px]">
                10 foods to avoid for your heart health
              </h4>
              <!-- description -->
              <p class="font-light">
                It's normal to feel anxiety, worry and grief any time you're
                diagnosed with a condition that's certainly true...

                <a href="" class="italic underline text-[#4c5354]">Read more</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog -->

    <!-- brands -->
    <section class="brands section">
      <div class="container mx-auto">
        <div
          class="flex flex-col xl:flex-row gap-y-12 xl:gap-y-0 justify-between items-center"
        >
          <img
            class="brands__logo"
            src="assets/img/brands/brand-1.svg"
            alt=""
          />
          <img
            class="brands__logo"
            src="assets/img/brands/brand-2.svg"
            alt=""
          />
          <img
            class="brands__logo"
            src="assets/img/brands/brand-3.svg"
            alt=""
          />
          <img
            class="brands__logo"
            src="assets/img/brands/brand-4.svg"
            alt=""
          />
          <img
            class="brands__logo"
            src="assets/img/brands/brand-5.svg"
            alt=""
          />
        </div>
      </div>
    </section>
    <!-- end brands -->

    <!-- newsletter -->
    <section class="newsletter bg-accent md:h-[444px] py-12 flex items-center relative overflow-hidden">
      <!-- pattern -->
      <div class="absolute left-0 bottom-0">
        <img src="assets/img/newsletter/pattern.svg" alt="" />
      </div>
      <!-- container -->
      <div class="newsletter__container container mx-auto">
        <!-- wrapper -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:gap-x-[58px]">
          <!-- text -->
          <div class="flex-1 z-10 text-center md:text-left">
            <div
              class="text-base uppercase text-white tracking-[2.24px] font-medium"
            >
              Our newsletter
            </div>
            <h1 class="h1 mb-4 text-white">Subscribe to get more updates</h1>
          </div>
          <!-- form -->
          <form class="flex-1">
            <div class="flex flex-col md:flex-row relative gap-y-4">
              <input
                type="text"
                placeholder="Your email address"
                class="rounded-full w-full h-[66px] bg-transparent border-2 border-white outline-none pl-[30px] placeholder:text-white focus:text-white"
              />
              <button class="btn btn-lg btn-white md:absolute right-0">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- end newsletter -->

    <!-- footer -->
    <footer class="footer pt-12 xl:pt-[150px]">
      <div class="container mx-auto pb-12 xl:pb-[100px]">
        <div class="flex flex-col xl:flex-row gap-x-5 gap-y-10">
          <!-- footer contact section -->
          <div class="footer__item flex-1">
            <!-- logo -->
            <a href="">
              <img class="mb-[30px]" src="assets/img/header/logo.svg" alt="" />
            </a>
            <!-- description -->
            <p class="mb-[20px]">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              quas?
            </p>
            <!-- location, email & phone -->
            <div class="flex flex-col gap-y-3 mb-10">
              <div class="flex items-center gap-x-[6px]">
                <i class="ri-map-pin-fill text-[24px] text-accent"></i>
                <div>123 Arling, Miola, NY</div>
              </div>
              <div class="flex items-center gap-x-[6px]">
                <i class="ri-mail-fill text-[24px] text-accent"></i>
                <div>insove@email.com</div>
              </div>
              <div class="flex items-center gap-x-[6px]">
                <i class="ri-phone-fill text-[24px] text-accent"></i>
                <div>(+123) 456 78910</div>
              </div>
            </div>
            <!-- socials -->
            <div class="flex gap-[14px] text-[30px]">
              <div
                class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all"
              >
                <i class="ri-facebook-circle-fill"></i>
              </div>
              <div
                class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all"
              >
                <i class="ri-instagram-line"></i>
              </div>
              <div
                class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all"
              >
                <i class="ri-twitter-fill"></i>
              </div>
              <div
                class="p-[10px] rounded-[10px] shadow-custom2 text-accent-tertiary hover:text-accent cursor-pointer transition-all"
              >
                <i class="ri-linkedin-box-fill"></i>
              </div>
            </div>
          </div>
          <!-- footer quick links section -->
          <div class="footer__item flex-1">
            <h4 class="h4 mb-5">Quick Links</h4>
            <div class="flex gap-x-5">
              <!-- list 1 -->
              <ul class="flex-1 flex flex-col gap-y-5">
                <li>
                  <a href="#" class="hover:text-accent transition-all">Home</a>
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Doctors</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Department</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Services</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all">Blog</a>
                </li>
              </ul>
              <!-- list 2 -->
              <ul class="flex-1 flex flex-col gap-y-5">
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Our Pricing</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Contact</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Careers</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all">Faqs</a>
                </li>
                <li>
                  <a href="#" class="hover:text-accent transition-all"
                    >Privacy Policy</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <!-- footer opening hours section -->
          <div class="footer__item flex-1">
            <h4 class="h4 mb-5">Opening Hours</h4>
            <!-- list -->
            <div class="flex flex-col gap-5">
              <!-- item -->
              <div class="flex-1">
                <div
                  class="flex justify-between items-center border-b pb-[10px]"
                >
                  <div>Monday - Thursday</div>
                  <div class="text-accent font-medium">8:00 Am - 6:00 Pm</div>
                </div>
              </div>
              <!-- item -->
              <div class="flex-1">
                <div
                  class="flex justify-between items-center border-b pb-[10px]"
                >
                  <div>Friday - Saturday</div>
                  <div class="text-accent font-medium">10:00 Am - 4:00 Pm</div>
                </div>
              </div>
              <!-- item -->
              <div class="flex-1">
                <div
                  class="flex justify-between items-center border-b pb-[10px]"
                >
                  <div>Sunday</div>
                  <div class="text-accent font-medium">Emergency Only</div>
                </div>
              </div>
              <!-- item -->
              <div class="flex-1">
                <div
                  class="flex justify-between items-center border-b pb-[10px]"
                >
                  <div>Personal</div>
                  <div class="text-accent font-medium">7:00 Am - 9:00 Pm</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <div class="py-[30px] border-t">
        <div class="container mx-auto text-center">
          <div class="font-light text-base">
            &copy; 2023 Insove - All rights reserved.
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <!-- temp div -->
    <!-- <div class="h-[4000px]"></div> -->

    <!-- SCRIPTS -->
    <!-- swiper -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- scroll reveal -->
    <script src="js/scrollreveal.min.js"></script>
    <!-- main -->
    <script src="js/main.js"></script>
  </body>
</html>
