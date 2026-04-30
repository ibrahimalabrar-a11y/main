<?php
$tanggal = date("Y-m-d");

if(isset($_POST["kirim"])){
    $nama = $_POST["nama"];
    $tugas = isset($_POST["tugas"]) ? $_POST["tugas"] : [];

    $data = [
        "tanggal" => $tanggal,
        "nama" => $nama,
        "tugas" => $tugas
    ];

    $json = json_encode($data) . "\n";
    file_put_contents("jadwal.txt", $json, FILE_APPEND);
}
?>

<h2>📅 Jadwal Hari Ini</h2>

<form method="POST">
    Nama:
    <select name="nama">
        <option>Kakak</option>
        <option>Adik</option>
    </select><br><br>

    <input type="checkbox" name="tugas[]" value="BK"> BK<br>
    <input type="checkbox" name="tugas[]" value="LF"> LF<br>
    <input type="checkbox" name="tugas[]" value="HS"> HS<br>
    <input type="checkbox" name="tugas[]" value="M"> M<br>
    <input type="checkbox" name="tugas[]" value="LS"> LS<br>
    <input type="checkbox" name="tugas[]" value="B"> B<br>
    <input type="checkbox" name="tugas[]" value="TTS"> TTS<br>
    <input type="checkbox" name="tugas[]" value="R"> R<br>
    <input type="checkbox" name="tugas[]" value="HKB"> HKB<br>
    <input type="checkbox" name="tugas[]" value="MS"> MS<br>
    <input type="checkbox" name="tugas[]" value="MM"> MM<br>



    <br>
    <button name="kirim">Simpan ✅</button>
</form>