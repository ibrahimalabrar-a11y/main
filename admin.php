<h2>📊 Riwayat Jadwal</h2>

<?php
$file = "jadwal.txt";

if(file_exists($file)){

    $lines = file($file);

    foreach($lines as $line){
        $data = json_decode($line, true);

        if($data){
            echo "<div style='background:#fff;padding:10px;margin:10px;border-radius:8px'>";
            echo "<b>".$data["nama"]."</b><br>";
            echo "📅 ".$data["tanggal"]."<br>";
            echo "✔️ ".implode(", ", $data["tugas"]);
            echo "</div>";
        }
    }

} else {
    echo "Belum ada data 😅";
}
?>