<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style = "background-color: GhostWhite">

  @auth
  <p>Congrats you are logged in.</p>
  <form action="/logout" method="POST">
    @csrf
    <button class="btn btn-primary">Log out</button>
  </form>

  <div style="border: 3px solid black;">
    <h3>Create a New Post</h3>
    <form action="/create-post" method="POST">
      @csrf
      <input type="text" name="title" placeholder="post title">
      <textarea name="body" placeholder="body content..."></textarea>
      <button class="btn btn-primary">Save Post</button>
    </form>
  </div>

  <div style="border: 3px solid black;">
    <h2>All Posts</h2>
    @foreach($posts as $post)
    <div style="background-color: AliceBlue; padding: 10px; margin: 10px;">
      <h5>{{$post['title']}} by <h6>{{$post->user->name}}</h6></h5>
      {{$post['body']}}
      <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
      <form action="/delete-post/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
      </form>
    </div>
    @endforeach
  </div>

  @else
  <!-- <div style="border: 3px solid black;"> -->
  <div>  
  <h3>Register</h3>
    <form action="/register" method="POST">
      @csrf
      <label for="name" class="form-label">Name : </label>
      <input name="name" type="text" placeholder="name" >
      <div>
      <label for="email" class="form-label">Email : </label>
      <input name="email" type="text" placeholder="email">
      </div>
      <label for="password" class="form-label">Password : </label>
      <input name="password" type="password" placeholder="password">
      
      <button class="btn btn-primary">Register</button>
      
    </form>
  </div>
  <!-- <div style="border: 3px solid black;"> -->
  <div>  
  <h3>Login</h3>
    <form action="/login" method="POST">
      @csrf
      <label for="name" class="form-label">Name : </label>
      <input name="loginname" type="text" placeholder="name">
      <label for="password" class="form-label">Password : </label>
      <input name="loginpassword" type="password" placeholder="password">
      <button class="btn btn-primary">Log in</button>
    </form>
  </div>
  @endauth

  
</body>
</html>