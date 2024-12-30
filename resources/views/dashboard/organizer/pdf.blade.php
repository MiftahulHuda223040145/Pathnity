<!DOCTYPE html>
<html>

<head>
    <title>Organizer Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Organizer Report</h1>
    <p>Generated on: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}</p>
    <table>
        <thead>
            <tr>
                <th>Organization Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Position</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizers as $organizer)
                <tr>
                    <td>{{ $organizer->organization_name }}</td>
                    <td>{{ $organizer->username }}</td>
                    <td>{{ $organizer->email }}</td>
                    <td>{{ $organizer->phone_number }}</td>
                    <td>{{ $organizer->position }}</td>
                    <td><a href="{{ $organizer->website }}">{{ $organizer->website }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
