<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST SERVERS</title>

</head>
<body>
<H1>LIST SERVERS</H1>

<a href="{{ url('srvs') }}"><button type="button">add servers</button></a>
<a href="{{ url('home') }}"><button type="button">cancel</button></a> <br><br>
<table class="table table-success table-striped">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Ip</th>
        <th scope="col">Password</th>
        <th scope="col">Domain</th>
        <th scope="col">Provider</th>
        <th scope="col">Due Date</th>
        <th scope="col">Date Creation</th>
        <th scope="col">Price</th>
        <th scope="col">Method  Payment</th>
        <th scope="col">Name Server</th>
        <th scope="col">Account</th>
        <th scope="col">Comment</th>
        <th scope="col">Actions</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($addsr as $itms)
        <tr>

            <td scope="col">{{$itms->name}}</td>
            <td scope="col">{{$itms->ip}}</td>
            <td scope="col">{{$itms->password}}</td>
            <td scope="col">{{$itms->domain}}</td>
            <td scope="col">{{$itms->provider}}</td>
            <td scope="col">{{$itms->duedate}}</td>
            <td scope="col">{{$itms->datecreation}}</td>
            <td scope="col">{{$itms->price}}</td>
            <td scope="col">{{$itms->methodepayment}}</td>
            <td scope="col">{{$itms->namesrv}}</td>
            <td scope="col">{{$itms->account}}</td>
            <td scope="col">{{$itms->comment}}</td>



            <td scope="col">
                <a href="/delete/{{$itms->id}}"><button type="button">Delete</button></a>
                <a href="/editt/{{$itms->id}}"><button type="button">Edit</button></a>

            </td>


        </tr>

    @endforeach



    </tbody>
  </table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>

