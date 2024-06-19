<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">MIXU ACADEMY</a>
  
  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <svg class="bi"><use xlink:href="#search"/></svg>
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi"><use xlink:href="#list"/></svg>
      </button>
    </li>
  </ul>

  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>

  

  <div class="navbar-nav ms-auto me-3 d-none d-md-block">
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="userDropdown" role="button" aria-expanded="false">
        <img src="https://static.vecteezy.com/system/resources/previews/007/033/146/non_2x/profile-icon-login-head-icon-vector.jpg" alt="Profile" class="rounded-circle me-2" style="max-width: 50px; max-height: 25px;">

        <span>{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end shadow animate__animated animate__fadeIn" aria-labelledby="userDropdown">
        <li class="d-flex align-items-center px-3 py-2">
          <img src="https://static.vecteezy.com/system/resources/previews/007/033/146/non_2x/profile-icon-login-head-icon-vector.jpg" alt="Profile" class="rounded-circle me-2" style="max-width: 50px; max-height: 50px;">

          <div>
            <div class="fw-bold">{{ Auth::user()->name }}</div>
            <div class="text-muted">{{ Auth::user()->role }}</div>
          </div>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">Log Out</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
  .navbar-nav .dropdown-menu {
    right: 0;
    left: auto;
    position: absolute;
    top: calc(100% + 0.5rem);
    margin-top: 0;
    display: none;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .bg-primary {
    background: linear-gradient(135deg, #0265a7, #0093b1, #06a787, #76cebc);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
  }
  .navbar-nav .dropdown-menu.show {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  .navbar-nav .dropdown-toggle::after {
    display: none;
  }

  .navbar-nav .dropdown-item {
    cursor: pointer;
  }

  .navbar-nav .nav-link.dropdown-toggle {
    cursor: pointer;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var dropdownToggle = document.getElementById('userDropdown');
    var dropdownMenu = dropdownToggle.nextElementSibling;

    dropdownToggle.addEventListener('click', function (event) {
      event.preventDefault();
      if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
      } else {
        document.querySelectorAll('.dropdown-menu.show').forEach(function (dropdown) {
          dropdown.classList.remove('show');
        });
        dropdownMenu.classList.add('show');
      }
    });

    document.addEventListener('click', function (event) {
      if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove('show');
      }
    });
  });
</script>
