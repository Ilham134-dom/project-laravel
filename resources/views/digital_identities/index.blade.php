<!DOCTYPE html>
<html>
<head>
    <title>Digital Identities</title>
</head>
<body>
    <h1>Digital Identities</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>National ID</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($identities as $identity)
            <tr>
                <td>{{ $identity->id }}</td>
                <td>{{ $identity->name }}</td>
                <td>{{ $identity->email }}</td>
                <td>{{ $identity->national_id }}</td>
                <td>{{ $identity->dob }}</td>
                <td>{{ $identity->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
