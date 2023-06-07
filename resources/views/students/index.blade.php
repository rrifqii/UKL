@extends('templates.default')

@php
  $title = 'Data Pengunjung';
  $preTitle = 'semua data';
@endphp

@push('page-action')
  <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah orang</a>
@endpush

@section('content')
<form action="" method="get">
        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
    </form>

    <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>address</th>
                          <th>tlpn</th>
                          <th>pekerjaan</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                            <tr>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->address }}</td>
                          <td>{{ $student->phone_number }}</td>
                          <td>privacy</td>
                          
                          </td>
                          <td>
                            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{ $students->links() }}
                </div>
@endsection