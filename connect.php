<?php
// Membuat koneksi PPHP ke Database
$db = new mysqli ("localhost", "root", "", "11rpl1_db");
if (mysqli_connect_errno()){
    echo "Error : " . mysqli_connect_error();
}else{
    //echo "Success";
}

?>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA ANJING</th>
            <th>JK</th>
            <th>KELAS</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM siswa";
        $result = $db->query($sql);
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["nama_lengkap"]."</td>
                <td>".$row["jk"]."</td>
                <td>".$row["no_hp"]."</td>
            </tr>
            ";
        }
    ?>
    </tbody>
</table