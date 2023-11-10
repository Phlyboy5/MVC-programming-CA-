<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <title>Document</title>
</head>
<body style="background-color: GhostWhite">
  <h1>Edit Post</h1>
  <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title" class="form-label">Post title : </label>
    <input type="text" name="title" value="{{$post->title}}">
    <div>
    Content : 
    <br>
    <textarea name="body">{{$post->body}}</textarea>
    </div>
    <br>
    <button class="btn btn-primary">Save Changes</button>
    
</form>
</body>
</html>