@extends('layouts.kuesioner')

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

                        @foreach ($data as $dataKuesioner)
                            <p>{{$dataKuesioner['nama']}}</p>
                        @endforeach
                            {{-- @dd($data) --}}
                        {{-- {{ $dataTable->table() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
