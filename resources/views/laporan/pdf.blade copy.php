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
    <br><br>
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
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title me-2">Data Testing </h3>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="border_table" width="100%">
                <tr>
                    <th>Kendaraan</th>
                    <th>Tahun Pembuatan</th>
                    <th>Bahan Bakar</th>
                    <th>Komponen Mesin</th>
                    <th>Ban</th>
                    <th>Lampu Utama</th>
                    <th>Kondisi Rem</th>
                    <th>Kelayakan</th>
                </tr>
                @foreach($klasifikasi as $data)
                <tr>
                    <td>{{ $data->dataken->merk_kendaraan }}<br>Jenis Kendaraan : {{ $data->jenis_kendaraan }} <br>No Polisi : {{ $data->dataken->no_polisi }} <br>No Mesin : {{ $data->dataken->no_mesin }} <br>No Rangka : {{ $data->dataken->no_rangka }}</td>
                    <td>{{ $data->tahun_pembuatan }}</td>
                    <td>{{ $data->bahan_bakar }}</td>
                    <td>{{ $data->komponen_mesin }}</td>
                    <td>{{ $data->ban }}</td>
                    <td>{{ $data->lampu_utama }}</td>
                    <td>{{ $data->kondisi_rem }}</td>
                    <td>{{ $data->kelayakan }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div><br>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title me-2">Data Entropy dan Gain </h3>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="border_table" width="100%">
                <tr>
                    <th>Atribut</th>
                    <th>Value</th>
                    <th>Jumlah Kasus</th>
                    <th>Layak</th>
                    <th>Tidak Layak</th>
                    <th>Entropy</th>
                    <th>Gain</th>
                </tr>
                @foreach ($attributeInformation as $attribute => $information)
                    <tr>
                        <td rowspan="{{ count($information['values']) + 1 }}">{{ $attribute }}</td>
                        @foreach ($information['values'] as $value)
                            <tr>
                                <td>{{ $value['value'] }}</td>
                                <td>{{ $value['count'] }}</td>
                                <td>{{ $value['positiveCount'] }}</td>
                                <td>{{ $value['negativeCount'] }}</td>
                                <td>{{ $value['entropy'] }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Total</td>
                            <td>{{ $information['totalInstances'] }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $information['attributeGain'] }}</td>
                        </tr>
                    </tr>
                @endforeach
            </table>
        </div>
    </div><br>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title me-2">Pohon Keputusan</h3>
        </div>
        <div class="card-datatable table-responsive pt-0">
            @php
                function printDecisionTree($tree, $indent = 0)
                {
                    echo "<ul>";
                    if (isset($tree['label'])) {
                        echo str_repeat("  ", $indent);
                        echo "|--" . $tree['label'] . "\n";
                    } else {
                        echo str_repeat("  ", $indent);
                        echo "# " . $tree['attribute'] . "\n";
                        foreach ($tree['children'] as $value => $child) {
                            echo str_repeat("  ", $indent + 1);
                            echo "|_" . "" . $value . "\n";
                            printDecisionTree($child, $indent + 2);
                        }
                    }
                    echo "</ul>";
                }
            @endphp

            <pre>
                @php
                    printDecisionTree($decisionTree);
                @endphp
            </pre>
        </div>
    </div><br>
</body>
</html>