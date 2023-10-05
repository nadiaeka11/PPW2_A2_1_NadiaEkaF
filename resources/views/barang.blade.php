@extends('header')

@section('title', 'Data Barang')

@section('content')

<div class="container">
    <h1>Data Barang</h1>
    <table border="1px" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang_barang as $gudang_barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp".number_format($barang->harga, 2, ',','.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_supplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>