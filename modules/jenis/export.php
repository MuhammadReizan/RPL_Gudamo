<?php
session_start();      // mengaktifkan session
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    header('location: ../../login.php?pesan=2');
}
else {
    require_once "../../config/database.php";

    header("Content-type: application/vnd-ms-excel");
    // mendefinisikan nama file hasil ekspor "Data-Jenis-Barang.xls"
    header("Content-Disposition: attachment; filename=Data-Jenis-Barang.xls");
?>

    <center>
        <h4>DATA JENIS BARANG</h4>
    </center>
    <!-- tabel untuk menampilkan data dari database -->
    <table border="1">
        <thead>
            <tr style="background-color:#6861ce;color:#fff">
                <th height="30" align="center" vertical="center">No.</th>
                <th height="30" align="center" vertical="center">Jenis Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // variabel untuk nomor urut tabel 
            $no = 1;
            // sql statement untuk menampilkan data dari tabel "tbl_jenis"
            $query = mysqli_query($mysqli, "SELECT * FROM tbl_jenis ORDER BY nama_jenis ASC")
                                            or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
            // ambil data hasil query
            while ($data = mysqli_fetch_assoc($query)) { ?>
                <!-- tampilkan data -->
                <tr>
                    <td width="70" align="center"><?php echo $no++; ?></td>
                    <td width="500"><?php echo $data['nama_jenis']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>