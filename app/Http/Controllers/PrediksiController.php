<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasifikasi;

class PrediksiController extends Controller
{
    public function calculateEntropy($positiveCount, $negativeCount){
        $totalCount = $positiveCount + $negativeCount;
        $positiveRatio = $positiveCount / $totalCount;
        $negativeRatio = $negativeCount / $totalCount;

        $entropy = 0;

        if ($positiveRatio > 0) {
            $entropy -= $positiveRatio * log($positiveRatio, 2);
        }

        if ($negativeRatio > 0) {
            $entropy -= $negativeRatio * log($negativeRatio, 2);
        }

        return $entropy;
    }

    public function calculateGain($dataset, $attribute) {
        $attributeValues = array_unique(array_column($dataset, $attribute));
        $totalInstances = count($dataset);

        $attributeEntropy = 0;
        foreach ($attributeValues as $value) {
            $valueInstances = array_filter($dataset, function ($instance) use ($attribute, $value) {
                return $instance[$attribute] === $value;
            });

            $valuePositiveCount = count(array_filter($valueInstances, function ($instance) {
                return $instance['kelayakan'] === 'Layak';
            }));

            $valueNegativeCount = count($valueInstances) - $valuePositiveCount;
            $valueEntropy = $this->calculateEntropy($valuePositiveCount, $valueNegativeCount);

            $valueProbability = count($valueInstances) / $totalInstances;
            $attributeEntropy += $valueProbability * $valueEntropy;
        }

        $positiveCount = count(array_filter($dataset, function ($instance) {
            return $instance['kelayakan'] === 'Layak';
        }));

        $negativeCount = $totalInstances - $positiveCount;
        $parentEntropy = $this->calculateEntropy($positiveCount, $negativeCount);

        $gain = $parentEntropy - $attributeEntropy;
        return $gain;
    }

    public function displayAttributeInformation($dataset, $attribute) {
        $attributeValues = array_unique(array_column($dataset, $attribute));
        $totalInstances = count($dataset);

        echo "<tr>";
        echo "<td rowspan='" . (count($attributeValues) + 1) . "'>$attribute</td>";

        foreach ($attributeValues as $value) {
            $valueInstances = array_filter($dataset, function ($instance) use ($attribute, $value) {
                return $instance[$attribute] === $value;
            });

            $valueCount = count($valueInstances);
            $valuePositiveCount = count(array_filter($valueInstances, function ($instance) {
                return $instance['kelayakan'] === 'Layak';
            }));
            $valueNegativeCount = $valueCount - $valuePositiveCount;

            $valueEntropy = $this->calculateEntropy($valuePositiveCount, $valueNegativeCount);
            $valueGain = $this->calculateGain($valueInstances, 'kelayakan');

            echo "<tr>";
            echo "<td>$value</td>";
            echo "<td>$valueCount</td>";
            echo "<td>$valuePositiveCount</td>";
            echo "<td>$valueNegativeCount</td>";
            echo "<td>$valueEntropy</td>";
            echo "<td></td>";
            echo "</tr>";
        }

        $attributeGain = $this->calculateGain($dataset, $attribute);

        echo "<tr>";
        echo "<td>Total</td>";
        echo "<td>$totalInstances</td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>$attributeGain</td>";
        echo "</tr>";
    }

    public function getHighestGainAttribute($dataset, $attributes) {
        $maxGainAttribute = '';
        $maxGainValue = -INF;

        foreach ($attributes as $attribute) {
            $attributeGain = $this->calculateGain($dataset, $attribute);
            if ($attributeGain > $maxGainValue) {
                $maxGainValue = $attributeGain;
                $maxGainAttribute = $attribute;
            }
        }

        return $maxGainAttribute;
    }

