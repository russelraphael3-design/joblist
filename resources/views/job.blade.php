<x-layout>
    <h1>{{ $job['title'] }}</h1>

    <p><strong>Salary:</strong> {{ $job['salary'] }}</p>

    <p>{{ $job['description'] }}</p>

    <a href="/jobs">Back to Jobs</a>
</x-layout>