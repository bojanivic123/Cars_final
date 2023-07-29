<div class="col">
    <div class="card shadow-sm">
      <img src={{ $car->image }}>
      <div class="card-body">
        <p class="card-text">{{ $car->producer }} {{ $car->title }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/cars{{ $car->id }}">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  