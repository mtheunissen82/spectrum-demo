<html>

<head>
    <title>Dieren applicatie</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #c2c8ce;
        }

        #app {
            display: grid;

            grid-template-areas:
                "header header header"
                "left main right"
                "footer footer footer";

            grid-template-columns: 200px 1fr 200px;
            grid-template-rows: auto 1fr auto;
            /* grid-gap: 10px; */

            height: 100vh;
        }

        header {
            grid-area: header;

            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        #left {
            grid-area: left;
            margin-right: 0.5rem;
        }

        main {
            grid-area: main;
        }

        #right {
            grid-area: right;
            margin-right: 0.5rem;
        }

        footer {
            grid-area: footer;
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <h1>Dieren applicatie</h1>
        </header>

        <aside id="left">
            left
        </aside>

        <main>
            <nav class="navbar navbar-dark bg-dark justify-content-start">
                <a class="navbar-brand" href="/"><i class="fas fa-paw"></i></a>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/dier">Dieren</a>
                    </li>
                </ul>
            </nav>

            @yield('content')
        </main>

        <aside id="right">
            right
        </aside>

        <footer>footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
