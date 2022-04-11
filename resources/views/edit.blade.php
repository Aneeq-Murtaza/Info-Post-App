<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud App</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<div class="container mt-5">

    <h1 class="mb-5">CRUD APP</h1>

    <form method="POST" action="/update/{{$posts->id}}">
        @csrf
        <div class="mb-3">
            <label><b>Post Title</b></label>
            <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{$posts->post_title}}">
        </div>

        <div class="mb-3">
            <label><b>Post Author</b></label>
            <input type="text" class="form-control" name="author" placeholder="Post Author" value="{{$posts->post_author}}">
        </div>

        <input type="submit" name="update" value="Update Post" class="btn btn-primary px-3">

    </form>
</div>

</body>
</html>



