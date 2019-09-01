<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Zmienne i typy danych

Pamiętaj aby rozwiązania do zadań umieszczać w odpowiednich plikach `php`, przygotowanych do zadań.  

#### Zadanie 1
W pliku `zadanie1.php` stwórz 5 zmiennych.  
Wstaw do nich następujące dane:

1. liczbę całkowitą
2. liczbę zmiennoprzecinkową
3. string (napis)
4. liczbę + string (napis) np. (`2 . "dwa"`), kropka to znak łączenia (konkatenacji)
5. wartość logiczną

Nazwy zmiennej mają być stworzone wg. wzoru `$var` i numer punktu zadania np. `$var1` lub `$var3`.  
Dodaj do każdej zmiennej komentarz z informacją jaki typ danych przechowuje ta zmienna, dodatkowo wypisz na stronie wartości tych zmiennych.  
Użyj funkcji `var_dump` aby poznać typ zmiennej

Przykład:
```php
//Ta zmienna przechowuje typ integer
$var8 = 23;
var_dump($var8);
echo $var8;
```

#### Zadanie 2
W pliku `zadanie2.php` stwórz trzy zmienne o nazwach `nr1, nr2, result`.

1. Dwie niech przechowują dowolne **liczby całkowite**
2. Jedna o nazwie `$result`, niech przechowuje liczbę `0`
3. Zapisz sumę (użyj znaku dodawania `+`) tych liczb w zmiennej `$result` i wypisz na stronie wynik.  
4. Zobacz jakiego typu jest zmienna `$result`.


#### Zadanie 3
W pliku `zadanie3.php` stwórz trzy zmienne o nazwach `nr1, nr2, result`.

1. Jedna (`nr1`) niech przechowuje dowolną **liczbę całkowitą**
2. Druga (`nr2`) dowolną **liczbę zmiennoprzecinkową**
3. Trzecia o nazwie `$result`, niech przechowuje liczbę `0`
4. Zapisz sumę tych liczb w zmiennej `$result` i wypisz na stronie wynik
5. Zobacz jakiego typu jest zmienna `$result` 

Napisz w komentarzu czym otrzymany wynik różni się od wyniku z zadania numer 2 (nie chodzi o różnicę matematyczną a związaną z programowaniem).

#### Zadanie 4
W pliku `zadanie4.php` stwórz zmienną `$someVariable` i **nic do niej nie przypisuj**.

1. Wypisz ją na stronie i sprawdź jej typ
2. Napisz w komentarzu co wyświetliło się na stronie

#### Zadanie 5
W pliku `zadanie5.php` stwórz zmienną o nazwie `$number` i zapisz do niej dowolną liczbę.

1. Stwórz dwie zmienne z napisami (stringami) tak jak podane poniżej:  
   
   ```php
   $string1 = "Mój ulubiony numer to: $number";
   $string2 = 'Mój ulubiony numer to: $number';
   ``` 
2. Wyświetl je na stronie.  
3. Zapisz w komentarzu czym się różnią wyświetlone napisy i dlaczego?
