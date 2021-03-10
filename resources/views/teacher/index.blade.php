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
            <nav>
                <a class='admina' href="#">Home</a>
            </nav>
        </div>
    </header>

    <main>
        <div>
            <h2 class='adminh2'>U bent nu ingelogd als docent.</h2>
            <p class='adminh2'>Als docent kan u inloggen in het systeem, zodat u daar de adminstratie kan bekijken en bijhouden.</p>
            <p class='adminh2'>Als docent (dus niet enkel beheerders) kan u een inschrijving van een student wijzigen, maar alleen nadat de inschrijving gesloten is (dus als een student later besluit van een keuzedeel te wisselen). </p>
            <p class='adminh2'>Als docent kan u een keuzedeel die zijn meegenomen aan een andere opleiding registreren.</p>
            <p class='adminh2'>Als docent kan u de resultaten van de keuzedelen zichtbaar maken.</p>
        </div>
        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        this.closest('form').submit();" class="logoutbutton">
                            {{ __('Logout') }}
                </x-jet-responsive-nav-link>
            </form>
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