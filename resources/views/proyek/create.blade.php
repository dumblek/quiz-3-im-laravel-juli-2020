@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Proyek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/proyek" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="{{ old('nama_proyek','') }}" placeholder="Masukkan Nama Proyek" style="cursor: auto;">
                    @error('nama_proyek')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Deskripsi Proyek</label>
                    <input type="text" class="form-control" id="deskripsi_proyek" name="deskripsi_proyek" value="{{ old('deskripsi_proyek','') }}" placeholder="Masukkan Deskripsi Proyek" style="cursor: auto;">
                    @error('deskripsi_proyek')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Manager</label>
                    <input type="text" class="form-control" id="karyawan_manager_id" name="karyawan_manager_id" value="{{ old('karyawan_manager_id','') }}" placeholder="Masukkan Nama Manager" style="cursor: auto;">
                    @error('karyawan_manager_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
@endsection