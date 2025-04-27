<?php
// Membuat array
$data = [
    "nama" => "Budi",
    "umur" => 25,
    "pekerjaan" => "Programmer"
];

// Encode array ke format JSON
$jsonData = json_encode($data);

// Tampilkan hasil JSON
echo $jsonData;
?>
