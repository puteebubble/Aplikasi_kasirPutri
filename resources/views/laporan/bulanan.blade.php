@extends('layouts.laporan', ['title' => 'Laporan Bulanan'])

@section('content')
    <h3 class="text-center">{{ config('app.name') }}</h3>
    <h3 class="text-center">Laporan Bulanan</h3>
    <p class="text-center">Jl. Raya Padaherang Km.1, Desa Padaherang <br> Kec.Padaherang - Kab. Pangandaran</p>
    <hr>
    <p>Bulan : {{ $bulan }} {{ request()->tahun }}</p>
    <p>Role Pelanggan: {{ request()->pelanggan_id }}</p>
    
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah Transaksi</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $key => $row)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row->tgl }}</td>
                    <td>{{ $row->jumlah_transaksi }}</td>
                    <td>{{ number_format($row->jumlah_total, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Jumlah Total</th>
                <th>{{ number_format($penjualan->sum('jumlah_total'), 0, ',', '.') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
