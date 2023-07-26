<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE SERVER</title>

</head>
<body>





<h1>UPDATE SERVER</h1>
<form action="/updatedd/{{$addsr->id}}" method="POST">
    {!! csrf_field() !!}
    @csrf


       <div class="mb-3 row">
           <label for="name" class="col-sm-2 col-form-label" >Name</label>
           <div class="col-sm-10">
             <input type="text"  class="form-control" name="name" value="{{$addsr->name}} " >
             <span style="color: red">@error('name'){{$message}}

               @enderror</span>
           </div>

       </div>
       <div class="mb-3 row">
           <label for="ip" class="col-sm-2 col-form-label">ip</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="ip" value="{{$addsr->ip}} " >
             <span style="color: red">@error('ip'){{$message}}

               @enderror</span>
           </div>
       </div>
       <div class="mb-3 row">
           <label for="password" class="col-sm-2 col-form-label">password</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="password" value="{{$addsr->password}} " >
             <span style="color: red">@error('password'){{$message}}

               @enderror</span>
           </div>
       </div>
       <div class="mb-3 row">
           <label for="domain" class="col-sm-2 col-form-label">domain</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="domain" value="{{$addsr->domain}} " >
             <span style="color: red">@error('domain'){{$message}}

               @enderror</span>
           </div>
       </div>
       <div class="mb-3 row">
           <label for="provider" class="col-sm-2 col-form-label">provider</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="provider" value="{{$addsr->provider}} ">
             <span style="color: red">@error('provider'){{$message}}

               @enderror</span>
           </div>
       </div>
       <div class="mb-3 row">
           <label for="duedate" class="col-sm-2 col-form-label">duedate</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="duedate" value="{{$addsr->duedate}} ">
             <span style="color: red">@error('duedate'){{$message}}

               @enderror</span>
           </div>
       </div>
       <div class="mb-3 row">
        <label for="datecreation" class="col-sm-2 col-form-label">datecreation</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="datecreation" value="{{$addsr->datecreation}} ">
          <span style="color: red">@error('datecreation'){{$message}}

            @enderror</span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price" value="{{$addsr->price}} ">
          <span style="color: red">@error('price'){{$message}}

            @enderror</span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="methodepayment" class="col-sm-2 col-form-label">methodepayment</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="methodepayment" value="{{$addsr->methodepayment}} ">
          <span style="color: red">@error('methodepayment'){{$message}}

            @enderror</span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="namesrv" class="col-sm-2 col-form-label">namesrv</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="namesrv" value="{{$addsr->namesrv}} ">
          <span style="color: red">@error('namesrv'){{$message}}

            @enderror</span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="account" class="col-sm-2 col-form-label">account</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="account" value="{{$addsr->account}} ">
          <span style="color: red">@error('account'){{$message}}

            @enderror</span>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="comment" class="col-sm-2 col-form-label">comment</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="comment" value="{{$addsr->comment}} ">
          <span style="color: red">@error('comment'){{$message}}

            @enderror</span>
        </div>
    </div>




       <button type="submit">update</button>
       <a href="{{ url('listeserverss') }}"> <button type="button">cancel</button></a>



   </form>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
