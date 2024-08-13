
<x-header>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <ul>
    @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
            <li class="mb-5">
                <strong>{{$job['title']}}</strong>: Pays: {{$job['salary']}}
            </li>
        </a>
    @endforeach
    </ul>
</x-header>
