<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Pierwszy skrypt

Pamiętaj aby rozwiązania do zadań umieszczać w odpowiednich plikach `php`, przygotowanych do zadań.  

#### Zadanie 1

Wpisz w pliku `index.php` następującą instrukcję:

```PHP
<?php
    echo 'Jeśli to widzę to oznacza, że mój kod działa :)';
?>
```

Otwórz w przeglądarce adres **[localhost][localhost]**, wybierz katalog w którym masz prework PHP. następnie wybierz katalog `1_Pierwszy_skrypt`.  
Zauważ, że od razu został uruchomiony kod znajdujący się w pliku `index.php`.  
Zmień nazwę tego pliku na `index2.php` i odśwież stronę. TYm razem kod nie został już automatycznie uruchomiony tylko wyświetla się lista z plikami.  
Dzieje się tak dlatego, ponieważ automatycznie przez serwer uruchamiane są tylko pliki o nazwie `index.php`.  

#### Zadanie 2

Dodaj w pliku `zadanie2.php` kod, aby wyglądał w następujący sposób:  
```php
<?php
    echo '<h1>Jeśli to widzę to oznacza, że mój kod działa :)</h1>'; 
?>
```
Zauważ, że tagi HTML są poprawnie interpretowane przez przeglądarkę i możesz z nich korzystać pisząc w PHP.  

Następnie zmodyfikuj kod w następujący sposób:  
```php
<h2>Twoje imię to: <?php echo 'WPISZ_SWOJE_IMIĘ'; ?> </h2>
```

Zauważ że kod PHP możemy wstawiać bezpośrednio w kod HTML. Musisz tylko pamiętać żeby kod PHP był otoczony znacznikami ```<?php ... ?>```. 
Sprawdź co się stanie jak zapomnisz któregoś z tych znaczników?  
Odpowiedź napisz na dole pliku w komentarzu.

#### Zadanie 3

Dodaj w pliku `zadanie3.php` kod, aby wyglądał w następujący sposób:  
```php
<h2>Twoje imię to: <?= 'WPISZ_SWOJE_IMIĘ'; ?> </h2>

```
Aby skrócić zapis kodu php gdy piszemy do html, możemy użyć tekst lub zmienną otoczyć znacznikami `<?= ?>` a zostanie on automatycznie wypisany jak przy użyciu `echo`. 

#### Zadanie 4

W pliku `zadanie4.php` znajduje się przygotowane kilka linijek kodu, które są zakomentowane.  
Odkomentuj kolejne linijki (**aby tylko jedna była w danej chwili odkomentowana**), a następnie uruchom kod.  
Po jego przeanalizowaniu komentuj go żeby nie przeszkadzał Ci później) i sprawdź co się wyświetli.  
Poniżej znajduje się kod, który został umieszczony w pliku.
  
```php
echo("Hello World");
```  
```php
echo(Hello World);
```  
```php
echo("Hello World);
```  
```php
echoo("Hello World");
```
```php
echo("Hello 1")
echo("Hello 2");
```

Przeanalizuj błędy, które pokazują Ci się w przeglądarce.  
Następnie napisz w komentarzu obok każdej z tych linijek co zrozumiałeś z komunikatu błędu.

**Poszczególne zadania rozwiązuj w odpowiednich przygotowanych plikach.**


<!-- Links -->
[localhost]: http://localhost
