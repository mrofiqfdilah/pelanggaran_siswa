<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('datapelanggaran.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <input type="hidden" name="nama_penginput" value="{{ Auth()->User()->id }}">
    <input type="text" name="wali_kelas" placeholder="Nama wali kelas"><br>
    <input type="text" name="catatan" placeholder="masukan catatan"><br>
    <input type="date" name="tgl_pelanggaran"> <br>
    <input type="file" name="foto_siswa" alt=""><br>
    <select name="id_users" >
        @foreach ($siswa as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endforeach
    </select><br>
    <select name="id_kelas" >
        @foreach ($kelas as $item)
            <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
        @endforeach
    </select>
    <select name="id_jenis_pelanggaran" >
        @foreach ($jenis as $item)
            <option value="{{ $item->id }}">{{ $item->nama_pelanggaran }}</option>
        @endforeach
    </select>
    <button type="submit">submit</button>
    </form>
</body>
</html>