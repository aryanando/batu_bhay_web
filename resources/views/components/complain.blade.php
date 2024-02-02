<!-- pelaporan komplain -->
<section class="appointment section">
    <div class="container mx-auto">
        <!-- title -->
        <h2 class="appointment__title h2 mb-5 xl:mb-[50px] text-center xl:text-left">
            Laporkan Keluhan Anda
            <span class="text-accent-tertiary">(0341) 591067</span>
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
                    <select class="appearance-none outline-none h-full w-full bg-transparent px-4">
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
                    <select class="appearance-none outline-none h-full w-full bg-transparent px-4">
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
                Kirim Keluhan
            </button>
        </form>
    </div>
</section>
<!-- end pelaporan komplain  -->
