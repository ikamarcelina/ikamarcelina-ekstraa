@extends('layouts.app') {{-- kalau kamu pakai layout, bisa disesuaikan --}}

@section('content')
    <div class="container">
        <h1>Daftar Siswa</h1>

        <table border="1" cellpadding="10">
          <table>
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->class }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
                 @foreach ($students as $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <td>
    @foreach ($student->extracurriculars as $ekskul)
        {{ $ekskul->name }}<br>
    @endforeach
</td>

                            <td>
    <form action="{{ route('students.enroll', $student->id) }}" method="POST">
        @csrf
        <select name="extracurricular_id">
            @foreach ($extracurriculars as $ekskul)
                <option value="{{ $ekskul->id }}">{{ $ekskul->name }}</option>
            @endforeach
        </select>
        <button type="submit">Daftar</button>
    </form>
</td>

                            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                            <a href="{{ route('students.show', $student->id) }}">Lihat</a>

                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

