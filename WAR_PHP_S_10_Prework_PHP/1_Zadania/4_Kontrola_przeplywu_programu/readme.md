<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  PHP Prework - Kontrola przepływu programu

Pamiętaj aby rozwiązania do zadań umieszczać w odpowiednich plikach `php`, przygotowanych do zadań.  
Zadania dodatkowe nie są obowiązkowe do zaliczenia preworku, lecz postaraj się je wykonać.

#### Zadanie 1

1. W pliku `zadanie1.php` stwórz dwie zmienne, o nazwach `nr1, nr2`, przechowujące liczby całkowite.
2. Następnie za pomocą instrukcji warunkowej ```if ... else ```, wypisz na stronie, która z nich jest większa.
3. Wypisany string ma być wg. wzoru. `Większa liczba to 7.`

#### Zadanie 2

1. W pliku `zadanie2.php` stwórz trzy zmienne, o nazwach `nr1, nr2, nr3` , przechowujące liczby całkowite.
2. Następnie za pomocą instrukcji warunkowej `if ... elseif ... else`, wypisz na stronie, która z nich jest największa.
3. Wypisany string ma być wg. wzoru `Największa z liczb 7,2,11 to 11.`

#### Zadanie 3

1. W pliku `zadanie3.php` stwórz pętle, która 10 razy wypisze na stronie tekst "Lubię PHP".
2. Napisz zarówno pętle `for` jak i pętlę `while`.
3. W sumie na stronie napis będzie widoczny 20 razy.

#### Zadanie 4

1. W pliku `zadanie4.php` stwórz pętle, która wypisze na stronie liczby od 1 do 100, jedna w jednej linii (`<br>`).
2. Napisz zarówno pętle `for` jak i pętlę `while`.
3. W sumie na stronie będzie wypisane 200 liczb.

#### Zadanie 5

1. W pliku `zadanie5.php` stwórz zmienną `$resultFor` oraz `$resultWhile` i przypisz do nich liczbę `0`.
2. Następnie stwórz pętle, która doda do siebie liczby od 1 do 10 i zapisze do zmiennej `$resultFor` lub `$resultWhile`.
3. Pętla powinna co uruchomienie (zwaną także iteracją pętli) dodawać do zmiennej `$resultFor` lub `$resultWhile` kolejną liczbę z podanego zakresu.
4. Napisz zarówno pętle `for` jak i pętlę `while`.

#### Zadanie 6

1. W pliku `zadanie6.php` napisz kod, który na podstawie wartości zmiennej np. `$n = 5;` wypisuje wszystkie liczby od zera do **n**.
Przy każdej liczbie wypisz, czy  liczba jest parzysta czy nie.  

Wzór:

```php
0 – parzysta
1 – nieparzysta
2 – parzysta
3 – nieparzysta
...
```

Zmień wartość zmiennej `$n` i uruchom stronę.
Napisz zarówno pętle `for` jak i pętlę `while`.

*Podpowiedź: Jak sprawdzić czy liczba jest parzysta lub nieparzysta? Wystarczy obliczyć jej resztę z dzielenia przez `2`, jeżeli wynik to 0, wtedy liczba jest parzysta, w przeciwnym przypadku jest nieparzysta.*

#### Zadanie 7

1. W pliku `zadanie7.php` stwórz dwie zagnieżdżone pętle niezależne i wypisz wartości ich liczników w każdej iteracji. 
2. Wykorzystaj np.```echo("i= $i, j= $j");```
3. Zadanie rozwiąż używając dwóch pętli `for`.

#### Zadanie 8

W pliku `zadanie8.php`, jest napisany skrypt, który wypisuje w konsoli
schemat z `n` gwiazdek, taki jak poniżej.  
Przeanalizuj go bardzo dokładnie.
Przykład dla  ```$n = 5```:

```php
* * * * *

* * * * *

* * * * *

* * * * *

* * * * *
```

Używamy do tego zadania pętli zagnieżdżonych! 

#### Zadanie 9

W pliku `zadanie9.php` napisz skrypt rysujący na podstawie wartości zmiennej `n` następujący schemat:

dla `$n = 5`

```php
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
```

dla `$n = 3`  

```php
* 2 3
* * 3
* * *
```

Do stworzenia takiego zapisu w środku zagnieżdżonej pętli użyj wyrażenia warunkowego `if` dzięki któremu zdecydujesz czy wypisać gwiazdkę czy licznik z zagnieżdżonej pętli. 

#### Zadanie 10

W pliku `zadanie10.php` napisz skrypt rysujący na podstawie wartości zmiennej `n` następujący schemat (tutaj dla ```$n = 5```).  
Użyj do tego pętli zagnieżdżonych.

```php
*
* *
* * *
* * * *
* * * * *
```

