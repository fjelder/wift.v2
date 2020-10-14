<div>
	<x-input label="Imię" type="text" name="first_name" placeholder="Podaj swoje imię" smalltext="Koniecznie z dużej litery" />
	<x-input label="Nazwisko" type="text" name="last_name" placeholder="Podaj swoje nazwisko" smalltext="Może być z małej"/>
	<x-input label="Numer telefonu 1" name="phone_number_1" placeholder="+48 515 222 333" mask="{+48} 000 000 000" smalltext=""/>

	<br>
    <p><b>Wpisane dane:</b></p>
    <p>Imię: <i>{{ $first_name }}</i></p>
    <p>Nazwisko: <i>{{ $last_name }}</i></p>
</div>
