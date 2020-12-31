<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD | Cetak Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
            border: 1px;
		}
	</style>
    <center>
        <h5>Laporan Data Siswa</h4>
    </center>
    <table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No. Telp</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach($siswa as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $a->NIM }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->kelas }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->notelp }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>