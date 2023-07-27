<!DOCTYPE html>
<html>
<title>Hasil Klasifikasi</title>
<style>
    .border_table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .border_table tr th{
        border: 1px solid black;
        padding: 5px;
    }
    
    .border_table tr td{
        border: 1px solid black;
        padding: 5px;
    }
</style>
<body style="background-color: white;">
    <center><h3>Cetak Laporan Hasil Klasifikasi</h3></center>
    @if($decisionTreeController->predictFinalClass($dataToPredict, $decisionTree) == 'Layak')
        <p>Hasil Klasifikasi adalah <strong>Layak</strong></p>
    @else
        <p>Hasil Klasifikasi adalah <strong>Tidak Layak</strong></p>
        </div>
    @endif
    <br>
    Data Rincian Klasifikasi :
    @php
    @endphp
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table width="100%">
                <tr>
                    <td>Kendaraan</td>
                    <td>:</td>
                    <td>{{ $merkKendaraan }}</td>
                </tr>
                <tr>
                    <td>No Polisi</td>
                    <td>:</td>
                    <td>{{ $noPolisi }}</td>
                </tr>
                @foreach ($dataToPredict as $attribute => $value)
                <tr>
                    <td>{{ $attribute }}</td>
                    <td>:</td>
                    <td>{{ $value }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div><br>
  
</body>
</html>