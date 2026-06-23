<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Laravel</title>
    <style>
        :root {
            --bg: #07111f;
            --panel: #0f172a;
            --panel-2: #111827;
            --text: #f8fafc;
            --muted: #94a3b8;
            --accent: #38bdf8;
            --accent-2: #818cf8;
            --border: rgba(255, 255, 255, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--text);
            background: linear-gradient(135deg, var(--bg) 0%, #0b1120 100%);
            line-height: 1.6;
        }

        .hero {
            padding: 64px 20px 32px;
            text-align: center;
            border-bottom: 1px solid var(--border);
            background: radial-gradient(circle at top, rgba(56, 189, 248, 0.15), transparent 45%);
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.14);
            color: #bae6fd;
            font-size: 0.85rem;
            margin-bottom: 12px;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 12px;
            font-size: clamp(2rem, 4vw, 3rem);
        }

        .hero p {
            max-width: 760px;
            margin: 0 auto 20px;
            color: var(--muted);
            font-size: 1.05rem;
        }

        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 999px;
            text-decoration: none;
            color: #08111d;
            font-weight: 700;
            background: linear-gradient(90deg, var(--accent), var(--accent-2));
        }

        .btn.secondary {
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
        }

        main {
            max-width: 1180px;
            margin: 0 auto;
            padding: 28px 20px 48px;
        }

        .section {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 22px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .section h2 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .section p,
        .section li {
            color: var(--muted);
        }

        .grid {
            display: grid;
            gap: 16px;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 16px;
        }

        .card h3 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .route {
            display: inline-block;
            padding: 6px 10px;
            background: rgba(56, 189, 248, 0.12);
            color: #bae6fd;
            border-radius: 999px;
            font-size: 0.9rem;
            margin: 4px 0 6px;
        }

        code,
        pre {
            font-family: "Fira Code", Consolas, monospace;
        }

        pre {
            background: rgba(2, 8, 23, 0.7);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px;
            overflow-x: auto;
            color: #e2e8f0;
        }

        .small {
            font-size: 0.95rem;
        }

        ul {
            padding-left: 18px;
        }

        .two-col {
            display: grid;
            gap: 16px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
    </style>
</head>

<body>
    <header class="hero">
        <div class="badge">Laravel + API REST</div>
        <h1>Proyecto Laravel con APIs documentadas y listas para consumir</h1>
        <p>Esta página sirve como centro de documentación para entender qué hace Laravel, cómo se organiza este proyecto y cómo usar las rutas de la API que creamos.</p>
        <div class="actions">
            <a class="btn" href="#apis">Ver APIs</a>
            <a class="btn secondary" href="#consumo">Cómo consumirlas</a>
        </div>
    </header>

    <main>
        <section class="section">
            <h2>¿Qué es Laravel?</h2>
            <p>Laravel es un framework de PHP pensado para desarrollar aplicaciones web modernas, limpias y escalables. Facilita el manejo de rutas, controladores, bases de datos, validaciones y APIs con una arquitectura clara.</p>
            <div class="two-col">
                <div>
                    <h3>Características principales</h3>
                    <ul>
                        <li>Rutas simples y organizadas.</li>
                        <li>Controladores para separar lógica y presentación.</li>
                        <li>Modelos y migraciones para trabajar con bases de datos.</li>
                        <li>Soporte nativo para crear APIs REST.</li>
                    </ul>
                </div>
                <div>
                    <h3>Cómo arrancar este proyecto</h3>
                    <pre>php artisan serve</pre>
                    <p class="small">Luego abre <code>http://127.0.0.1:8000</code> en tu navegador.</p>
                </div>
            </div>
        </section>

        <section class="section" id="apis">
            <h2>APIs disponibles</h2>
            <p>Las rutas están registradas bajo el prefijo <code>/api</code> y siguen el patrón REST.</p>

            <div class="grid">
                <article class="card">
                    <h3>Student</h3>
                    <p>Gestión de estudiantes.</p>
                    <div class="route">GET /api/student</div>
                    <div class="route">POST /api/student</div>
                    <div class="route">GET /api/student/{id}</div>
                    <div class="route">PUT /api/student/{id}</div>
                    <div class="route">DELETE /api/student/{id}</div>
                    <pre>{
  "nombre": "Juan",
  "email": "juan@example.com",
  "edad": 21
}</pre>
                </article>

                <article class="card">
                    <h3>Account</h3>
                    <p>Gestión de cuentas.</p>
                    <div class="route">GET /api/account</div>
                    <div class="route">POST /api/account</div>
                    <div class="route">GET /api/account/{id}</div>
                    <div class="route">PUT /api/account/{id}</div>
                    <div class="route">DELETE /api/account/{id}</div>
                    <pre>{
  "usuario_id": 1,
  "tipo": "ahorros",
  "saldo": 1000.50
}</pre>
                </article>

                <article class="card">
                    <h3>Card</h3>
                    <p>Gestión de tarjetas.</p>
                    <div class="route">GET /api/card</div>
                    <div class="route">POST /api/card</div>
                    <div class="route">GET /api/card/{id}</div>
                    <div class="route">PUT /api/card/{id}</div>
                    <div class="route">DELETE /api/card/{id}</div>
                    <pre>{
  "usuario_id": 1,
  "tarjeta_numero": "4242424242424242",
  "vencimiento": "12/26",
  "cvv": "123"
}</pre>
                    <p class="small">La API genera automáticamente el campo <code>tarjeta_enmascarada</code>.</p>
                </article>
            </div>
        </section>

        <section class="section" id="consumo">
            <h2>Cómo consumirlas</h2>
            <p>Estas APIs pueden consumirse desde un navegador, Postman, curl o JavaScript.</p>

            <div class="two-col">
                <div>
                    <h3>Ejemplo con curl</h3>
                    <pre>curl http://127.0.0.1:8000/api/student</pre>
                    <pre>curl -X POST http://127.0.0.1:8000/api/student \
  -H "Content-Type: application/json" \
  -d '{"nombre":"Ana","email":"ana@example.com","edad":25}'</pre>
                </div>
                <div>
                    <h3>Ejemplo con JavaScript</h3>
                    <pre>fetch('http://127.0.0.1:8000/api/student')
  .then(response => response.json())
  .then(data => console.log(data));</pre>
                </div>
            </div>
        </section>

        <section class="section">
            <h2>Comandos frecuentes de Laravel</h2>
            <p>A continuación encontrarás los comandos más usados para trabajar con Laravel y para qué sirve cada uno.</p>

            <div class="grid">
                <article class="card">
                    <h3>php artisan serve</h3>
                    <p>Inicia el servidor de desarrollo local para probar la aplicación en el navegador.</p>
                </article>
                <article class="card">
                    <h3>php artisan make:model</h3>
                    <p>Crea un modelo para interactuar con una tabla de la base de datos.</p>
                </article>
                <article class="card">
                    <h3>php artisan make:controller</h3>
                    <p>Crea un controlador para organizar la lógica de las rutas y las peticiones.</p>
                </article>
                <article class="card">
                    <h3>php artisan make:migration</h3>
                    <p>Genera una migración para crear o modificar tablas en la base de datos.</p>
                </article>
                <article class="card">
                    <h3>php artisan migrate</h3>
                    <p>Ejecuta las migraciones pendientes y crea las tablas definidas.</p>
                </article>
                <article class="card">
                    <h3>php artisan migrate:fresh</h3>
                    <p>Reinicia la base de datos y vuelve a ejecutar todas las migraciones desde cero.</p>
                </article>
                <article class="card">
                    <h3>php artisan tinker</h3>
                    <p>Abre una consola interactiva para probar consultas y modelos directamente.</p>
                </article>
                <article class="card">
                    <h3>php artisan route:list</h3>
                    <p>Muestra todas las rutas registradas en la aplicación, útiles para revisar APIs.</p>
                </article>
                <article class="card">
                    <h3>php artisan make:request</h3>
                    <p>Crea clases de validación para manejar reglas de entrada en formularios o APIs.</p>
                </article>
                <article class="card">
                    <h3>php artisan make:seeder</h3>
                    <p>Genera un seeder para insertar datos iniciales en la base de datos.</p>
                </article>
                <article class="card">
                    <h3>php artisan db:seed</h3>
                    <p>Ejecuta los seeders para poblar la base de datos con información de prueba.</p>
                </article>
                <article class="card">
                    <h3>php artisan test</h3>
                    <p>Ejecuta las pruebas del proyecto para verificar que todo sigue funcionando.</p>
                </article>
            </div>
        </section>
    </main>
</body>

</html>