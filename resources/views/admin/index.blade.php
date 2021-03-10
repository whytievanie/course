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
            <h2 class='adminh2'>U bent nu ingelogd als beheerder.</h2>
            <p class='adminh2'>Als beheerder kan u inloggen in het systeem, zodat u daar de adminstratie kan bekijken en bijhouden.</p>
            <p class='adminh2'>Als beheerder kan u een andere docent de beheerdersrol geven, zodat het niet bij een persoon hoeft te liggen.</p>
            <p class='adminh2'>Als beheerder kan u een keuzedeel toevoegen, aanpassen en verwijderen.</p>
            <p class='adminh2'>Als beheerder kan u een keuzedeel inschrijving maken, zodat studenten kunnen aannemen voor de keuzedeel.</p>
            <p class='adminh2'>Als beheerder kan u een studentlijst importeren.</p>
            <p class='adminh2'>Als beheerder kan u een opleiding toevoegen, aanpassen en verwijderen.</p>
            <p class='adminh2'>Als beheerder kan u een keuzedeel aan een of meer opleidingen koppelen.</p>
            <p class='adminh2'>Als beheerder kan u bij een keuzedeel aangeven of er toegangeisen zijn, zoals dat je eerst een andere keuzedeel moet volgen om deze keuzedeel te volgen of dat de keuzedeel wel geschikt is voor dit leerjaar of leerjaren.</p>
            <p class='adminh2'>Als beheerder kan u een dashboard oproepen waarin alle informatie te vinden zijn. Dus het geeft een overzicht van de keuzedelen, de beschikbaarheid en de mensen die nog niet een keuze hebben gemaakt.</p>
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