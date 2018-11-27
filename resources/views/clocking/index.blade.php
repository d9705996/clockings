<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clocking</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>UserId</th>
            <th>Checktime</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clockings as $clocking)
        <tr>
            <td>{{ $clocking->USERID }}<td>
            <td> {{ $clocking->CHECKTIME }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
