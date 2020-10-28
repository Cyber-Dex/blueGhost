<link href="css/main.css" rel="stylesheet">
<header class="dash-header">
    <h2>contactApp</h2>

</header>
<main class="dash-content">
    <h2>Upravit Kontakt</h2>
    <form class="edit-form" id="" action="/edit" method="">
        @csrf
        <input class="std-inp edit-inp" type="text" id="fname" name="fname" required placeholder="Vložte křestní jméno" value="{{$contact->fname}}">
        <input class="std-inp edit-inp" type="text" id="lname" name="lname" required placeholder="Vložte příjmení" value="{{$contact->lname}}"> <br>
        <input class="std-inp edit-inp" type="text" id="phone" name="phone" required placeholder="Vložte telefon" value="{{$contact->phone}}">
        <input class="std-inp edit-inp" type="text" id="mail" name="email" required placeholder="Vložte email" value="{{$contact->mail}}">
        <input class="std-inp edit-inp" type="text" id="id" name="id" required hidden readonly value="{{$contact->id}}">
        <textarea placeholder="Vložte poznámku" id="note" class="std-inp std-txt edit-inp" name="note">{{$contact->note}}</textarea> <br>
        <input type="submit" class="std-inp std-sub edit-inp" id="submit" name="submit">
    </form>
</main>
<footer class="dash-footer">

</footer>
