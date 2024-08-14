
<x-header>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <div id="jobs" class="space-y-4">
    @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 rounded-lg">
            <div class="text-blue-600 font-bold">{{$job->employer['name']}}</div>
            <div>
                <strong>{{$job['title']}}</strong>: Pays: {{$job['salary']}}
            </div>
        </a>
    @endforeach
    </div>

    <div class="mt-10">
        {{ $jobs->links() }}
    </div>
</x-header>

<style>
    #jobs a {
        border: 1px solid lightgrey;
    }

</style>

