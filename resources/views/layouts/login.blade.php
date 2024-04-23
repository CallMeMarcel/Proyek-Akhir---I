<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
      body {
    background-size: cover;
    background-position: center;
    animation: fadeInBackground ease 1s;
    animation-fill-mode: forwards;
    opacity: 0;
}

@keyframes fadeInBackground {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}


        .container {
            max-width: 450px;
            margin-top: 100px;
            border-radius:1em;
        }
  /* Animasi fade in */
  .fade-in {
    opacity: 0;
    animation: fadeInAnimation ease 1s forwards;
  }

  @keyframes fadeInAnimation {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

    </style>
</head>
<body>

    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.fade-in');
    elements.forEach(function(element) {
      element.style.animationDelay = "0.5s"; // Atur keterlambatan animasi sesuai kebutuhan
      element.classList.add('animate__animated', 'animate__fadeIn');
    });
  });
</script>

    
</body>
</html>