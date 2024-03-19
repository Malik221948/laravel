<div>
    @foreach ($planeten as $planeet)
        <h1>{{ $planeet['name'] }}</h1>
        {{ $planeet['description']}}
    @endforeach
</div>
