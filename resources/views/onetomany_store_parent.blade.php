<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>
    <title>one to many store </title>
</head>
<body>
    <h1>form parent</h1>
    @foreach ($bd_children as $b)
    <form class="row g-3 small" action="{{route('store_parent', ['id' =>$b->id])}}" method="POST">
@endforeach
        @csrf
        <select class="form-select" name="children_id">
            @foreach ($bd_children as $b)
                <option class="" name={{$b->children_id}}>{{$b->id}}</option>
                @endforeach

       </select>





        <label> mother name: <input class="form-control" type="text" name="mother_name"></label>

        <label> father name: <input class="form-control" type="text" name="father_name"></label>


        <input class="btn btn-primary" type="submit" value="send" name="submit">

    </form>

</body>
</html>
