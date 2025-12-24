<?php
include "koneksi.php";

$limit = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";

$query = "SELECT * FROM data_barang 
          WHERE nama LIKE '%$keyword%' 
          LIMIT $limit OFFSET $offset";
$data = mysqli_query($koneksi, $query);

$total_data = mysqli_query(
    $koneksi,
    "SELECT COUNT(*) as total FROM data_barang 
     WHERE nama LIKE '%$keyword%'"
);
$total = mysqli_fetch_assoc($total_data)['total'];
$total_page = ceil($total / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Barang</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>Data Barang</h1>

    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari barang..." value="<?= $keyword ?>">
        <button type="submit">Cari</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td>Rp <?= number_format($row['harga']); ?></td>
        </tr>
        <?php } ?>
    </table>

    <div class="pagination">
        <?php if ($page > 1) { ?>
            <a href="?page=<?= $page-1 ?>&keyword=<?= $keyword ?>">Prev</a>
        <?php } ?>

        <?php for ($i = 1; $i <= $total_page; $i++) { ?>
            <a href="?page=<?= $i ?>&keyword=<?= $keyword ?>" 
               class="<?= ($i == $page) ? 'active' : '' ?>">
               <?= $i ?>
            </a>
        <?php } ?>

        <?php if ($page < $total_page) { ?>
            <a href="?page=<?= $page+1 ?>&keyword=<?= $keyword ?>">Next</a>
        <?php } ?>
    </div>
</div>

</body>
</html>
