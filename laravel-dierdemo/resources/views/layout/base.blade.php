<html>

<head>
    <title>Dieren applicatie</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #c2c8ce;
        }

        #app {}
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <header>
                <h1>Dieren applicatie</h1>

                <nav class="navbar navbar-dark bg-dark justify-content-start">
                    <a class="navbar-brand" href="/"><i class="fas fa-paw"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/dier">Dieren</a>
                        </li>
                    </ul>
                </nav>
            </header>

            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
