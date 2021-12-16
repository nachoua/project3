<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>

    <title>One to One</title>
</head>
<body>
     <h1>relation one to one</h1>
     {{-- @foreach ($data_human as $d)
      <h1>{{$d->first_name}}</h1>
     <h1>{{$d->last_name}}</h1>
     <h1>{{$d->birthday}}</h1>
     <h1>belongs</h1>

        @endforeach --}}
        {{-- @foreach ($data_bank as $dd)
        <h2>{{$dd->num_compte}}</h2>
        <h2>{{$dd->human->first_name}}</h2>
        <h2>{{$dd->human->birthday}}</h2>
        <h2>{{$dd->human->adresse_resi}}</h2>
        @endforeach --}}

        {{-- @foreach ($data_human as $dh)
        <h2>{{$dh->first_name}}</h2>

        @endforeach --}}

        <h2> record for human</h2>
        <table class="table table-primary">
            <thead>
              <tr class="table-primary">
                <th scope="col">id</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
                <th scope="col">adresse</th>
                <th scope="col">adresse birthday</th>
                <th scope="col">birthday</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_bank as $dd)
                    <tr class="table-primary">


                        <th scope="row">
                        {{$dd->id}}

                        </th>
                        <th>{{$dd->human->first_name}}</th>
                        <th>{{$dd->human->last_name}}</th>
                        <th>{{$dd->human->adresse_resi}}</th>
                        <th>{{$dd->human->adresse_bird}}</th>
                        <th>{{$dd->human->birthday}}</th>


                    </tr>
               @endforeach
            </tbody>
          </table>
          <h2> record for bank</h2>
        <table class="table table-primary">
            <thead>
              <tr class="table-primary">
                <th scope="col">id</th>
                <th scope="col">human id</th>
                <th scope="col">num compte</th>
                <th scope="col">num cin</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data_bank as $dd)
                    <tr class="table-primary">

                        <th scope="row">
                        {{$dd->id}}

                        </th>
                        <th>{{$dd->human->human_id}}</th>
                        <th>{{$dd->num_compte}}</th>
                        <th>{{$dd->num_cin}}</th>
                    </tr>
              @endforeach
            </tbody>
          </table>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
