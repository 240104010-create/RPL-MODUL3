<?php
echo "<h1>Status Inventaris Versi A</h1>";
$stok = 4;
$status = $stok > 0 ? 'Tersedia' : 'Tidak tersedia';
echo "Status alat: {$status}";