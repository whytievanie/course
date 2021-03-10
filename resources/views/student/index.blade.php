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
            <h2 class='adminh2'>U bent nu ingelogd als student.</h2>
            <p class='adminh2'>Als student kan u zelf u identificeren bij het systeem door mijn D-nummer in te voeren, het systeem kent dan mijn naam en klas, zodat ik dan kijk inschrijven voor een keuzedelen.</p>
            <p class='adminh2'>Als geïdentificeerde student kan u een open inschrijving kiezen en kan u voor een keuzedeel inschrijven en een reserkeuze opgeven. Hierbij wordt rekening gehouden met het maximumaantal inschrijvingen. Hierna is voor jou de inschrijving gesloten en kun je je keuze niet meer aanpassen.</p>
            <p class='adminh2'>Als geïdentificeerde student kan ik alleen de keuzemogelijkheden zien die voor mij van toepassing zijn, gezien de bovenstaande eisen.</p>
            <p class='adminh2'>Als geïdentificeerde student kan ik géén keuze-deel kunnen kiezen, als ik nog bezig ben met een keuze-deel dat meer dan één jaar duurt (dus 480 op 960 SBU). In de nieuwe opzet kiest een student na 8 weken voor de gehele opleiding, dus dit is niet nodig.</p>  
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
