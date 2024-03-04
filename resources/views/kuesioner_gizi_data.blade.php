@extends('layouts.kuesioner')

@push('custom-scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
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

                        <script>
                            let table = new DataTable('#myTable');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
