

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
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div>{{ $message }} </div>
            @enderror
        </div>

        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div>{{ $message }} </div>
            @enderror
        </div>

        <div>
            <label>Notes</label>
            <textarea name="notes">{{ old('notes') }}</textarea>
        </div>

        <button type="submit">Save Debtor</button>

    </form>

</body>
</html>