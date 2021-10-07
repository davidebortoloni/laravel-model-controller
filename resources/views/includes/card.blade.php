<div class="card my-3">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
      <div>Nazionalità: {{ $movie->nationality }}</div>
      <div>Voto: {{ $movie->vote }}</div>
    </div>
  </div>