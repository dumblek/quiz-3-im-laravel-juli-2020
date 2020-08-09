@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <h4>{{ $proyek->nama_proyek }}</h4>
    <p>{{ $proyek->deskripsi_proyek }}</p>
    <p>{{ $proyek->karyawan_manager_id }}</p>
</div>
@endsection