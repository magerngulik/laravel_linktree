<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Linktree</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('market.png') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      position: relative;
      background-image: url({{ $background }});
      background-size: cover;
      background-position: center;
      background-repeat: fixed;
    }
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); 
      z-index: -1;
    }


    .profile-photo {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .list-group-item {
      display: flex;
      align-items: center;
      gap: 10px;
    }
  </style>
</head>
<body>
  <div class="container mt-4 text-center">
    <!-- Profile Photo -->
    <img src="{{ $profile }}" alt="Profile Photo" class="profile-photo mb-3 rounded-circle">

    <h1 class="mb-4 text-white">{{ $title}}</h1>
    <div class="list-group text-center">
      @foreach ($link_tree as $item)
        <a href="{{ $item['link'] }}" class="list-group-item list-group-item-action mb-4" target="_blank"><i class="{{ $item['icon'] }}"></i> {{ $item['title'] }}</a>  
      @endforeach
      <!-- Add more links as needed -->
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
