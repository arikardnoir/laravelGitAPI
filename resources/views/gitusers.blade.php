<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/assets/css/github.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <title>Git User</title>
</head>
<body>

    <a href="{{ route('site.home') }}"><button type="button" class="btn btn-secondary">Back</button></a>
    <div class="container">

            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">login</th>
                        <th scope="col">name</th>
                        <th scope="col">company</th>
                        <th scope="col">location</th>
                        <th scope="col">email</th>
                        <th scope="col">followers</th>
                        <th scope="col">following</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->login }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->company }}</td>
                        <th>{{ $user->location }}</th>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->followers }}</td>
                        <td>{{ $user->following }}</td>
                      </tr>
                      
                    </tbody>
             </table>
    </div>


    <div class="container">

            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $user->avatar_url }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $user->name }}</h5>

                      <div>
                            <p class=" card-text">ID: {{ $user->id }}</p>
                            <p class=" card-text">Login: {{ $user->login }} </p>
                            <p class=" card-text">Company:  {{ $user->company }}</p>
                            <p class=" card-text">Followers:  {{ $user->followers }}</p>
                            <p class=" card-text">Following:  {{ $user->following }}</p>
                      </div>
                      
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>