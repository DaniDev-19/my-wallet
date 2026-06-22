<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Laravel</title>
    </head>
    <Style>
        body {
            background: #141414;
            color: #ccc;
        }
        .headerContainer {
            border-bottom: 1px solid #eeea;
        }
        ul {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
        }
        li {
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: inherit;
            background: #505050;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 1.5rem;
            border: 1px solid transparent;
            transition: border 0.3s ease-in-out;
        }
        a:hover{
            outline: #ccc;
            border: 1px solid #ffffff;
        }
        .container {
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }
    </Style>
    <body>
        <header class="headerContainer">
            <nav>
                <ul>
                    <li><a title="Home" href="#">Home</a></li>
                    <li><a title="About" href="#">About</a></li>
                    <li><a title="Contact" href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main class="container">
            <h1>Task Laravel</h1>
        </main>
    </body>
</html>
