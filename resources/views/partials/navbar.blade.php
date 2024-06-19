<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Navbar Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-purple {
            background: linear-gradient(135deg, #0265a7, #0093b1, #7406a7, #003d5d);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
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
        .navbar-brand{
            font-weight: 600;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .sticky-navbar {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        .content {
            padding: 20px;
            margin-top: 60px;
        }

        @media (min-width: 992px) {
            .dropdown:hover .dropdown-menu {
                display: block;
            }
        }
        .dropdown-menu {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple sticky-navbar" style="color: rgb(162, 34, 130);">
        <div class="container">
            <img src="img/white.png" style="max-width: 30px; margin-right: 10px; max-height: 30px;" alt="">
            <a class="navbar-brand" href="/">MIXU Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">Portofolio</a>
                    </li>
                    @auth
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }} {{ auth()->user()->name }}" href="/posts">News Info</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'tutorial') ? 'active' : '' }} {{ auth()->user()->name }}" href="/tutorial">Tutorial</a>
                    </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            INFO
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/daftar">Daftar</a></li>
                            <li><a class="dropdown-item" href="/categories">Kategori Info</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/contact">Kontak Kami</a></li>
                        </ul>
                    </li>          
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                            <li><a class="dropdown-item" href="/user"><i class="bi bi-person-fill-gear"></i> User</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropdown').hover(function () {
                if ($(window).width() >= 992) {
                    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
                }
            }, function () {
                if ($(window).width() >= 992) {
                    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
                }
            });

            $('.dropdown-toggle').click(function () {
                if ($(window).width() < 992) {
                    var $dropdownMenu = $(this).next('.dropdown-menu');
                    $('.dropdown-menu').not($dropdownMenu).slideUp();
                    $dropdownMenu.slideToggle();
                }
            });
        });
    </script>
</body>
</html>
