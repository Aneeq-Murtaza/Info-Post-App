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

    <form method="POST" action="/store">
        @csrf
        <div class="mb-3">
            <label><b>Post Title</b></label>
            <input type="text" class="form-control" name="title" placeholder="Post Title">
        </div>

        <div class="mb-3">
            <label><b>Post Author</b></label>
            <input type="text" class="form-control" name="author" placeholder="Post Author">
        </div>

        <input type="submit" name="insert" value="Submit Post" class="btn btn-primary px-3">

        <a href="show" class="btn btn-secondary px-3" class="btn btn-info" role="button">Recent Posts</a>

    </form>
</div>

</body>
</html>



