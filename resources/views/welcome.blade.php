<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Eloquent Relationship!</title>
  </head>
  <body>
    <h3 style="text-align: center; color:rgba(0, 0, 255, 0.76);" class="m-3">laravel Eloquent Relationship!</h3>

    <div class="container">
        <table class="table table-striped">
{{--             <thead>
              <tr>
                <th scope="col">SL No.</th>
                <th scope="col">Username</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone->name }}</td>
                  </tr>
                @endforeach
            </tbody> --}}

{{--             <thead>
              <tr>
                <th scope="col">Post</th>
                <th scope="col">Comments</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                  <td>{{ $post->title }}</td>
                  <td>
                    @foreach ($post->comments as $comment)
                      {{ $comment->message }}
                    @endforeach
                  </td>
                </tr>
                @endforeach
            </tbody> --}}

            <thead>
              <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $data)
                <tr>
                  <td>{{ $data->title }}</td>
                  <td>
                    @foreach ($data->categories as $cat)
                      {{ $cat->name }}
                    @endforeach
                  </td>
                </tr>
                @endforeach
            </tbody>


          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>