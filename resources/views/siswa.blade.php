@extends('template')

@section('content')
    <h3>Data Siswa</h3>
    <table class="table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Riska Amelia</td>
            <td>101</td>
            <td>2010-12-12</td>
        </tr>
        <tr>
            <td>Amelia Riska</td>
            <td>102</td>
            <td>2010-04-27</td>
        </tr>
    </table>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{  url('beranda')  }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{  url('data-siswa')  }}">Data Siswa</a>
            </li>
            <li>
                <a class="nav-link" href="{{  url('info-kegiatan')  }}">Info Kegiatan</a>
            </li>
        </ul>
    </nav>
    <div>
        <h3>Data Siswa</h3>
        <table class="table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tanggal Lahir</th>
            </tr>
            <tr>
                <td>Riska Amelia</td>
                <td>101</td>
                <td>2010-12-12</td>
            </tr>
            <tr>
                <td>Amelia Riska</td>
                <td>102</td>
                <td>2010-04-27</td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</body>
</html> -->