<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Optionalpartregistration</title>

        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>
    <body>
    
        <header>
            <div>
                @if (Route::has('login'))
                    <div class="headerdiv">
                        @auth
                        @if (Auth::user()->role_id === 1)
                            <p>U bent ingelogd als beheerder.</p>
                            <a class="loginbutton" href="{{ route('dashboard') }}">Beheerder dashboard</a>
                        @elseif (Auth::user()->role_id === 2)
                            <p>U bent ingelogd als docent.</p>
                            <a class="loginbutton" href="{{ route('dashboard') }}">Docent dashboard</a>
                        @elseif (Auth::user()->role_id === 3)
                            <p>U bent ingelogd als student.</p>
                            <a class="loginbutton" href="{{ route('dashboard') }}">Student dashboard</a>
                        @endif
                        @else
                            <a class="loginbutton" href="{{ route('login') }}">Inloggen</a>
                        @if (Route::has('register'))
                            <a class="loginbutton" href="{{ route('register') }}">Registreren</a>
                        @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="headerdivtwo">
                <h1>Keuzedeelregistratie</h1>
                <p class="headerp">U bent nu niet ingelogd. Op deze pagina kun u de keuzedeel bekijken.</p>
                <p>Als nu ga inloggen, dan kan u de keuzedeel bijhouden, uitkiezen, bewerken enzovoort.</p>
            </div>
        </header>

        <main class="homemain">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <footer>
            <div class="footerdiv">
                <p>Curio Tech</p>
                <p class="footerptwo">Terheijdenseweg 350, 4826 AA Breda</p>
                <p>076 573 3444</p>
                <p>radiuscollege@curio.nl</p>
            <div>
        </footer>

    </body>
</html>
