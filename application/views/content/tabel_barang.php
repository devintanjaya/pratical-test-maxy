<table id = "data" class = "display" name = "data" border = "1px">

  <thead>
    <tr>
      <td> ID</td>
      <td> SKU </td>
      <td> Nama </td>
      <td> Quantity </td>
      <td> Price Before Discount </td>
      <td> Price After Discount </td>
      <!-- <td> Image </td> -->
      <td> Deskripsi Barang </td>
      <td> Status </td>
      <td> Created </td>
      <td> Updated </td>
      <td> Manajemen Barang </td>
    </tr>
  </thead>

  <tbody>

    <?php

      foreach ($barang as $barang)
      {

    ?>

        <tr>

          <td class = "kolom">
            <?php echo $barang['id']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['sku']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['nama']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['quantity']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['price_before_discount']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['price_after_discount']; ?>
          </td>

          <!--
          <td class = "kolom">
            <?php
              $link =  base_url() . "assets/img/barang/" . $barang['link_image'];
              if ($link != "" && $link != null) {
            ?>
                <img class = "gambar" src = "<?php echo $link; ?>">
            <?php 
              }  
            ?>
          </td>
          -->

          <td class = "kolom">
            <?php echo $barang['deskripsi_barang']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['status']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['created']; ?>
          </td>

          <td class = "kolom">
            <?php echo $barang['updated']; ?>
          </td>

          <td class = "kolom">
              <?php $id_barang = $barang['id']; ?>
              <input type = "button" id = "edit-<?= $id_barang ?>" class = "update" value = "edit">
              <br/>
              <input type = "button" id = "delete-<?= $id_barang ?>" class = "delete" value = "delete">
              <br/>
          </td>

        </tr>

    <?php

      }

    ?>

  </tbody>

</table>
