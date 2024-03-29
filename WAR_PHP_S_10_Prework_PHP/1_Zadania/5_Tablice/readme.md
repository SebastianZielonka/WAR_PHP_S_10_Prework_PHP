<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Tablice

Pamiętaj aby rozwiązania do zadań umieszczać w odpowiednich plikach `php`, przygotowanych do zadań.  
Zadania dodatkowe nie są obowiązkowe do zaliczenia preworku, lecz postaraj się je wykonać.

#### Zadanie 1

W pliku `zadanie1.php`

1. Stwórz tablicę z **trzema** elementami np. z liczbami, zmienną z tablicą nazwij `onlyThree`
2. Następnie wypisz na stronie po kolei elementy tej tablicy rozdzielając je spacją.

#### Zadanie 2

W pliku `zadanie2.php` stwórz tablicę z listą swoich ulubionych owoców, zmienną z tablicą nazwij `fruits`.  

Następnie:

1. Wypisz **pierwszy** owoc na stronie wg. wzoru: `Pierwszy owoc to: truskawka`.
2. Wypisz **ostatni** owoc na stronie wg. wzoru: `Ostatni owoc to: malina` (skorzystaj z funkcji `count`).
3. W pętli wypisz wszystkie owoce **każdy w nowej linii** `<br>` (skorzystaj z funkcji `count`).

#### Zadanie 3

W pliku `zadanie3.php`

1. Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij `numbers`.
2. Stwórz zmienną  ```sum``` i przypisz do niej liczbę `0`
3. Za pomocą pętli ```for``` oblicz sumę liczb z tablicy.
4. Wypisz sumę na stronie wg. wzoru: `Suma elementów tablicy to: 381.`

#### Zadanie 4

W pliku `zadanie4.php`

1. Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij `numbers`.
2. W pętli ```for``` sprawdź, które są parzyste i wypisz je na stronie **jedna pod drugą** `<br>`.
3. Dodaj dodatkową zmienną `sumOdd` o wartości `0`.
4. Zmodyfikuj pętlę z pkt.1  w ten sposób aby **dodatkowo** sumowała liczby nieparzyste.
5. Wyświetl dodatkowo na stronie komunikat wg. wzoru: `Suma liczb nieparzystych to: 87.`


#### Zadanie 5

W pliku `zadanie5.php`

1. Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij `numbers`.
2. Stwórz zmienną  ```max``` i przypisz do niej `0`.
3. W pętli ```for``` znajdź liczbę, która jest największa, przypisz ją do zmiennej ```max``` i wypisz na stronie.
4. Aby to zrobić przeiteruj tablicę i sprawdź czy aktualny element jest większy o aktualnej wartości `max` i jeśli tak, zaktualizuj zmienną `max`.
5. Sprawdź czy Twój kod będzie działał poprawnie jeśli w tablicy znajdą się **tylko** liczby ujemne
6. Spróbuj zmodyfikować kod aby działał on uniwersalnie (podpowiedź: wystarczy zmodyfikować 1 linię kodu)

#### Zadanie 6

W pliku `zadanie6.php`

1. Stwórz tablicę z 10 dowolnymi liczbami, zmienną z tablicą nazwij `numbers`.
2. Wypisz ją od tyłu używając pętli ```for```, każdy element w nowej linii `<br>`.

#### Zadanie 7 - dodatkowe

W pliku `zadanie7.php`

1. Stwórz tablicę ze 100 losowymi liczbami z zakresu `0-20`, zmienną z tablicą nazwij `randNumbers`
2. Użyj do tego pętli `for` - do otrzymania losowej liczby możesz użyć funkcji `mt_rand()`
   Jak korzystać z tej funkcji możesz znaleźć w [dokumentacji][mt_rand]
3. Wypisz na stronie wylosowane liczby oddzielone od siebie przecinkiem `18,12,1,3...`
4. Oblicz sumę liczb z tablicy do zmiennej `sum`
5. Wypisz na stronie, w nowej linii, sumę wg. wzoru: `Suma 100 losowych liczb od 0 do 20 to: 876.`

#### Zadanie 8 - dodatkowe

W pliku `zadanie8.php`

1. Stwórz zmienną `$numberToFind`
2. Skopiuj z ćwiczenia 7 kod odpowiedzialny za generowanie tablicy `randNumbers`
3. Następnie wyszukaj **wszystkie** indeksy w tablicy z ćwiczenia dodatkowego 7, pod którymi znajduje się szukana przez Ciebie liczba
4. Indeksy zachowaj w dodatkowej tablicy o nazwie `$keys`
5. Aby to zrobić wystarczy przeiterować tablicę (przejść po każdym elemencie tablicy za pomocą pętli, np. `for`) i za każdym razem kiedy znajdziemy szukaną liczbę zapisać wartość zmiennej `$i` (zakładając, że tak nazywa się zmienna, która steruje pętlą `for`) w tablicy `$keys`. 
6. Aby dodać jakąś wartość na sam koniec tablicy możesz użyć operatora `[] =`, np:

```php
$myArr = [1,2,3,4];
var_dump($myArr); // => [1,2,3,4]

$myArr[] = 5;     // Dokładamy wartość 5 na sam koniec tablicy
var_dump($myArr); // => [1,2,3,4,5]
```

#### Zadanie 9 - dodatkowe

W pliku `zadanie9.php` znajduje się tablica `$capitals` z państwami i ich stolicami

1. Wypisz na stronie informację o państwie i jego stolicy wg. wzoru: `Capital of Poland is Warsaw.`

#### Zadanie 10 - dodatkowe

W pliku `zadanie10.php` znajduje się tablica z temperaturami.

1. Temperatura w tablicy zapisana jest w stopniach Celsjusza, zamień ją na stopnie Fahrenheit'a
   `tempCelc * 1.8 + 32`
2. Aby to zrobić przeiteruj tablicę i nadpisz dany indeks nową obliczoną wartością.
3. W zmienionej tablicy do zmiennej `avg` oblicz średnią temperaturę.
4. Wypisz ją na stronie wg. wzoru: `Średnia temperatura to: 3.95`, zaokrąglij liczbę do 2 miejsc po przecinku, użyj funkcji [number_format()][number_format]

#### Zadanie 11 - dodatkowe

W pliku `zadanie11.php`

1. Stwórz tablice o nazwach `tab1, tab2`, tablice **muszą** mieć różną ilość elementów, np. 8 i 3
2. Wypisz na stronie sumę elementów z większej tablicy ale tylko tych o indeksach, które nie znajdują się w tablicy pierwszej
3. Wzór tekstu na stronie `Suma elementów to: 54`
4. Kod ma działać zarówno jeśli pierwsza jak i druga tablica jest większa

Przykład:

```php
1) [4, 1, 98, 3, 3, 1, 34, 4];
2) [3, 90, 14]

//większa tablica to tablica nr 1
//jest ona większa o 5 elementów
//obliczamy więc sumę 5 ostatnich elementów tablicy nr 1
//3 + 3 + 1 + 34 + 4 = 45
```

<!-- Links -->
[mt_rand]: https://secure.php.net/manual/pl/function.mt-rand.php
[number_format]: http://php.net/manual/en/function.number-format.php
