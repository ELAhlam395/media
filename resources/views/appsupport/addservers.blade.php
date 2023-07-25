<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD SERVERS</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
               <h1>ADD SERVERS</h1>
               <form action="addsrv" method="POST">
                 @csrf


                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" name="name"  >
                          <span style="color: red">@error('name'){{$message}}

                            @enderror</span>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <label for="ip" class="col-sm-2 col-form-label">IP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="ip">
                          <span style="color: red">@error('ip'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password">
                          <span style="color: red">@error('password'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="domain" class="col-sm-2 col-form-label">Domain</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="domain">
                          <span style="color: red">@error('domain'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="provider" class="col-sm-2 col-form-label">Provider</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="provider">
                          <span style="color: red">@error('provider'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="duedate" class="col-sm-2 col-form-label">Due Date</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="duedate">
                          <span style="color: red">@error('duedate'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="datecreation" class="col-sm-2 col-form-label">Date Creation</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="datecreation">
                          <span style="color: red">@error('datecreation'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="price">
                          <span style="color: red">@error('price'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="methodepayment" class="col-sm-2 col-form-label">Methode Payment</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="methodepayment">
                          <span style="color: red">@error('methodepayment'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namesrv" class="col-sm-2 col-form-label">Name server</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="namesrv">
                          <span style="color: red">@error('namesrv'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="account" class="col-sm-2 col-form-label">Account</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="account">
                          <span style="color: red">@error('account'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="comment">
                          <span style="color: red">@error('comment'){{$message}}

                            @enderror</span>
                        </div>
                    </div>

                    <button type="submit">add</button>
                    <a href="{{ url('listeserverss') }}"> <button type="button">cancel</button></a>



                </form>
                <br><br><hr>







            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
