<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Kartu Hasil Studi | </title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center mb-5">Kartu Hasil Studi (KHS)</h1>
        <h6><b>Nama: </b>{{ $mahasiswa->nama }}</h6>
        <h6><b>Nim: </b>{{ $mahasiswa->nim }}</h6>
        <h6><b>Kelas: </b>{{ $mahasiswa->kelas->nama_kelas }}</h6>
        <table class="table mt-5">
            <thead>
                <td><b>Mata Kuliah</b></td>
                <td><b>SKS</b></td>
                <td><b>Semester</b></td>
                <td><b>Nilai</b></td>
            </thead>
            @foreach ($mahasiswa->matakuliah as $mhs)
            <tr>
                <td>{{ $mhs->matakuliah->nama_matkul }}</td>
                <td>{{ $mhs->matakuliah->sks }}</td>
                <td>{{ $mhs->matakuliah->semester }}</td>
                <td>{{ $mhs->nilai }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</html>