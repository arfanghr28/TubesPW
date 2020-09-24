<?php
// function untuk koneksi ke DB


function koneksi (){
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_183040023") or die ("Database salah!");

    return $conn;
}
// end of function

//function untuk query

function query($sql) {
    $conn = koneksi();
    $results = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($results)){
        $rows[]= $row;
    };

    return $rows;
}
// end of function
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $asal = htmlspecialchars($data['asal']);
    $tahun = htmlspecialchars($data['tahun']);
    $jenis = htmlspecialchars($data['jenis']);

    $query_tambah = "INSERT INTO mobil Values('','$gambar','$nama','$merk','$asal','$tahun','$jenis')";

mysqli_query($conn, $query_tambah);

return mysqli_affected_rows($conn);
}
function hapus($ID) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mobil WHERE ID = $ID");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi(0);

    $ID = $data['ID']; 
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $merk = htmlspecialchars($data['merk']);
    $asal = htmlspecialchars($data['asal']);
    $tahun = htmlspecialchars($data['tahun']);
    $jenis = htmlspecialchars($data['jenis']);

    $queryubah = "UPDATE mobil SET 
                    foto = '$gambar',
                    namamobil = '$nama',
                    merkmobil = '$merk',
                    asalnegara = '$asal',
                    tahunawalproduksi = '$tahun',
                    jenismobil = '$jenis'
                    WHERE ID = '$ID'";

mysqli_query($conn, $queryubah);

return mysqli_affected_rows($conn);
}
?>