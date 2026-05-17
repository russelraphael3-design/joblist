<x-layout>
    <h1>Available Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <li><a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}<br><br></a></li>
        @endforeach
    </ul>
</x-layout>