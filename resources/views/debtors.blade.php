<!DOCTYPE html>
<html>
<head>
    <title>Debtors</title>
</head>
<body>

    <h1>My Debtors</h1>

    @foreach ($debtors as $debtor)
        <p>{{ $debtor->name }}</p> --- <a href="{{ route('debts.show', $debtor->id) }}">View Details</a>
    @endforeach

</body>
</html>