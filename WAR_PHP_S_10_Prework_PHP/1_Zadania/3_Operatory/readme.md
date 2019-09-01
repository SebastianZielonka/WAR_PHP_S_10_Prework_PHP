<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Operatory

Pamiętaj aby rozwiązania do zadań umieszczać w odpowiednich plikach `php`, przygotowanych do zadań.  
Zadania dodatkowe nie są obowiązkowe do zaliczenia preworku, lecz postaraj się je wykonać.

#### Zadanie 1

W pliku `zadanie1.php` stwórz dwie zmienne o nazwach `first, second`.

1. Przypisz do nich dwie **różne** wartości logiczne jakie znasz. 
2. Porównaj je za pomocą operatora ```==```, a wynik porównania zapisz do trzeciej zmiennej `isFirstEqualSecond`.
3. Użyj `var_dump()` aby sprawdzić wynik.
4. Zmień wartość zmiennej `second` na przeciwną i ponownie sprawdź wynik.
5. Ustaw obie zmienne na wartość `false` i ponownie sprawdź wynik.
6. Napisz w komentarzu swoje spostrzeżenia.

#### Zadanie 2

W pliku `zadanie2.php` stwórz trzy zmienne o nazwach `nr1, nr2, resultModulo`.

1. Dwie niech przechowują dowolne liczby całkowite
2. Trzecia o nazwie ```$resultModulo``` niech przechowuje liczbę 0.
3. Oblicz resztę z dzielenia (`modulo`) tych liczb (`nr1 modulo nr2`) i zapisz wynik w zmiennej ```$resultModulo```
4. Wypisz zmienną ```$resultModulo``` na stronie.

Jeżeli nie do końca rozumiesz działanie operatora modulo, przećwicz to z innymi liczbami. 

#### Zadanie 3

W pliku `zadanie3.php` stwórz trzy zmienne o nazwach `str1, str2, joinedStrings`.

1. Dwie niech przechowują dowolne napisy (stringi)
2. Jedna o nazwie ```$joinedStrings```, niech przechowuje pusty string np. `$joinedStrings = '';`
3. Połącz stringi za pomocą konkatenacji (`.`) i zapisz wynik w zmiennej ```$joinedStrings```
4. Wypisz wynik na stronie.

#### Zadanie 4

W pliku `zadanie4.php` stwórz dwie zmienne:

 ```php
$myNumber = 4;
$myString = "4";
 ```

1. Porównaj te zmienne za pomocą operatorów ```==``` oraz ```===``` wyniki zapisując do zmiennych o nazwach `resultFirst, resultSecond`.
2. Wypisz wyniki na stronie.
3. Zapisz spostrzeżenia w komentarzu.
4. Wypisz wyniki na stronie, tym razem używając funkcji `var_dump()`, opisz różnicę między `echo` a `var_dump()` w komentarzu.

#### Zadanie 5

W pliku `zadanie5.php` stwórz zmienną o nazwie ```counter```, wstaw do niej liczbę `145`.

1. Wypisz jej wartość na stronie (w nowej linii `<br>`).
2. Za pomocą inkrementacji zwiększ wartość zmiennej ```counter```
3. Wypisz jej wartość na stronie (w nowej linii `<br>`).
4. Za pomocą dekrementacji zmniejsz wartość zmiennej ```counter```
5. Wypisz jej wartość na stronie (w nowej linii `<br>`).

#### Zadanie 6

W pliku `zadanie6.php` stwórz trzy zmienne o nazwach `nr1, nr2, result`.

1. Dwie niech przechowują dowolne liczby **całkowite**
2. Jedna o nazwie ```$result```, niech przechowuje wartość ```null```
3. Sprawdź czy liczba pierwsza jest większa od drugiej za pomocą odpowiedniego operatora i zapisz wynik w zmiennej ```$result``` jako wartość logiczna
4. Wypisz tą zmienną i jej typ na stronie, użyj `var_dump()`.

#### Zadanie 7 

W pliku `zadanie7.php` stwórz trzy zmienne o nazwach `nr1, nr2, result`.

1. Do zmiennych `nr1` i `nr2` przypisz liczby odpowiednio `7` i `4`.
2. Do zmiennej `result` przypisz ich sumę i wypisz ją na stronie.
3. Zmiennej `nr1` zmień wartość na `10` ale nie usuwając poprzedniego kodu, pisz w linijkach niżej.
4. Oblicz ponownie sumę do zmiennej `result`i wypisz na stronie.
5. Wynik nie jest taki sam jak w pkt 2, napisz w komentarzu, dlaczego tak się stało.

#### Zadanie 8 - dodatkowe

1. Przeczytaj czym dokładnie różni się od siebie luźna równość (`==`) i ścisła równość (`===`).  
   Dokładny opis możesz znaleźć [tutaj][comparison].  
2. Porównaj dwie tabelki, które znajdziesz na tej stronie.  
3. Opisz w komentarzu w pliku `zadanie8.php` czy znalazłeś w nich coś niezrozumiałego.

#### Zadanie 9 - dodatkowe

W pliku `zadanie9.php` wykonaj następujące czynności:

1. Zdefiniuj zmienną `x` o wartości `16`, oraz zmienną `y` o wartości `15`
2. Zdefiniuj zmienną `x_y`, która będzie przechowywać **wartość logiczną** porównania czy `x < y`
3. Zdefiniuj zmienną `t` o wartości logicznej prawdy, oraz zmienną `f` o wartości logicznej fałszu.
4. Zdefiniuj zmienną `t_f`, która będzie przechowywać **wartość logiczną** porównania `t LUB f`
5. Zdefiniuj zmienną `last`, która będzie przechowywać **wartość logiczną** porównania `x_y i t_f`
6. Sprawdź czy wynik w zmiennej `last` jest zgodny z oczekiwanym `false`.

<!-- Links -->
[comparison]: http://php.net/manual/en/types.comparisons.php
