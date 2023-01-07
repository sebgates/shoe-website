<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>
<main class="container">
  <div class="starter-template text-center">
    <h1>Hello World</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>
  <section>
        <!-- display a table of products -->
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

</main><!-- /.container -->
<?php include 'includes/footer.php';?>