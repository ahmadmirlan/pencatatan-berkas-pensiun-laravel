@extends('pages.dashboard.layouts.main')

@section('title')
    <title>PT. Taspen (persero) - Dashboard</title>
@endsection

@section('main_content')
    <div class="main-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary">
                    <h4 class="card-title"><strong>Pencatatan Berkas</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-success" href="{{route('berkas.add')}}">Input Data</a>
                        <a class="btn btn-warning" href="{{route('berkas.tampil')}}">Tampil Data</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-success">
                    <h4 class="card-title"><strong>Cash Flow</strong></h4>

                    <div class="card-body">
                        <button class="btn btn-primary">Input Data</button>
                        <button class="btn btn-warning">Tampil Data</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong>Sumber SPP</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('spp.add')}}">Input Data</a>
                        <a class="btn btn-warning" href="{{route('spp.tampil')}}">Tampil Data</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong>Jenis Layanan</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('jl.tambah')}}">Input Data</a>
                        <a class="btn btn-warning" href="{{route('jl.tampil')}}">Tampil Data</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong>Jenis SPP</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('jenisSpp.tambah')}}">Input Data</a>
                        <a class="btn btn-warning" href="{{route('jenisSpp.tampil')}}">Tampil Data</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-outline-warning">
                    <h4 class="card-title"><strong>Jenis Prioritas</strong></h4>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{route('jenisTransfer.tambah')}}">Input Data</a>
                        <a class="btn btn-warning" href="{{route('jenisTransfer.tampil')}}">Tampil Data</a>
                    </div>
                </div>
            </div>
        </div>


    </div><!--/.main-content -->
@endsection