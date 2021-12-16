<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>
    <title>store 2</title>
</head>
<body>
    <h1>form society</h1>
{{-- , ['id' =>$bd_worker->id] --}}
@foreach ($bd_worker as $b)
    <form class="row g-3 small" action="{{route('storep2', ['id' =>$b->id])}}" method="POST">
    @endforeach
        @csrf
        <select name="worker_id" class="form-select">
            @foreach ($bd_worker as $b)
                <option name={{$b->worker_id}}>{{$b->id}}</option>
                @endforeach

       </select>

    {{-- <label> worker id: <input class="" type="text" name="{{$bd->worker_id}}"></label> --}}
    <label> name society: <input class="form-control" type="text" name="name_society"></label>
    <label> adresse society: <input class="form-control" type="text" name="adresse_society"></label>
    <label> date buillding: <input class="form-control" type="date" name="date_buillding"></label>

    <input class="btn btn-primary" type="submit" value="send" name="submit">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
