<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agen X | Tiket Konser</title>
  <link rel="icon" type="image/png" href="{{ asset('images/ticket.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to bottom, #0d0c1d, #302b63);
        color: #fff;
        min-height: 100vh;
    }

    .navbar-glow-pink {
    height: 5px;
    background: linear-gradient(270deg, #ff4ecd, #ff0994, #0926ff, #5d06ff);
    background-size: 600% 600%;
    animation: pinkGlow 5s ease infinite;
    box-shadow: 0 0 20px rgba(255, 78, 205, 0.5);
    }

    @keyframes pinkGlow {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
    }

    .form-control, textarea {
    background-color: #222;
    color: #ffffff !important;
    border: 1px solid #666;
    font-weight: 500;
    }

    .form-control:focus {
    background-color: #1a1a1a;
    color: #fff;
    border-color: #ff4ecd;
    box-shadow: 0 0 0 0.25rem rgba(255, 78, 205, 0.3);
    }

    .btn-custom {
        background: linear-gradient(to right, #ff4ecd, #7a00ff);
        color: white;
        border: none;
    }
    .btn-custom:hover {
        opacity: 0.9;
    }
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center gap-2" href="/">
              <img src="{{ asset('images/ticket.png') }}" alt="Logo" style="height: 40px;">
              <span class="fw-bold">Agen X</span>
          </a>
          <div class="d-flex">
            @if(auth()->check())
            <form method="POST" action="/logout" class="d-inline">
              @csrf
              <button class="btn btn-sm btn-outline-light">Logout</button>
            </form>
            @endif
          </div>
        </div>
      </nav>
      
      <!-- Efek berkilau pink -->
      <div class="navbar-glow-pink"></div>
</nav>

<div class="container py-5" data-aos="fade-up">
  @yield('content')
</div>
<footer class="text-center py-4 mt-5 text-muted">
    &copy; {{ date('Y') }} <p class="fw-bold text-white">Wingky Dev. All Be Right</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
  });
</script>
</body>
</html>
