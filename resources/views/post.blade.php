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
                <th></th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post -> id }}</td>
                <td>{{ $post -> Title }}</td>
                <td>{{ $post -> Posted_By }}</td>
                <td>{{ $post -> Created_At }}</td>
                <td><a href="{{route('post_Name',$post->id)}}"><button">View</button></a><button>Edit</button><button>Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>