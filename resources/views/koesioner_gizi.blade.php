@extends('layouts.kuesioner')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kuesioner Gizi') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="w-full max-w-md" id="kuesionerGiziForm" method="POST"
                            action="/kuesioner/kepuasan-pasien-gizi/">
                            {{-- Nama --}}
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4"
                                        for="inline-full-name">
                                        Nama Pasien
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <input name="nama"
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                        id="inline-full-name" type="text" value="{{ $data['nama'] }}" disabled>
                                </div>
                            </div>

                            {{-- Tanggal --}}
                            <div class="relative max-w-sm py-2">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-format="yyyy-mm-dd" type="text" id="datepickerId"
                                    name="tgl"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>

                            {{-- Item --}}
                            <div class="flex gap-10 py-2">
                                <div class="card w-full">
                                    <div class="card-header">Bagaimana Rasa Makanan Yang Disajikan?</div>
                                    <div class="card-body">
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="html">
                                                <input name="rasa" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    value="1" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="html">
                                                Enak
                                            </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="react">
                                                <input name="rasa" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    value="0" checked />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="react">
                                                Tidak Enak
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex gap-10 py-2">
                                <div class="card w-full">
                                    <div class="card-header">Bagaimana penampilan/ warna makanan yang disajikan?</div>
                                    <div class="card-body">
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="html">
                                                <input name="penampilan" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="html" value="1" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="html">
                                                Menarik
                                            </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="react">
                                                <input name="penampilan" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="react" value="0" checked />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="react">
                                                Tidak Menarik
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex gap-10 py-2">
                                <div class="card w-full">
                                    <div class="card-header">Bagaimana tekstur makanan yang disajikan?</div>
                                    <div class="card-body">
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="html">
                                                <input name="tekstur" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="html" value="1" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="html">
                                                Sesuai
                                            </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="react">
                                                <input name="tekstur" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="react" checked value="0" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="react">
                                                Tidak Sesuai
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex gap-10 py-2">
                                <div class="card w-full">
                                    <div class="card-header">Bagaimana variasi menu yang disajikan?</div>
                                    <div class="card-body">
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="html">
                                                <input name="variasi" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="html" value="1" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="html">
                                                Bervariasi
                                            </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                htmlFor="react">
                                                <input name="variasi" type="radio"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                                    id="react" checked value="0" />
                                                <span
                                                    class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 16 16" fill="currentColor">
                                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                htmlFor="react">
                                                Tidak Bervariasi
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Text Area --}}
                            <div class="flex gap-10 py-2">
                                <div class="card w-full">
                                    <div class="card-header">SARAN untuk pelayanan makanan di RS Bhayangkara Hasta Brata
                                        Batu!</div>
                                    <div class="card-body">
                                        <textarea id="saran" name="saran" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                <button type="button" onclick="sendForm()"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Simpan
                                </button>
                                <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 12 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 20">
                                            <path
                                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                        <span class="sr-only">Set location</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                    </button>
                                </div>
                            </div>

                        </form>


                        {{-- <script type="text/javascript">
                            $(document).ready(function() {
                                $('.openModal').on('click', function(e) {
                                    $('#interestModal').removeClass('invisible');
                                });
                                $('.closeModal').on('click', function(e) {
                                    $('#interestModal').addClass('invisible');
                                });
                            });
                        </script> --}}

                        <script>
                            function successModal() {
                                var element = document.getElementById("successModal");
                                element.classList.remove("invisible");
                            }
                            sendForm = async function sendData() {
                                const json = JSON.stringify({
                                    no_rawat: "<?= $no_rawat ?>",
                                    nama: document.getElementById("inline-full-name").value,
                                    bgsl: "{{ $data['bgsl'] }}",
                                    rasa: document.querySelector('input[name="rasa"]:checked').value,
                                    penampilan: document.querySelector('input[name="penampilan"]:checked').value,
                                    tekstur: document.querySelector('input[name="tekstur"]:checked').value,
                                    variasi: document.querySelector('input[name="variasi"]:checked').value,
                                    saran: document.querySelector('textarea[name="saran"]').value,
                                    tgl: document.getElementById("datepickerId").value,
                                });
                                // console.log(json)

                                const data2 = await axios
                                    .post("/kuesioner/kepuasan-pasien-gizi", json, {
                                        headers: {
                                            "Content-Type": "application/json",
                                        },
                                    })
                                    .then((response) => {
                                        console.log(response.data);
                                        successModal();
                                    }).catch((error) => console.log(error));

                            };
                            // console.log("hahahaha")
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
