<!DOCTYPE html>
<html>
<head>
    <title>RSS Feed Table</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>
<body>
    <table id="rssTable" class="display">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td><a href="{{ $item['link'] }}" target="_blank">Link</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#rssTable').DataTable();
        });
    </script>
</body>
</html>
