<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud App</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<div class="container mt-5">

    <h1>CRUD APP</h1>
    <h5 class="mb-5">Recent Posts</h5>
    <table class="table  table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Post Title</th>
      <th scope="col">Post Author</th>
      <th scope="col">Delete Post</th>
      <th scope="col">Edit Post</th>
    </tr>
  </thead>
  <tbody>
      @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->post_title}}</td>
      <td>{{$post->post_author}}</td>
      <td><a href="/delete/{{$post->id}}" class="btn btn-danger px-3" class="btn btn-info" role="button">Delete Posts</a></td>
      <td><a href="/edit/{{$post->id}}" class="btn btn-success px-3" class="btn btn-info" role="button">Edit Posts</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</div>

</body>
</html>



