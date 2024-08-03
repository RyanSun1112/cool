<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li>
            <a href="/jobs/{{ $job['id'] }}">{{$job['title']}},  it pays {{$job['Salary']}}</a>
        </li>
        @endforeach
    </ul>
</x-layout>