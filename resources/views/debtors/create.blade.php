<!DOCTYPE html>
<html>
<head>
    <title>Create Debtor</title>
</head>
<body>

    <h1>Create Debtor</h1>

    <form method="POST" action="/debts">

        @csrf

        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Phone</label>
            <input type="text" name="phone">
        </div>

        <div>
            <label>Notes</label>
            <textarea name="notes"></textarea>
        </div>

        <button type="submit">Save Debtor</button>

    </form>

</body>
</html>