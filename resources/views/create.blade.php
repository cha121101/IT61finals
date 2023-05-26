<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    @vite('resources/css/app.css')
</head>
<body>
<center>
        <form class="w-full max-w-lg py-10 pl-10 my-28 border-solid border-2 border-sky-500 " action="{{ route('store.student')}}" method="post">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Student Name
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="studentname" >
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Age
                                </label>
                                <input name="age"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="number" >
                            </div>
                            </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0" >
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Year and Section
                            </label>
                            <div class="relative">
                                <select name="yearandsection" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                            <optgroup label="BSTM">
                                                <option value="BSTM-1A">BSTM-1A</option>
                                                <option value="BSTM-1B">BSTM-1B</option>
                                                <option value="BSTM-1C">BSTM-1C</option>
                                                <option value="BSTM-2A">BSTM-2A</option>
                                                <option value="BSTM-2B">BSTM-2B</option>
                                                <option value="BSTM-2C">BSTM-2C</option>
                                                <option value="BSTM-3A">BSTM-3A</option>
                                                <option value="BSTM-3B">BSTM-3B</option>
                                                <option value="BSTM-3C">BSTM-3C</option>
                                                <option value="BSTM-4A">BSTM-4A</option>
                                                <option value="BSTM-4B">BSTM-4B</option>
                                                <option value="BSTM-4C">BSTM-4C</option>
                                            </optgroup>
                                            <optgroup label="BSIT">
                                                <option value="BSIT-1A">BSIT-1A</option>
                                                <option value="BSIT-1B">BSIT-1B</option>
                                                <option value="BSIT-1C">BSIT-1C</option>
                                                <option value="BSIT-2A">BSIT-2A</option>
                                                <option value="BSIT-2B">BSIT-2B</option>
                                                <option value="BSIT-2C">BSIT-2C</option>
                                                <option value="BSIT-3A">BSIT-3A</option>
                                                <option value="BSIT-3B">BSIT-3B</option>
                                                <option value="BSIT-3C">BSIT-3C</option>
                                                <option value="BSIT-4A">BSIT-4A</option>
                                                <option value="BSIT-4B">BSIT-4B</option>
                                                <option value="BSIT-4C">BSIT-4C</option>
                                            </optgroup>
                                            <optgroup label="BSA">
                                                <option value="BSA-1A">BSA-1A</option>
                                                <option value="BSA-1B">BSA-1B</option>
                                                <option value="BSA-1C">BSA-1C</option>
                                                <option value="BSA-2A">BSA-2A</option>
                                                <option value="BSA-2B">BSA-2B</option>
                                                <option value="BSA-2C">BSA-2C</option>
                                                <option value="BSA-3A">BSA-3A</option>
                                                <option value="BSA-3B">BSA-3B</option>
                                                <option value="BSA-3C">BSA-3C</option>
                                                <option value="BSA-4A">BSA-4A</option>
                                                <option value="BSA-4B">BSA-4B</option>
                                                <option value="BSA-4C">BSA-4C</option>
                                            </optgroup>
                                    </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 mt-1 ml-20 md:mb-0">
                        <button type="submit"  class="bg-transparent justify-end hover:bg-blue-500 text-blue-700 font-semibold hover:text-white my-5 py-2 px-5 border border-blue-500 hover:border-transparent rounded">
                            Add student
                        </button> 
                    </div>
            </div>
        </form>
    </center>

</body>
</html>