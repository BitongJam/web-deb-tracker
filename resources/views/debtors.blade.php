<!DOCTYPE html>
<html>
<head>
    <title>Debtors</title>
</head>
<body>

    <h1>My Debtors</h1>

    @foreach ($debtors as $debtor)
        <p>{{ $debtor->name }}</p>
    @endforeach

</body>
</html>