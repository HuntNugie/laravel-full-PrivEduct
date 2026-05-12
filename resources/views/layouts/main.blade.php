<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PrivEduct - Private Education Platform</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white text-slate-800 scroll-smooth">

    <!-- ========================= -->
    <!-- NAVBAR -->
    <!-- ========================= -->
    @include('components.partials.navbar')

    @yield('content')

    <!-- ========================= -->
    <!-- ACTIVE NAVBAR -->
    <!-- ========================= -->
    <script>
      
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", () => {

            let current = "";

            sections.forEach(section => {

                const sectionTop = section.offsetTop - 200;
                const sectionHeight = section.clientHeight;

                if (
                    pageYOffset >= sectionTop &&
                    pageYOffset < sectionTop + sectionHeight
                ) {

                    current = section.getAttribute("id");

                }

            });

            navLinks.forEach(link => {

                link.classList.remove("text-orange-500");
                link.classList.add("text-slate-700");

                if (link.getAttribute("href") === `#${current}`) {

                    link.classList.remove("text-slate-700");
                    link.classList.add("text-orange-500");

                }

            });

        });
    </script>

</body>

</html>
