@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Siswa</h2>
    <p><strong>Nama:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>

    <h4>Ekstrakurikuler yang diikuti:</h4>
    <ul>
        @forelse ($student->extracurriculars as $ekskul)
            <li>{{ $ekskul->name }}</li>
        @empty
            <li>Belum mengikuti ekstrakurikuler</li>
        @endforelse
    </ul>

    <a href="{{ route('students.index') }}">Kembali</a>
</div>
@endsection
