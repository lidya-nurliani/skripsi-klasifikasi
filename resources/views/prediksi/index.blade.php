<table border="1">
    <thead>
        <tr>
            <th>Jenis Kendaraan</th>
            <th>Tahun</th>
            <th>BBM</th>
            <th>Mesin</th>
            <th>Ban</th>
            <th>Lampu</th>
            <th>Rem</th>
            <th>Kelayakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($klasifikasi as $data)
        <tr>
            <td>{{ $data->jenis_kendaraan }}</td>
            <td>{{ $data->tahun_pembuatan }}</td>
            <td>{{ $data->bahan_bakar }}</td>
            <td>{{ $data->komponen_mesin }}</td>
            <td>{{ $data->ban }}</td>
            <td>{{ $data->lampu_utama }}</td>
            <td>{{ $data->kondisi_rem }}</td>
            <td>{{ $data->kelayakan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<table border="1">
    <thead>
        <tr>
            <th>Attribute</th>
            <th>Entropy</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entropies as $attribute => $entropy)
        <tr>
            <td>{{ $attribute }}</td>
            <td>{{ $entropy }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
