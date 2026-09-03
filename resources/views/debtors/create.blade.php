

<!DOCTYPE html>
<html>
<head>
    <title>Create Debtor</title>
</head>
<body>

    <h1>Create Debtor</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="/debts">

        @csrf

        <div>
            <label>Name</label>
            <input type="text" name="name">
            @error('name')
                <div>{{ $message }} </div>
            @enderror
        </div>

        <div>
            <label>Phone</label>
            <input type="text" name="phone">
            @error('phone')
                <div>{{ $message }} </div>
            @enderror
        </div>

        <div>
            <label>Notes</label>
            <textarea name="notes"></textarea>
        </div>

        <button type="submit">Save Debtor</button>

    </form>

</body>
</html>