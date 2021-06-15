<?php
require_once('koneksi.php');
 
$query = "SELECT * FROM smartphone";
$urlcrud = "index.php?page=crud/";
?>
<div class="row">
     <div class="col-lg-12">
     <a href="<?= $urlcrud.'create' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
     <table class="table table-hover table-bordered" style="margin-top: 10px">
        <tr class="success">
            <th width="50px">No</th>
            <th>KODE HP</th>
            <th>NAMA HP</th>
            <th>HARGA</th>
            <th>KUANTITAS</th>
            <th style="text-align: center;">Actions</th>
        </tr>
     <?php
     if($data=mysqli_query($koneksi,$query)){
        $a=1;
        while($obj=mysqli_fetch_object($data)){
     ?>
        <tr>
            <td><?= $a ?></td>
            <td><?= $obj->KDHP ?></td>
            <td><?= $obj->NAMA_HP ?></td>
            <td><?= $obj->harga ?></td>
            <td><?= $obj->kuantitas ?></td>
            <td style="text-align: center;">
                <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&id='.$obj->id ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?= $urlcrud.'edit&id='.$obj->id ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
            </td>
        </tr>
        <?php
        $a++;
        }
     }
     ?>
     </table>
  </div>
</div>