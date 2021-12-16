<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('\one_many.css')}}>
    <title>one to many2</title>
</head>
<body>

     <h1>the second project relation one to many</h1>
     @foreach ($data_society as $society)
     <h1>{{$society->name_society}}</h1>
     <h1>{{$society->worker->full_name}}</h1>
     @endforeach
     @foreach ($data_worker as $worker)
         <h1>{{$worker->date_joined}}</h1>
         {{-- <h1>{{$worker->society->adresse_society}}</h1> --}}

     @endforeach
     {{-- test insert  in form--}}
     {{-- {{route('store')}} --}}

</body>
</html>
