<?php
$db=connectDatabase();

$query="SELECT * FROM expenses";
$result=$db->query($query);

if(!$result){
    die("Database query failed: " . $db->lastErrorMsg());
}
?>

<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid pink;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: pink;
        }
    </style>
</head>
<body>

<h2>Expenses</h2><br>
<a href="pages/create_expense.php">Add Expense</a><br>
<table>
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Delete</th>
    </tr>
    <?php if ($result):?>
    <?php while ($row=$result->fetchArray(SQLITE3_ASSOC)):?>
    <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['date']); ?></td>
        <td><?php echo htmlspecialchars($row['amount']); ?></td>
        <td><?php echo htmlspecialchars($row['type']); ?></td>
        <td>
            <form action="delete_expense.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit">Delete</button>
            </form>
            <form action="update_expense.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    <?php endwhile;?>
    <?php else:?>
    <tr>
        <td colspan="5">Emptly.</td>
    </tr>
    <?php endif;?>

</table>

</body>
</html>


