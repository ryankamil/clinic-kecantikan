<?php

use Dompdf\FrameDecorator\Table;

include('koneksi.php');
$db = new database();
// $data_karyawan = $db->tampil_data();
$data_karyawan2 = $db->tampil_data2();

?>
<html>
<table border="2px">
    <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Date</th>
        <th>Email</th>
        <th>Appointment</th>
        <th>Massage</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data_karyawan2 as $row1) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row1['name']; ?></td>
            <td><?php echo $row1['gender']; ?></td>
            <td><?php echo $row1['date']; ?></td>
            <td><?php echo $row1['email']; ?></td>
            <td><?php echo $row1['appointment']; ?></td>
            <td><?php echo $row1['message']; ?></td>

        </tr>
    <?php
    }
    ?>
</table>

</html>