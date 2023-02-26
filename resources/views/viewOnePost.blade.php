<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>

                <th><h3>Post Info</h3></th>

            </tr>
        </thead>
        <tbody>
            <tr>            
                <td><h2>Title :- </h2> {{ $post -> Title }}</td>
            </tr>
            <tr>
            <td><h2>Posted By :- {{ $post -> Posted_By }}</h2></td>
            </tr>
        </tbody>
    </table>
</body>