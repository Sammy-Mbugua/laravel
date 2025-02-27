<x-layout>
    <x-slot:heading>
            job listings
    </x-slot:heading>
   <ul>
        @foreach($jobs as $job)
            <l1>
                <a href="/jobs/{{$job['id']}}">
                    {{$job['title']}} is paid {{$job['salary']}} and is Welcomed to home page
                </a>
            </l1>
        @endforeach
   </ul>
</x-layout>