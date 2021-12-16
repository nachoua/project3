<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>
    <title>store</title>
</head>
<body>
    <form class="row g-3 small" action="{{route('storep1')}}" method="POST">
        @csrf
        <label>full name :<input class="form-control" type="text" name="full_name"></label>
        <label> face :<input class="form-control" type="file" name="picture"></label>
        <label> adresse: <input class="form-control" type="text" name="adresse"></label>
        <label> departement: <input class="form-control" type="text" name="departement"></label>
        <label> date birthday: <input class="form-control" type="date" name="date_birthday"></label>
        <label> date joined: <input class="form-control" type="date" name="date_joined"></label>
        <input class="" type="submit" value="send" name="submit">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
