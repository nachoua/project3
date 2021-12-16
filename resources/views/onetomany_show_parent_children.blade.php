<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('\one_one.css')}}>

    <title>one to many parent children</title>
</head>
<body>
    <h1>project relation one to many parent children </h1>
    {{--
     @foreach ($data_parent as $parent)
    <h1>{{$parent->mother_name}}</h1>

     @endforeach
      @foreach ($data_pa_ch as $pa)
     <h1>belongs</h1>
     <h1>{{$pa->first_name}}</h1>
     <h1>{{$pa->description}}</h1>
     @endforeach --}}

     {{--  --}}
     {{-- <h1>the second project relation one to many</h1>
     @foreach ($data_society as $society)
     <h1>{{$society->name_society}}</h1>

     @endforeach --}}
     {{-- 2 --}}
     <h2> record for children</h2>
     <table class="table table-primary">
         <thead>
           <tr class="table-primary">
             <th scope="col">id</th>
             <th scope="col">first name</th>
             <th scope="col">last name</th>
             <th scope="col">gender</th>
             <th scope="col">description</th>
             <th scope="col">birthday</th>
           </tr>
         </thead>
         <tbody>
            @foreach ($data_pa_ch as $pa)

             <tr class="table-primary">


                 <th scope="row">
                    {{$pa->id}}

                 </th>
                 <th>{{$pa->children->first_name}}</th>
                 <th>{{$pa->children->last_name}}</th>
                 <th>{{$pa->children->gender}}</th>
                 <th>{{$pa->children->description}}</th>
                 <th>{{$pa->children->birthday}}</th>
                 <form action={{route('destroy', ['id' =>$pa->id])}} method="POST">
                    @csrf
                     @method('DELETE')
                     <th class="table-secondary"><input type="submit" value="Delete" class="btn btn-dark"></th>


                 </form>
                 <form action={{route('add_children')}} method="GET">
                    @csrf


                     <th class="table-secondary"><input type="submit" value="add" class="btn btn-dark"></th>


                 </form>
                 <form action={{route('edit_c', ['id' => $pa->id])}} method="GET">


                    @csrf

          <th class="table-secondary"><button class="btn btn-dark">Update </button></th>

                     {{-- <th class="table-secondary"><input type="submit" value="Update" class="btn btn-dark"></th> --}}
                 </form>
               </tr>

               @endforeach

         </tbody>
       </table>



       <h2> record for parent</h2>
     <table class="table table-primary">
         <thead>
           <tr class="table-primary">
             <th scope="col">id</th>
             <th scope="col">children id</th>
             <th scope="col">mother name</th>
             <th scope="col">father name</th>

           </tr>
         </thead>
         <tbody>@foreach ($data_parent as $parent)

             <tr class="table-primary">


                 <th scope="row">
                    {{$parent->id}}

                 </th>
                 <th>{{$parent->children->children_id}}</th>
                 <th>{{$parent->mother_name}}</th>
                 <th>{{$parent->father_name}}</th>


                 <form action={{route('destroy', ['id' =>$parent->id])}} method="POST">
                    @csrf
                     @method('DELETE')
                     <th class="table-secondary"><input type="submit" value="Delete" class="btn btn-dark"></th>


                 </form>
                 <form action={{route('add_parent')}} method="GET">
                    @csrf


                     <th class="table-secondary"><input type="submit" value="add" class="btn btn-dark"></th>


                 </form>
                  <form action={{route('edit_p', ['id' => $parent->children->id])}} method="GET">


                   @csrf

         <th class="table-secondary"><button class="btn btn-dark">Update </button></th>

                    {{-- <th class="table-secondary"><input type="submit" value="Update" class="btn btn-dark"></th> --}}
                </form>
               </tr>

               @endforeach

         </tbody>
       </table>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
