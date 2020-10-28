<link href="css/main.css" rel="stylesheet">
    <body>
        <header class="dash-header">
            <h2>contactApp</h2>

        </header>
        <main class="dash-content">
            <h2>Seznam kontaktů</h2>
            <div class="contacts-section">
                <ul class="contact-list">
                    @foreach($contacts as $contact)
                    <li class="contact-link">
                        <h3 class="contact-link-name"><span class="orig">Jméno:</span>{{$contact->fname}} {{$contact->lname}}</h3>
                        <h3 class="contact-link-phone"><span class="orig">Telefon:</span>{{$contact->phone}}</h3>
                        <h3 class="contact-link-mail"><span class="orig">Email:</span> {{$contact->mail}}</h3>
                        <p class="contact-link-content">{{$contact->note}}</p>
                        <ul class="contact-mod-list">
                            <li class="contact-mod-link">
                                <button class="std-button modify" id="{{$contact->slug}}">Upravit</button>
                            </li>
                            <li class="contact-mod-link">
                                <button class="std-button delete" id="{{$contact->id}}">Smazat</button>
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </main>
        <footer class="dash-footer">
            <h2>Přidat kontakt</h2>
            <form class="" id="" action="/store" method="">
                @csrf
                <input class="std-inp" type="text" id="fname" name="fname" required placeholder="Vložte křestní jméno">
                <input class="std-inp" type="text" id="lname" name="lname" required placeholder="Vložte příjmení"> <br>
                <input class="std-inp" type="text" id="phone" name="phone" required placeholder="Vložte telefon">
                <input class="std-inp" type="text" id="mail" name="email" required placeholder="Vložte email">
                <textarea placeholder="Vložte poznámku" id="note" class="std-inp std-txt" name="note"></textarea> <br>
                <input type="submit" class="std-inp std-sub" id="submit" name="submit">
            </form>
        </footer>
        <script defer src="js/app.js">

        </script>
    </body>
