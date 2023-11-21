<table>
  <tr>
  <?php
    while ($linea = fgets($file)) {
      list($name, $price, $stock) = explode(';', $linea); // error
      echo "<td>$name</td>";
      echo "<td>$price</td>";
      echo "<td>$stock</td>";
    }
  ?>
  </tr>
</table>

