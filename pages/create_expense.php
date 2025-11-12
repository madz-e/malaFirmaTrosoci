<?php?>

<html>
<body>

<h2>HTML Forms</h2>

<form action="/create_expense_handler.php" method="POST">
    <label for="expenseName">Expense name:</label><br>
    <input type="text" id="expenseName" name="expenseName" value="Name"><br>

    <label for="expenseDate">Expense date:</label><br>
    <input type="date" id="expenseDate" name="expenseDate" value="Date"><br><br>

    <label for="expenseAmount">Expense amount:</label><br>
    <input type="text" id="expenseAmount" name="expenseAmount" value="Amount"><br>

    <label for="expenseType">Expense type:</label><br>
    <select id="expenseType" name="expenseType">
        <option value="Cash">Cash</option>
        <option value="Card">Card</option>
    </select><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>