Możesz to zadanie rozwiązać na dwa sposoby:
1. używając pętli zależnych.
2. używając pętli niezależnych i instrukcji warunkowej `if`.

*Wzoruj się na poprzednich zadaniach. Trzeba tutaj trochę pomyśleć i rozumieć pętle zagnieżdżone.*


#### Zadanie 11 

W pliku `zadanie11.php` napisz skrypt rysujący na podstawie wartości zmiennej `n` następujący schemat (tutaj dla ```n = 5```):

```php
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5
```

Do stworzenia takiego zapisu w środku zagnieżdżonej pętli użyj wyrażenia warunkowego `if` dzięki któremu zdecydujesz czy wypisać gwiazdkę czy licznik z zagnieżdżonej pętli. 

#### Zadanie 12 - dodatkowe

1. W pliku `zadanie12.php` napisz skrypt definiujący trzy liczby w zmiennych: `a, b, c`.
2. Skrypt ma sprawdzić, czy podane liczby mogą być bokami trójkąta.
3. Tę figurę geometryczną można zbudować z trzech linii tylko wtedy, gdy suma długości dwóch z nich jest większa niż długość trzeciej linii, czyli:

```php
a + b > c
c + b > a
a + c > b
```

Po sprawdzeniu wypisz na stronie informację wg. wzoru:  
  
`Z podanych boków można zbudować trójkąt.`  
  
lub  

`Z podanych boków nie można zbudować trójkąta.`

#### Zadanie 13 - dodatkowe

W pliku `zadanie13.php` napisz skrypt, który wystawi ocenę z testu.

* `0 - 39` pkt - ocena niedostateczna 
* `40 - 54` pkt - ocena dopuszczająca 
* `55 - 69` pkt - ocena dostateczna 
* `70 - 84` pkt - ocena dobra 
* `85 - 98` pkt - ocena bardzo dobra 
* `99 - 100` pkt - ocena celująca

1. Stwórz zmienną `points`, do której będzie przypisany wynik z testu.
2. Na początku sprawdź czy ilość punktów jest większa bądź równa `0`, jeśli nie wypisz na stronie komunikat `Ilość punktów mniejsza niż 0.`
3. Na początku sprawdź czy ilość punktów jest mniejsza bądź równa `100`, jeśli nie wypisz na stronie komunikat `Ilość punktów większa niż 100.`
4. Następnie sprawdź jaka ocena odpowiada danej ilości punktów i wypisz ją na stronie wg. wzoru `Wynik: ocena dobra`
5. Rozwiąż to zadanie używając raz konstrukcji `if ... elseif ... else` a drugi raz używając konstrukcji `switch`. 

#### Zadanie 14 - dodatkowe

W pliku `zadanie14.php` napisz skrypt tworzący tabliczkę mnożenia dla podanej zmiennej `n`. Na przykład dla ```$n = 3``` wynik będzie następujący:

<table>
  <tr>
    <td>1 x 1 = 1</td>
    <td>1 x 2 = 2</td>
    <td>1 x 3 = 3</td>
  </tr>
  <tr>
    <td>2 x 1 = 2</td>
    <td>2 x 2 = 4</td>
    <td>2 x 3 = 6</td>
  </tr>
  <tr>
    <td>3 x 1 = 3</td>
    <td>3 x 2 = 6</td>
    <td>3 x 3 = 9</td>
  </tr>
</table>


Do mnożenia liczb użyj operatora `*`.  
Do formatowania tabelki użyj `html` i `css`.
Pamiętaj aby dodać spację pomiędzy liczbami i `x` oraz `=`.

#### Zadanie 15 - dodatkowe

W pliku `zadanie15.php`  

1. Napisz skrypt liczący wartość `x!`, gdzie `!` oznacza silnię, a `x` jest zmienną.  
2. Użyj do tego obu znanych Ci pętli.
3. Silnia ma być zapisana do zmiennej `factorial`.
4. Po wyliczeniu silni wyświetl na stronie komunikat wg. wzoru: `Silnia 3! to 6.`

Silnia to wynik mnożenia wszystkich liczb całkowitych od jeden do podanej liczby włącznie, czyli:

```php
5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 40320
```

#### Zadanie 16 - dodatkowe

W pliku `zadanie16.php`  

1. Dodaj 2 zmiennej `x` i `y` będące dodatnimi liczbami całkowitymi.
2. Napisz skrypt wyliczający największy wspólny dzielnik (greatest common divisor - GDC) dwóch liczb.
3. Skorzystaj z opisu na tej [stronie][GDC].
4. Wynik wyświetl na stronie wraz z liczbami dla których został wyliczony wg. wzoru `Dla liczb 420 i 168 GDC to: 84`.

<!-- Links -->
[GDC]: http://www.programming-algorithms.net/article/43434/Greatest-common-divisor
