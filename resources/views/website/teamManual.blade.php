<div class="page-title text-center mb-3">Team</div>
<div class="row justify-content-center align-items-center">
    @forelse ($team as $t)
        <div class="bio text-center col-4 mb-3">
            <img src="{{ asset('team-image/'.$t->image) }}" alt="">
            <span class="name mt-2">{{ $t->name }}</span>
            <span>({{ $t->nim }})</span>
            <span class="role mt-2">{{ $t->role }}</span>
        </div>
    @empty
        <div class="text-center">Data Kosong</div>
    @endforelse
</div>
<link rel="stylesheet" href="{{ asset('css/team.css') }}">