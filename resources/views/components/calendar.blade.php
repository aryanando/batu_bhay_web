{{-- Kalender section --}}

<section class="mt-10">
    <div class="container mx-auto">
        <div class="grid content-center">
            <div>
                <h2 class="calendar__title h2 mb-5 xl:mb-[50px] text-center xl:text-left">
                    Kalender Kesehatan
                </h2>
                <div class="antialiased sans-serif bg-gray-100 h-screen">
                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                        <div class="container mx-auto px-4 py-2 md:py-24">

                            <!-- <div class="font-bold text-gray-800 text-xl mb-4">
                                    Schedule Tasks
                                </div> -->

                            <div class="bg-white rounded-lg shadow overflow-hidden">

                                <div class="flex items-center justify-between py-2 px-6">
                                    <div>
                                        <span x-text="MONTH_NAMES[month]"
                                            class="text-lg font-bold text-gray-800"></span>
                                        <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                    </div>
                                    <div class="border rounded-lg px-1" style="padding-top: 2px;">
                                        <button type="button"
                                            class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center"
                                            :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                            :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <div class="border-r inline-flex h-6"></div>
                                        <button type="button"
                                            class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1"
                                            :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                            :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="-mx-1 -mb-1">
                                    <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                        <template x-for="(day, index) in DAYS" :key="index">
                                            <div style="width: 14.26%" class="px-2 py-2">
                                                <div x-text="day"
                                                    class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center">
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex flex-wrap border-t border-l">
                                        <template x-for="blankday in blankdays">
                                            <div style="width: 14.28%; height: 120px"
                                                class="text-center border-r border-b px-4 pt-2"></div>
                                        </template>
                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                            <div style="width: 14.28%; height: 120px"
                                                class="px-4 pt-2 border-r border-b relative">
                                                <div @click="showEventModal(date)" x-text="date"
                                                    class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                                    :class="{
                                                        'bg-blue-500 text-white': isToday(date) ==
                                                            true,
                                                        'text-gray-700 hover:bg-blue-200': isToday(date) ==
                                                            false
                                                    }">
                                                </div>
                                                <div style="height: 80px;" class="overflow-y-auto mt-1">
                                                    <!-- <div
                                                            class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                                            x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                                            x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                                    <template
                                                        x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                                        <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                            :class="{
                                                                'border-blue-200 text-blue-800 bg-blue-100': event
                                                                    .event_theme === 'blue',
                                                                'border-red-200 text-red-800 bg-red-100': event
                                                                    .event_theme === 'red',
                                                                'border-yellow-200 text-yellow-800 bg-yellow-100': event
                                                                    .event_theme === 'yellow',
                                                                'border-green-200 text-green-800 bg-green-100': event
                                                                    .event_theme === 'green',
                                                                'border-purple-200 text-purple-800 bg-purple-100': event
                                                                    .event_theme === 'purple'
                                                            }">
                                                            <p x-text="event.event_title"
                                                                class=" text-xs leading-tight"></p>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                            'October', 'November', 'December'
                        ];
                        const DAYS = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];

                        function app() {
                            return {
                                month: '',
                                year: '',
                                no_of_days: [],
                                blankdays: [],
                                days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                                events: [{
                                        event_date: new Date(2024, 0, 1),
                                        event_title: "Tahun Baru 2024",
                                        event_theme: 'red'
                                    },

                                    {
                                        event_date: new Date(2024, 1, 8),
                                        event_title: "Isra Mi'Raj Nabi Muhammad SAW",
                                        event_theme: 'red'
                                    },

                                    {
                                        event_date: new Date(2024, 1, 10),
                                        event_title: "Tahun Baru Imlek",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 1, 14),
                                        event_title: "Pemilu Legislatif 2024",
                                        event_theme: 'red'
                                    },

                                    {
                                        event_date: new Date(2024, 2, 11),
                                        event_title: "HR Nyepi Saka 1946",
                                        event_theme: 'red'
                                    },

                                    {
                                        event_date: new Date(2024, 2, 29),
                                        event_title: "Wafat Isa Almasih",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 2, 31),
                                        event_title: "Paskah",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 3, 10),
                                        event_title: "Hari Raya Idul Fitri",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 3, 11),
                                        event_title: "Hari Raya Idul Fitri",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 4, 1),
                                        event_title: "Hari Buruh Internasional",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 4, 9),
                                        event_title: "Kenaikan Isa Al-Masih",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 4, 23),
                                        event_title: "Hari Raya Waisak 2568 BE",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 5, 1),
                                        event_title: "Hari Lahir Pancasila",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 5, 17),
                                        event_title: "Hari Raya Idul Adha",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 6, 7),
                                        event_title: "Tahun Baru Islam",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 7, 17),
                                        event_title: "Hari Kemerdekaan Indonesia",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 8, 16),
                                        event_title: "Maulid Nabi Muhammad SAW",
                                        event_theme: 'red'
                                    },
                                    {
                                        event_date: new Date(2024, 11, 25),
                                        event_title: "Hari Raya Natal",
                                        event_theme: 'red'
                                    },



                                ],
                                event_title: '',
                                event_date: '',
                                event_theme: 'blue',

                                themes: [{
                                        value: "blue",
                                        label: "Blue Theme"
                                    },
                                    {
                                        value: "red",
                                        label: "Red Theme"
                                    },
                                    {
                                        value: "yellow",
                                        label: "Yellow Theme"
                                    },
                                    {
                                        value: "green",
                                        label: "Green Theme"
                                    },
                                    {
                                        value: "purple",
                                        label: "Purple Theme"
                                    }
                                ],

                                openEventModal: false,

                                initDate() {
                                    let today = new Date();
                                    this.month = today.getMonth();
                                    this.year = today.getFullYear();
                                    this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                },

                                isToday(date) {
                                    const today = new Date();
                                    const d = new Date(this.year, this.month, date);

                                    return today.toDateString() === d.toDateString() ? true : false;
                                },

                                showEventModal(date) {
                                    // open the modal
                                    this.openEventModal = true;
                                    this.event_date = new Date(this.year, this.month, date).toDateString();
                                },

                                addEvent() {
                                    if (this.event_title == '') {
                                        return;
                                    }

                                    this.events.push({
                                        event_date: this.event_date,
                                        event_title: this.event_title,
                                        event_theme: this.event_theme
                                    });

                                    console.log(this.events);

                                    // clear the form data
                                    this.event_title = '';
                                    this.event_date = '';
                                    this.event_theme = 'blue';

                                    //close the modal
                                    this.openEventModal = false;
                                },

                                getNoOfDays() {
                                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                    // find where to start calendar day of week
                                    let dayOfWeek = new Date(this.year, this.month).getDay();
                                    let blankdaysArray = [];
                                    for (var i = 1; i <= dayOfWeek; i++) {
                                        blankdaysArray.push(i);
                                    }

                                    let daysArray = [];
                                    for (var i = 1; i <= daysInMonth; i++) {
                                        daysArray.push(i);
                                    }

                                    this.blankdays = blankdaysArray;
                                    this.no_of_days = daysArray;
                                }
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
