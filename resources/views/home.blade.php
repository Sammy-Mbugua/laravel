<x-layout>
    <x-slot:heading>
        Home page

    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <li>
            I am a{{$job['title']}} and {{$job['description']}} working {{$job['location']}}</li>
            
        @endforeach
    </ul>
  
    <h1>welcome to home</h1>
</x-layout>