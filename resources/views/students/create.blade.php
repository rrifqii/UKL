@extends('templates.default')

@php
  $title = 'Data Pengunjung';
  $preTitle = 'Tambah data';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" name="example-text-input" placeholder="nama lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" name="example-text-input" placeholder="alamat lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomer Telpon</label>
                    <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="nomor tlpn/whatsapp yang bisa dihubungi">
                </div>

                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection