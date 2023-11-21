<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina principal</title>
</head>
<body>
  <h3>Formulario</h3>
  <form action="index.php" method="get">
  <table>
    <tbody>
      <tr>
        <td>
          <label for="name">Nombre:</label>
        </td>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <td>
          <label for="price">Precio:</label>
        </td>
        <td>
          <input type="number" name="price">
        </td>
      </tr>
      <tr>
        <td>
          <label for="stock">Cantidad:</label>
        </td>
        <td>
          <input type="number" name="stock">
        </td>
      </tr>
    </tbody>
  </table>
  </form>
  <h3>Listado de productos</h3>
  <?php
    require_once('../src/controllers/shop.php');
    $controller = new Shop('../data/products.csv'); // error: path
    if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['stock'])) {
      $controller->add(new Product($_GET['name'], $_GET['price'], $_GET['stock']));
    }
    $controller->list();
  ?>
</body>
</html>