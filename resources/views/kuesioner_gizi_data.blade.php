@extends('layouts.kuesioner')

@push('custom-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.5.2/js/dataTables.dateTime.min.js"></script>

    {{-- Chart --}}
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

    <script>
        let minDate, maxDate;
        var countRasaEnak = 0;
        var countRasaTidakEnak = 0;
        var countPenamilanBaik = 0;
        var countPenamilanTidakBaik = 0;
        var countTeksturSesuai = 0;
        var countTeksturTidakSesuai = 0;
        var countBervariasi = 0;
        var countTidakBervariasi = 0;
        var dataPoints = {
            rasa: [{
                    label: "Enak",
                    y: 5
                },
                {
                    label: "Tidak Enak",
                    y: 5
                }
            ],
            tampilan: [{
                    label: "Menarik",
                    y: 5
                },
                {
                    label: "Tidak Menarik",
                    y: 5
                }
            ],
            tekstur: [{
                    label: "Sesuai",
                    y: 5
                },
                {
                    label: "Tidak Sesuai",
                    y: 5
                }
            ],
            variasi: [{
                    label: "Bervariasi",
                    y: 5
                },
                {
                    label: "Tidak Bervariasi",
                    y: 5
                }
            ],
        }

        // Custom filtering function which will search data in column four between two values
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            let min = minDate.val();
            let max = maxDate.val();
            let date = new Date(data[2]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        });

        // Create date inputs
        minDate = new DateTime('#min', {
            format: 'YYYY-MM-DD'
        });
        maxDate = new DateTime('#max', {
            format: 'YYYY-MM-DD'
        });

        var table = new DataTable('#myTable', {
            layout: {
                topStart: {
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                }
            }
        });


        document.querySelectorAll('#min, #max').forEach((el) => {

            el.addEventListener('change', () => {
                table.draw()
                dataChartReseter()
            });
        });

        function dataChartReseter() {
            table.rows().eq(0).each(function(index) {
                var row = table.row(index);

                var data = row.data();
                let dateData2 = new Date(data[2]);
                let dateDataMin = new Date(document.getElementById("min").value);
                let dateDataMax = new Date(document.getElementById("max").value);

                if (document.getElementById("min").value == null || document.getElementById(
                        "min").value == "") {
                    var min = true;
                } else {
                    var min = (dateData2 >= dateDataMin);
                }
                if (document.getElementById("max").value == null || document.getElementById(
                        "max").value == "") {
                    var max = true;
                } else {
                    var max = (dateDataMax >= dateData2);
                }

                if (min && max) {
                    if (data[5] == "Enak") {
                        countRasaEnak++;
                    } else {
                        countRasaTidakEnak++;
                    }

                    if (data[6] == "Menarik") {
                        countPenamilanBaik++;
                    } else {
                        countPenamilanTidakBaik++;
                    }

                    if (data[7] == "Sesuai") {
                        countTeksturSesuai++;
                    } else {
                        countTeksturTidakSesuai++;
                    }

                    if (data[8] == "Bervariasi") {
                        countBervariasi++;
                    } else {
                        countTidakBervariasi++;
                    }
                }
            });

            renderChart();
            renderChart0();
            renderChart1();
            renderChart2();

            countRasaEnak = 0;
            countRasaTidakEnak = 0;
            countPenamilanBaik = 0;
            countPenamilanTidakBaik = 0;
            countTeksturSesuai = 0;
            countTeksturTidakSesuai = 0;
            countBervariasi=0;
            countTidakBervariasi=0;
        }
    </script>

    <script>
        var options = {
            animationEnabled: true,
            title: {
                text: "Prosentase Review Makanan Enak dan Tidak Enak"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: dataPoints['rasa'],
            }]
        };

        function renderChart() {
            document.getElementById("chartContainer").innerHTML = "";
            myChartRasa = new CanvasJS.Chart("chartContainer", options);
            dataPoints['rasa'][0]['y'] = countRasaEnak;
            dataPoints['rasa'][1]['y'] = countRasaTidakEnak;
            myChartRasa.render();
        }
    </script>

    <script>
        var options0 = {
            animationEnabled: true,
            title: {
                text: "Prosentase Review Tampilan Makanan"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: dataPoints['tampilan'],
            }]
        };


        function renderChart0() {
            document.getElementById("chartContainer0").innerHTML = "";
            myChartTampilan = new CanvasJS.Chart("chartContainer0", options0);
            dataPoints['tampilan'][0]['y'] = countPenamilanBaik;
            dataPoints['tampilan'][1]['y'] = countPenamilanTidakBaik;
            myChartTampilan.render();
        }
    </script>
    <script>
        var options1 = {
            animationEnabled: true,
            title: {
                text: "Prosentase Review Tekstur Makanan"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: dataPoints['tekstur'],
            }]
        };


        function renderChart1() {
            document.getElementById("chartContainer1").innerHTML = "";
            myChartTekstur = new CanvasJS.Chart("chartContainer1", options1);
            dataPoints['tekstur'][0]['y'] = countTeksturSesuai;
            dataPoints['tekstur'][1]['y'] = countTeksturTidakSesuai;
            myChartTekstur.render();
        }
    </script>
    <script>
        var options2 = {
            animationEnabled: true,
            title: {
                text: "Prosentase Review Variasi Makanan"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: dataPoints['variasi'],
            }]
        };


        function renderChart2() {
            document.getElementById("chartContainer2").innerHTML = "";
            myChartVariasi = new CanvasJS.Chart("chartContainer2", options2);
            dataPoints['variasi'][0]['y'] = countBervariasi;
            dataPoints['variasi'][1]['y'] = countTidakBervariasi;
            myChartVariasi.render();
        }
    </script>
    <script>
        window.onload = function() {
            dataChartReseter();
        }
    </script>
@endpush

@push('custom-style')
    <link href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 w-full">
                <div class="card ">
                    <div class="card-header">{{ __('Kuesioner Gizi') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table border="0" cellspacing="5" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td>Tanggal Awal:</td>
                                    <td><input type="text"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            id="min" name="min"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Akhir:</td>
                                    <td><input type="text"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            id="max" name="max"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="myTable">
                            <thead>
                                <th>No.</th>
                                <th>No Rawat</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Bangsal</th>
                                <th>Rasa</th>
                                <th>Penampilan</th>
                                <th>Tekstur</th>
                                <th>Variasi</th>
                                <th>Saran</th>


                            </thead>
                            <tbody>
                                {{-- @dd($data) --}}
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $dataKuesioner)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $dataKuesioner['no_rawat'] }}</td>
                                        <td>{{ $dataKuesioner['tgl'] }}</td>
                                        <td>{{ $dataKuesioner['nama'] }}</td>
                                        <td>{{ $dataKuesioner['bgsl'] }}</td>
                                        <td>{{ $dataKuesioner['rasa'] == 1 ? 'Enak' : 'Tidak Enak' }}</td>
                                        <td>{{ $dataKuesioner['penampilan'] == 1 ? 'Menarik' : 'Tidak Menarik' }}</td>
                                        <td>{{ $dataKuesioner['tekstur'] == 1 ? 'Sesuai' : 'Tidak Sesuai' }}</td>
                                        <td>{{ $dataKuesioner['variasi'] == 1 ? 'Bervariasi' : 'Tidak Bervariasi' }}</td>
                                        <td>{{ $dataKuesioner['saran'] }}</td>

                                        @php
                                            $no++;
                                        @endphp



                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{-- @dd($data) --}}
                        {{-- {{ $dataTable->table() }} --}}


                    </div>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div class="card">
                        <div class="card-header">
                            Chart Rasa
                        </div>
                        <div class="card-body">
                            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                    <!-- Chart2 -->
                    <div class="card">
                        <div class="card-header">
                            Chart Penampilan
                        </div>
                        <div class="card-body">
                            <div id="chartContainer0" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                    <!-- Chart3 -->
                    <div class="card">
                        <div class="card-header">
                            Chart Tekstur
                        </div>
                        <div class="card-body">
                            <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                    <!-- Chart4 -->
                    <div class="card">
                        <div class="card-header">
                            Chart Variasi
                        </div>
                        <div class="card-body">
                            <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
