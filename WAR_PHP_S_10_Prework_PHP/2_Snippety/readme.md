<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# PHP Prework - Snippety
> Krótkie kawałki kodu, które pokazują zależności, rozwiązują popularne problemy oraz pokazują jak używać niektórych funkcji.


#### 1. Dlaczego pliki z kodem `php` muszą mieć rozszerzenie `.php`?

Dzieje się tak, ponieważ serwer w standardowej konfiguracji ustawiony jest aby jedynie pliki o rozszerzeniu `.php` przesyłał do interpretera.  
Nie oznacza to, że nie można ustawić rozszerzenia np. `.dog` aby takie pliki były interpretowane jako `php`, nie jest to natomiast dobra praktyka.

#### 2. Jakie zasady zachowujemy przy tworzeniu zmiennych?

Nazwy zmiennych powinny rozpoczynać się od litery `[a-zA-Z]` lub znaku podkreślenia `_` a zawierać dodatkowo mogą cyfry `[0-9]`.  
Pamiętamy aby nazwy były opisowe.

#### 3. Jak może wyglądać plik `php` w połączeniu z `html` oraz bez?

Przykładowy plik zawierający **tylko** kod `php`:  

```php
<?php
//our code
```

Jeśli plik zawiera **tylko** kod `php` nie musimy używać tagu zamykającego `?>`

Przykładowy plik zawierający kod `php` oraz `html`:

```php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= 'Example title'; ?></title>
</head>
<body>
<?php
//our code
?>
</body>
</html>
```

W tym pliku zamy zarówno kod `html`, kod `php`, który zawiera się między tagami `<?php` i `?>` oraz specjalny tag `php` `<?=`, dzięki któremu treść zostanie wypisana od razu na stronie jak z użyciem funkcji `echo`

#### 4. Czy są inne tagi otwierające tryb `php`?

Tak, możesz spotkać się z tagami wyglądającymi następująco `<?` i `?>`, są to tak zwane "short tags", nie powinno się ich używać, ponieważ niektóre serwery mają wyłączone ich obsługę i plik nie zostanie prawidłowo zinterpretowany.

#### 5. Jakie są rodzaje komentarzy w `php`?

```php
//komentarz jedno linijkowy

#komentarz jedno linijkowy

/**
 * komentarz
 * wielo 
 * linijkowy
 */

```

#### 6. Jak sprawdzić jakiego typu jest zmienna?

Najlepiej użyć funkcji `var_dump()`, przekazując jako argument zmienną lub wartość.

#### 7. Jak w stringu dodać zmienną?

Aby zmienna została zinterpretowana i zamieniona na swoją wartość używamy jako ogranicznika stringu `", w przypadku użycia `'` string jest traktowany dosłownie i nazwy zmiennych nie są zamieniane na wartości.  
Możemy także dodać kilka zmiennych do stringów, zobacz poniższy przykład z dwoma spobami umieszczania zmiennych:  

```php
$name = 'Marek';
$age = '25';

echo 'Mam na imię ' . $name .' i mam ' .$age . ' lat.';
echo "Mam na imię $name i mam $age lat.";

//można również oba sposoby wymieszać
echo "Mam na imię $name".' i mam ' . $age . " lat.";
```

#### 8. Jak prawidłowo obliczać modulo (resztę z dzielenia)?

Najprościej zrozumieć jak działa modulo na przykładzie koszyka z jabłkami.

Obliczmy `12 % 4` (czytamy 12 modulo 4 a nie 12 modulo z 4):

```
Mamy 12 jabłek i chcemy je podzielić każdemu PO 4

Dajemy Markowi 4 jabłka, zostaje nam 8
Dajemy Jurkowi 4 jabłka, zostaje nam 4
Dajemy Tomkowi 4 jabłka, zostaje nam 0 

Nie mamy wystarczającej liczby jabłek aby dać kolejnej osobie 4 jabłka.
Nie pozostało nam ani jedno jabło więc nasza reszta z dzielenia to 0.
```

Obliczmy `11 % 3`:

```
Mamy 14 jabłek i chcemy je podzielić każdemu PO 3

Dajemy Markowi 3 jabłka, zostaje nam 8
Dajemy Jurkowi 3 jabłka, zostaje nam 5
Dajemy Tomkowi 3 jabłka, zostaje nam 2 

Nie mamy wystarczającej liczby jabłek aby dać kolejnej osobie 3 jabłka.
Pozostały nam 2 jabłka więc nasza reszta z dzielenia to 2.
```

Obliczmy `3 % 7`:

```
Mamy 3 jabłka i chcemy je podzielić każdemu PO 7

Nie mamy wystarczającej liczby jabłek aby dać Markowi 7 jabłek.
Pozostały nam 3 jabłka więc nasza reszta z dzielenia to 3.
```

