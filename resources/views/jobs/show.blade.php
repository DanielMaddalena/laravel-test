<x-layout>
    <x-button href="/jobs/{{$job->id}}/edit" class="ml-auto">Edit job</x-button>
    <h1 class="ma-auto text-[6rem]">{{$title}} {{$job->title}}</h1>
    <p>Il mio salario è {{$job->salary}}</p>
    </ul>
</x-layout>