    public function buildDecisionTree($dataset, $attributes) {
        // Mendapatkan atribut dengan gain tertinggi
        $maxGainAttribute = '';
        $maxGainValue = -INF;
        foreach ($attributes as $attribute) {
            $attributeGain = $this->calculateGain($dataset, $attribute);
            if ($attributeGain > $maxGainValue) {
                $maxGainValue = $attributeGain;
                $maxGainAttribute = $attribute;
            }
        }

        // Membuat node baru dengan atribut tertinggi sebagai node akar
        $rootNode = ['attribute' => $maxGainAttribute, 'children' => []];

        // Mendapatkan nilai unik dari atribut dengan gain tertinggi
        $attributeValues = array_unique(array_column($dataset, $maxGainAttribute));

        // Membagi dataset menjadi subset berdasarkan nilai unik atribut
        foreach ($attributeValues as $value) {
            $valueInstances = array_filter($dataset, function ($instance) use ($maxGainAttribute, $value) {
                return $instance[$maxGainAttribute] === $value;
            });

            // Menghapus atribut yang telah digunakan
            $remainingAttributes = array_diff($attributes, [$maxGainAttribute]);

            // Jika semua instance memiliki label kelas yang sama, membuat leaf node dengan label tersebut
            $labels = array_column($valueInstances, 'kelayakan');
            $uniqueLabels = array_unique($labels);
            if (count($uniqueLabels) === 1) {
                $leafNode = ['label' => $uniqueLabels[0]];
                $rootNode['children'][$value] = $leafNode;
            } else {
                // Jika belum terpenuhi, memanggil rekursif untuk membangun pohon keputusan pada subset yang baru
                $childNode = $this->buildDecisionTree($valueInstances, $remainingAttributes);
                $rootNode['children'][$value] = $childNode;
            }
        }

        return $rootNode;
    }

    // Fungsi untuk mencetak pohon keputusan
    public function printDecisionTree($tree, $indent = 0) {
        if (isset($tree['label'])) {
            echo str_repeat("  ", $indent);
            echo "|--" . $tree['label'] . "\n";
        } else {
            echo str_repeat("  ", $indent);
            echo "" . $tree['attribute'] . "\n";
            foreach ($tree['children'] as $value => $child) {
                echo str_repeat("  ", $indent + 1);
                echo "|_" . "" . $value . "\n";
                printDecisionTree($child, $indent + 2);
            }
        }
    }

    // Menampilkan pohon keputusan
    function getAttributeInformation($dataset, $attribute) {
        $attributeValues = array_unique(array_column($dataset, $attribute));
        $totalInstances = count($dataset);

        $attributeInformation = [
            'values' => [],
            'totalInstances' => $totalInstances,
            'attributeGain' => 0,
        ];

        foreach ($attributeValues as $value) {
            $valueInstances = array_filter($dataset, function ($instance) use ($attribute, $value) {
                return $instance[$attribute] === $value;
            });

            $valueCount = count($valueInstances);
            $valuePositiveCount = count(array_filter($valueInstances, function ($instance) {
                return $instance['kelayakan'] === 'Layak';
            }));
            $valueNegativeCount = $valueCount - $valuePositiveCount;

            $valueEntropy = $this->calculateEntropy($valuePositiveCount, $valueNegativeCount);
            $valueGain = $this->calculateGain($valueInstances, 'kelayakan');

            $attributeInformation['values'][] = [
                'value' => $value,
                'count' => $valueCount,
                'positiveCount' => $valuePositiveCount,
                'negativeCount' => $valueNegativeCount,
                'entropy' => $valueEntropy,
                'gain' => $valueGain,
            ];
        }

        $attributeInformation['attributeGain'] = $this->calculateGain($dataset, $attribute);

        return $attributeInformation;
    }

    function predictFinalClass($data, $tree) {
        while (isset($tree['attribute'])) {
            $attribute = $tree['attribute'];
            $value = $data[$attribute];

            if (isset($tree['children'][$value])) {
                $tree = $tree['children'][$value];
            } else {
                return "Tidak Diketahui";
            }
        }
        return $tree['label'];
    }

    public function index(){
        $klasifikasi = Klasifikasi::all();
        $dataset = Klasifikasi::all()->toArray();
        $attributes = ['jenis_kendaraan', 'tahun_pembuatan', 'bahan_bakar', 'komponen_mesin', 'ban', 'lampu_utama', 'kondisi_rem'];
        $attributeInformation = [];

        foreach ($attributes as $attribute) {
            $attributeInformation[$attribute] = $this->getAttributeInformation($dataset, $attribute);
        }

        $decisionTree = $this->buildDecisionTree($dataset, $attributes);

        $dataToPredict = [
            'jenis_kendaraan' => 'Roda 4',
            'tahun_pembuatan' => 2018,
            'bahan_bakar' => 'Pertamax',
            'komponen_mesin' => 'Baik',
            'ban' => 'Sedang',
            'lampu_utama' => 'Baik',
            'kondisi_rem' => 'Baik'
        ];

        $decisionTreeController = new PrediksiController();
        return view('prediksi.index', compact('dataset','klasifikasi','attributeInformation','decisionTree','dataToPredict','decisionTreeController'));
        // dd($decisionTree);
    }
}
