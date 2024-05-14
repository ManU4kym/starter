<x-layout>
<x-slot:heading>
    Jobs 
</x-slot:heading>

@section('content')
<pre>
    @foreach ($jobs as $job)
        <a href="/job/{{$job['id']}}">
            <li><strong>{{$job['title']}}</strong> : pays {{$job['Salary']}}</li>
        </a>
    @endforeach
</pre>
@endsection

</x-layout>

