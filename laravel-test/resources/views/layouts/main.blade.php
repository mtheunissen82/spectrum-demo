<html>

<head>
    <title>App Name - @yield('title')</title>
    <style>
        .app__header {
            grid-area: header;
        }

        .app__footer {
            grid-area: footer;
        }

        .app__main {
            grid-area: main;
        }

        .app__left {
            grid-area: navigation;
        }

        .app__right {
            grid-area: ads;
        }

        .app {
            display: grid;
            grid-template-areas: "header header header"
                "navigation main ads"
                "footer footer footer";
            grid-template-columns: 150px 1fr 150px;
            grid-template-rows: 100px 1fr 30px;
            min-height: 100vh;
        }

        @media screen and (max-width: 600px) {
            .app {
                grid-template-areas: "header"
                    "navigation"
                    "main"
                    "ads"
                    "footer";
                grid-template-columns: 100%;
                grid-template-rows: 100px 50px 1fr 50px 30px;
            }
        }
    </style>
</head>

<body>
    <div class="app">
        <header class="app__header">Header</header>
        <main class="app__main">Content
            @yield('content')
        </main>
        <aside class="app__left">Left bar</aside>
        <aside class="app__right">Right bar</aside>
        <footer class="app__footer">Footer</footer>
    </div>
</body>

</html>
