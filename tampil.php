<br>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>No</th>
        <th>NIM </th>
        <th>Nama </th>
        <th> Prodi</th>
        <th> angkatan </th>



    </tr>
    </thead>
    <?php
    include "koneksi.php";


    $sql="select * from barang order by id_barang desc";


    $hasil=mysqli_query($kon,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
        ?>
        <tbody>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data["NIM"]; ?></td>
            <td><?php echo $data["nama"];   ?></td>
             <td><?php echo $data["prodi"];   ?></td>
              <td><?php echo $data["angkatan"];   ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>