<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <center>
        <header>
            <h1 class="font-extrabold pb-10 mt-10 text-3xl">Rest Method</h1>
        </header>
    </center>

        @if (empty($student))
            <center><h2>No data</h2></center>
        @else
        <div class="container mx-10">
        <table class="table-auto w-full m-auto">
            <thead>
                <tr>
                <th class="px-4 py-2 text-left">Student Name</th>
                <th class="px-4 py-2 text-left">Age</th>
                <th class="px-4 py-2 text-left">Year and section</th>
                <th class="px-4 py-2">Edit</th>
                <th class="px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
        @forelse ( $student as $keys => $value )
                <tr class="justify-center">
                    <td class="border px-4 py-2">
                        <p>{{ $value->studentname }}</p>
                    </td>
                    <td class="border px-4 py-2">
                        <p>{{ $value->age }}</p>
                    </td>
                    <td class="border px-4 py-2">
                        <p>{{ $value->yearandsection }}</p>
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{ route('edit.student' , ['id' => $value->id])}}" method="post" class="flex justify-center" >
                        @csrf
                            <button type="submit" class="btn bg-green-600 border rounded p-2 ">
                            <svg class="h-6 w-6 text-black"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                            </button>                            
                        </form>
                    </td>
                    <td class="border px-4 py-2">
                        <form  action=" {{route('delete.student', ['id' => $value->id]) }} " method="post" class="flex justify-center">
                        @csrf
                        @method("DELETE")
                            <button  type="submit" class="btn bg-red-600 border rounded p-2">
                            <svg class="h-6 w-6 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg>
                            </button>
                        </form>
                    </td>
                </tr>
        @empty
           
        @endforelse
        </tbody>
        </table>

        @endif
        <section class="text-center">
            <form action="{{route('create.student')}}" method="get" class="pt-10"> 
                <button type="submit" class="inline-flex bg-green-500 border rounded p-2">
                <p class="mr-3">Add student</p> <svg class="h-6 w-6 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />  <circle cx="8.5" cy="7" r="4" />  <line x1="20" y1="8" x2="20" y2="14" />  <line x1="23" y1="11" x2="17" y2="11" /></svg>
                </button>
            </form>
        </section> 
        </div>




</body>
</html>