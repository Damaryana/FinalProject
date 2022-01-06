<div class="page-title text-center mb-3">Team</div>
<div class="page-body">
    @foreach ($team as $t)
        <div class="bio text-center">
            <img src="{{ asset('team-image/'.$t->image) }}" alt="">
            <span class="name mt-2">{{ $t->name }} ({{ $t->nim }})</span>
            <span class="role mt-2">{{ $t->role }}</span>
        </div>
    @endforeach
</div>
<link rel="stylesheet" href="{{ asset('css/team.css') }}">