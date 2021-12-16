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
    <h1>form children</h1>

    <form class="row g-3 small" action="{{route('store_children')}}" method="POST">

        @csrf


        <label> first name :<input class="form-control" type="text" name="first_name"></label>
        <label> last name: <input class="form-control" type="text" name="last_name"></label>

        <label > gender :
            <select class="form-select" name="gender">
                <option name="gender" value="femme">Femme</option>
                <option name="gender" value="homme">Homme</option>
            </select>

        <label> description: <input class="form-control" type="text" name="description"></label>
        <label> birthday: <input class="form-control" type="date" name="birthday"></label>


        <input class="btn btn-primary" type="submit" value="send" name="submit">

    </form>

</body>
</html>
