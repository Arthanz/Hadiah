@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg " style="margin: 1rem">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Hi there traveller! Why don't you take a look of our games? If you are interested, you can email us on the bottom of the page :D") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1rem" >
                <div class=" p-6 text-gray-900 dark:text-gray-100 w-full flex flex-wrap -mx-2 mb-2" style="flex-wrap: wrap">
                        @foreach ($games as $g)
                        <div class="card" style="width: 18rem;margin: 1cm" >
                            <img src="{{asset('/storage/game/'.$g->image)}}" class="card-img-top" alt="..." style="border-radius: 15px ">
                            <div class="card-body bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1px; margin-top: 5px">
                                <h5 class="card-title" style="color: rgb(163, 217, 250)" >{{$g->name}}</h5>
                                <p class="card-text" style="color: aquamarine">Price: {{$g->price}}</p>
                                <p class="card-text " style="color: rgb(245, 245, 143)">Publisher: {{$g->publisher}}</p>
                                <p class="card-text" style="color: rgb(243, 163, 163)">Published Date: {{$g->PublishDate}}</p>
                                <a href="{{route('show', $g->id)}}" class="btn btn-primary m-1" style="border-radius: 15px;background-color:rgb(83, 168, 247)">Details</a>
                                <a href="{{route('edit', $g->id)}}" class="btn btn-success m-1" style="border-radius: 15px;background-color:rgb(89, 213, 89)">Edit</a>
                                <form action="/delete-game/{{$g->id}}" method="POST" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger m-1" style="border-radius: 15px;background-color:rgb(241, 78, 75)">Delete</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg " style="margin: 1rem">
                <div class="m-5">
                    @include('flash-message')
                    <form action="/send-mail" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Email address</label>
                            <input type="email" class="form-control" style="border-radius: 15px 15px 15px 15px;background-color:gray;margin:1rem" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Message</label>
                            <input type="text" class="form-control"  style="border-radius: 15px 15px 15px 15px;background-color:gray;margin:1rem" id="exampleInputEmail1" aria-describedby="emailHelp" name="message">
                        </div>
                        <button type="submit" style="border-radius: 15px 15px 15px 15px;background-color:rgb(58, 189, 76);margin:1rem" class="btn btn-primary font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Send Email</button>
                    </form>
                </div>


            </div>

        </div>
    </div>
</x-app-layout>
