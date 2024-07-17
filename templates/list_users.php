<?php
// templates/list_users.php
$limit = 5;

if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $limit;
$sql = "SELECT * FROM users ORDER BY id ASC LIMIT $start_from, $limit";
$rs_result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
    </tr>
    <?php
        while ($row = $rs_result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
    <?php
    };
    ?>
</table>

<?php
$sql = "SELECT COUNT(id) FROM users";
$rs_result = $conn->query($sql);
$row = $rs_result->fetch_row();
$total_records = $row[0];
$total_pages = ceil($total_records / $limit);
?>

<div>
    <ul>
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
        ?>
            <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        };
        ?>
    </ul>
</div>