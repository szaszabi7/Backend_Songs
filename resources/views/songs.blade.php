<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Songs</title>
</head>
<body class="bg-dark">
    <h1 class="text-center text-danger mt-4 mb-5">Songs</h1>
    <table class="table table-striped table-dark">
        <tr>
            <th>Song Title</th>
            <th>Singer</th>
            <th>Length (sec)</th>
        </tr>
        @foreach($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->singer }}</td>
                <td>{{ $song->length }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
