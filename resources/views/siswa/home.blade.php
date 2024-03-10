<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama - Pelanggaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .pelanggaran {
            margin-top: 20px;
        }
        .pelanggaran-item {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .pelanggaran-item p {
            margin: 5px 0;
        }
        .pelanggaran-item h3 {
            margin: 0;
            color: #333;
        }
        .info {
            margin-top: 20px;
            padding: 10px;
            background-color: #e0f7fa;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halo, {{ Auth()->user()->nama }} </h1>
        <p>total skor {{ $total }}</p>
        <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" style="padding : 10px 16px; background-color:red;">logout</button>
        </form>
        <div class="pelanggaran">
            <h2>Pelanggaran yang Dilakukan</h2>
            @foreach ($pelanggaran as $item)
                <div class="pelanggaran-item">
                    <h3>{{ $item->jenis_pelanggaran->nama_pelanggaran }}</h3>
                    <p>Skor: {{ $item->jenis_pelanggaran->skor }}</p>
                </div>
            @endforeach
        </div>

        <div class="info">
            <h2>Tentang Platform Pelanggaran Siswa</h2>
            <p>Platform Pelanggaran Siswa adalah sebuah sistem yang membantu sekolah atau lembaga pendidikan dalam memantau dan mencatat pelanggaran yang dilakukan oleh siswa. Pelanggaran tersebut bisa meliputi berbagai hal seperti keterlambatan, ketidakhadiran, pelanggaran aturan sekolah, dan lain sebagainya. Dengan platform ini, sekolah dapat lebih mudah mengelola dan menindaklanjuti pelanggaran siswa untuk meningkatkan disiplin dan kedisiplinan di lingkungan sekolah.</p>
        </div>
    </div>
</body>
</html>
