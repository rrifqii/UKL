@extends('templates.default')

@php
  $title = 'Data Pengunjung';
  $preTitle = 'Edit data';
@endphp


@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" name="example-text-input" placeholder="nama lengkap" value="{{ $student->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" name="example-text-input" placeholder="alamat lengkap" value="{{ $student->address }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomer Telpon</label>
                    <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="nomor tlpn/whatsapp yang bisa dihubungi" value="{{ $student->phone_number }}">
                </div>

                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection