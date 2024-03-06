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
    <script>
        let minDate, maxDate;

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

        let table = new DataTable('#myTable', {
            layout: {
                topStart: {
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                }
            }
        });

        document.querySelectorAll('#min, #max').forEach((el) => {
            el.addEventListener('change', () => table.draw());
        });
    </script>
@endpush

@push('custom-style')
    <link href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css" rel="stylesheet">

    {{-- https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css --}}
    {{-- https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css --}}
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
                                    <td>Minimum date:</td>
                                    <td><input type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="min" name="min"></td>
                                </tr>
                                <tr>
                                    <td>Maximum date:</td>
                                    <td><input type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="max" name="max"></td>
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
            </div>
        </div>
    </div>
@endsection
