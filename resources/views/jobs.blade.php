<x-layout>
    <x-slot:heading>
        jobs page  

    </x-slot:heading>
    @foreach ($jobs as $job)
    <li>I am a{{$job['title']}} and {{$job['description']}} working {{$job['location']}}</li>
        
    @endforeach
    <h1>welcome to about</h1>
</x-layout>