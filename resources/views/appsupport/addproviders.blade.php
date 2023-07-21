<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD PROVIDERS</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
               <h1>ADD PROVIDERS</h1>
               <form action="addprv" method="POST">
                 @csrf


                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="link">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="user" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="user">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="location">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="comment">
                        </div>
                    </div>

                    <button type="submit">add</button>

                </form>




















             </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
