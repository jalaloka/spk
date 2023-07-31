<!DOCTYPE html>
<html>
<head>
    <title>Naive Bayes Classifier</title>
</head>
<body>
    <h1>Naive Bayes Classifier</h1>

    <?php
    // Fungsi untuk menghitung probabilitas kelas A dan B
    function calculateClassProbabilities($data, $targetClass) {
        // Implementasi sama seperti sebelumnya
    }

    // Fungsi untuk menghitung probabilitas fitur diberikan kelas
    function calculateFeatureProbabilities($data, $targetClass, $feature, $value) {
        // Implementasi sama seperti sebelumnya
    }

    // Data training sederhana
    $data = [
        ['feature1' => 'A', 'feature2' => 'X', 'class' => 'A'],
        ['feature1' => 'B', 'feature2' => 'Y', 'class' => 'A'],
        ['feature1' => 'A', 'feature2' => 'Y', 'class' => 'B'],
        ['feature1' => 'B', 'feature2' => 'X', 'class' => 'B'],
        ['feature1' => 'A', 'feature2' => 'X', 'class' => 'A'],
    ];

    // Menghitung probabilitas kelas dan fitur diberikan kelas (seperti sebelumnya)

    // Input baru yang ingin diklasifikasikan (dapat diambil dari form input)
    $newSample = ['feature1' => $_POST['feature1'], 'feature2' => $_POST['feature2']];

    // Menghitung probabilitas kelas diberikan fitur (menggunakan Naive Bayes)
    $probabilityClassGivenFeatureA = ($probabilityFeatureGivenClassA * $probabilityClassA);
    $probabilityClassGivenFeatureB = ($probabilityFeatureGivenClassB * $probabilityClassB);

    // Hasil klasifikasi
    $result = '';
    if ($probabilityClassGivenFeatureA > $probabilityClassGivenFeatureB) {
        $result = "Kelas A";
    } else {
        $result = "Kelas B";
    }

    // Menampilkan hasil klasifikasi
    echo "<p>Hasil klasifikasi untuk input " . json_encode($newSample) . " adalah: <strong>$result</strong></p>";
    ?>

    <h2>Form Input Data</h2>
    <form method="POST">
        <label for="feature1">Fitur 1 (A atau B):</label>
        <input type="text" name="feature1" id="feature1" required><br>

        <label for="feature2">Fitur 2 (X atau Y):</label>
        <input type="text" name="feature2" id="feature2" required><br>

        <input type="submit" value="Klasifikasi">
    </form>
</body>
</html>
