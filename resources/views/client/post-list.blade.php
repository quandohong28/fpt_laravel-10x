<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="p-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">View</th>
                    <th scope="col">Category ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td scope="row">{{ $post->title }}</td>
                        <td scope="row">
                            <img width="100px" src=" {{ $post->image_url }}" alt="">
                        </td>
                        <td scope="row">{{ $post->description }}</td>
                        <td scope="row">{{ $post->view }}</td>
                        <td scope="row">{{ $post->category_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->onEachSide(2)->links() }}
    </div>
</body>

</html>
