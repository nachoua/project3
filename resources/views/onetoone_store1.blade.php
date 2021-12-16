<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>
    <title>one to one store 1</title>
</head>
<body>
    <h1>form human</h1>
    <form class="row g-3 small"  action="{{route('storehuman')}}" method="POST">
        @csrf

       <div class="col-md-6"> <label>first name :<input class="form-control" type="text" name="first_name"></label></div>
       <div class="col-md-6"><label> last name :<input class="form-control" type="text" name="last_name"></label></div>
        <label> adresse residence: <input class="form-control" type="text" name="adresse_resi"></label>
        <label> adresse birthday: <input class="form-control" type="text" name="adresse_bird"></label>
        <label> birthday: <input class="form-control" type="date" name="birthday"></label>

        <input class="btn btn-primary" type="submit" value="send" name="submit">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
