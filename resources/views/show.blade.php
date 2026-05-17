<x-layout>
    <div class="job-card">
        <h1 class="title">{{ $job['title'] }}</h1>
        <p class="salary">{{ $job['salary'] }}</p>
        <p class="desc">{{ $job['description'] }}</p>
        <a href="{{ route('jobs.show') }}" class="btn">← Back to Jobs</a>
    </div>
</x-layout>