Obliczmy `2 % 8`:

```
Mamy 32 jabłka i chcemy je podzielić każdemu PO 8

Nie mamy wystarczającej liczby jabłek aby dać Markowi 8 jabłek.
Pozostały nam 2 jabłka więc nasza reszta z dzielenia to 2.
```

#### 9. Jakie formy może przyjąć funkcja warunkowa `if` `else`?

1. Sama funkcja `if`
   ```php
   if ($number > 5) {
       echo 'ok';
   }
   ```
   
2. Funkcja `if` z `else`
   ```php
   if ($number > 5) {
       echo 'ok';
   } else {
       echo 'not ok';
   }
   ```   

3. Funkcja `if` z `elseif`
   ```php
   if ($number > 5) {
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   }
   ```   
   
4. Funkcja `if` z `elseif` i `else`
   ```php
   if( $number > 5 ){
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   } else {
       echo 'not ok';
   }
   ```   
   
5. Funkcja `if` z wieloma `elseif` i `else`
   ```php
   if( $number > 5 ){
       echo 'ok';
   } elseif ($number > 3) {
       echo 'also ok';
   } elseif ($number > 1) {
       echo 'another ok';
   } else {
       echo 'not ok';
   }
   ```  
#### 10. Czy w `switch` można stosować wyrażenia warunkowe?

Tak, oto przykład

```php
switch($number){
    case ($number > 5):
        echo '>5';
    break;
    case ($number > 3);
        echo '>3';
    break;
}
```

#### 11. W jaki sposób użyć `break` do zatrzymania pętli przed warunkiem stopu?

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    if ($i % 4 === 0){ //jeśli ten warunek zostanie spełniony
        break; //break przerwie pętlę for
    }
}
```

`break` może też przyjmować liczbę przy wywołaniu, która mówi ile zagnieżdżonych struktur ma zostać przerwanych.  
Dla przykładu 2 wersje kodu z zagnieżdżonym `for`.  

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    for ($j = 0; $j < 500; $j++) {
        echo $j . '<br>';
        if ($j % 4 === 0){ //jeśli ten warunek zostanie spełniony
            break; //break przerwie pętlę for ale domyślnie tylko najbliższą, więc tą ze zmienną $i
        }
    }
}
```

```php
for ($i = 0; $i < 500; $i++) {
    echo $i . '<br>';
    for ($j = 0; $j < 500; $j++) {
        echo $j . '<br>';
        if ($j % 4 === 0){ //jeśli ten warunek zostanie spełniony
            break 2; //break przerwie pętlę for ale liczba 2 definiuje, aby php poszukało czy wyżej (w sumie 2) znajduje się jakaś pętla i również ją zatrzymało
        }
    }
}
```

#### 12. Czy można wywołać pętlę `for` bez wszystkich 3 parametrów?

Tak, nic nie stoi na przeszkodzie aby pominąć np. warunek stopu:

```php
for ($i=0; ; $i++){
    //...
}
```

Taka pętla domyślnie będzie nieskończona, ponieważ nie ma warunku, który ją zatrzyma, oznacza to,  
iż w bloku pętli musimy dopisać warunek, który skorzysta z `break` i zatrzyma pętlę.  

Analogicznie sytuacja wygląda z pozostałymi argumentami, w skrajnym przypadku pętla może wyglądać tak:

```php
for (;;){
    //...
}
```

Taka pętla, również jest nieskończona, a ewentualny warunek stopu oraz zmianę po pojedynczej iteracji musimy wykonać bezpośrednio w bloku pętli.


#### 13. Jak przeiterować po elementach tablicy?

Uniwersalną pętlą do iteracji jest `foreach`:

```php
<?php
foreach ($tab as $key => $val) {
    //$key - klucz (indeks) z tablicy
    //$val - wartość z tablicy
}
?>
```

#### 14. Jak pobrać ostatni i pierwszy element z tablicy?

```php
$arr = [1, 3, 5, 7, 9];

$first = $arr[0];//pobieramy ALE NIE USUWAMY pierwszego elementu z tablicy
$first = array_shift($arr);//pobieramy I USUWAMY pierwszy element z tablicy

$lastKey = count($arr) - 1;
$last = $arr[$lastKey];//pobieramy ALE NIE USUWAMY pierwszego elementu z tablicy
$last = array_pop($arr);//pobieramy I USUWAMY pierwszy element z tablicy
```

#### 15. Jak sprawdzić czy dany element znajduje się w tablicy?

```php
$array = [1, 4, 12, 3, 15];
$toSearch = 15;

$isInIt = in_array($toSearch, $array);// zwraca wartość logiczną
```

Więcej funkcji związanych z tablicami i stringami poznacie w pierwszym tygodniu zajęć.
