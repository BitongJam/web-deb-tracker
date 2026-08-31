<!DOCTYPE html>
<html>
<head>
    <title>Debt Tracker</title>
</head>
<body>

    <h1>Debt Tracker Dashboard</h1>

    <p>Welcome {{ $name }}.</p><br/>

    @if ($totalDebts > 0)
         <p>Total Debts {{ $totalDebts }}</p>
    @else
        <p>No debts recorded yet</p>
    @endif
   
    <p>Total Outstanding {{ $totalOutstanding }}</p>

</body>
</html>