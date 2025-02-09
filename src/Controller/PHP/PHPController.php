<?php

namespace App\Controller\PHP;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PHPController.
 */
#[Route('/')]
class PHPController extends AbstractController
{
    public const NAME = 'TARAS'; // константа в класі

    #[Route('/index')]
    public function index(): Response
    {
        $title = 'Default page';

        return $this->render('default/index.html.twig', [
            'title' => $title,
        ]);
    }

    #[Route('/php')]
    public function php(): Response
    {
        // https://www.youtube.com/playlist?list=PLuY6eeDuleIN_pFzp1vlu0PD3KXUrPTVS
        // PHP - Hypertext Preprocessor
        // серверна мова програмування
        $title = 'Hello Symfony 6 & PHP 8!';

        echo 'Hello Symfony 6 & PHP 8!<br>';
        // ';' - означає кінець рядку у PHP
        echo 'Поточна дата і час: '.date(DATE_RSS); // поточна дата і час
        // php & html tag
        if (rand(0, 1)) {
            ?>
            <div style="color: blue">Синій колір</div>
            <?php
        } else {
            ?>
            <div style="color: red">Червоний колір</div>
            <?php
        }

        // added tags to php
        echo '<br>1 Hello <b>Symfony 6</b> & <b>PHP 8</b>!'; // added html tags
        echo '<br>2 Hello <b>Symfony 6</b> & <b>PHP 8</b>!'; // added html tags
        echo '<br>3 Hello "<b>Symfony 6</b> & <b>PHP 8</b>"!'; // added ""
        echo '<br>4 Hello \'<b>Symfony 6</b> & <b>PHP 8</b>\'!<br>'; // added ''
        echo "<br>5 Hello '<b>Symfony 6</b> & <b>PHP 8</b>'!<br>";
        $var1 = 6;
        $var2 = 8;
        echo "<br>6 Hello '<b>Symfony $var1</b> & <b>PHP $var2</b>'!<br>";
        echo "<br>7 Hello \"<b>Symfony $var1</b> & <b>PHP $var2</b>\"!<br>"; // екроновані двійні кавички
        $var = 100;
        echo "8 Hello world! {$var}9".'<br>';
        //        echo `dir`; # керування командами із операційної системи

        // Comment - не возпринімається копілятором PHP (однорядковий коментарій)
        // Comment (однорядковий коментарій)
        /*
            (багаторядковий коментарій)
            Comment 1
            Comment 2
            Comment 3
         */

        // Include another file php
        echo '<br><br><b>Include another file php</b>-------------------------------------------<br>';
        echo 'Головний скрипт<br>';
        //        include 'file.php';
        // or
        //        require 'file.php';
        echo 'Головний скрипт<br>';

        echo '<br><br><b>Variables</b>-------------------------------------------<br>';
        // PHP supports eight simple data types (variables)
        // $a змінна це ячейка памяті на PHP
        // слабо типізована мова
        // integer - 5
        // float - 5.15
        // boolean - true / false (двійковий тип даних)
        // sting - 'string' рядковий тип даних
        // array - [1,2,3] - масив значень
        // NULL - "пустий" тип даних

        $var1 = $var2 = $var3 = 3; // int
        echo 'var1 = '.$var1.'<br>'; // 3
        echo 'var2 = '.$var2.'<br>'; // 3
        echo 'var3 = '.$var3.'<br>'; // 3

        echo '<br><br><b>Integers & real numbers</b>-------------------------------------------<br>';
        $a = 1234; // integer type  data змінна $a ініціалізована(присвоєна) значенням 5
        $b = -12; // -12
        echo 'a = '.$a.'<br>'; // 1234
        echo 'b = '.$b.'<br>'; // -12
        // fload or double
        // експонентальна форма запису
        $c = 1.2345e-3; // 0.0012345
        echo '1.2345*10^-3   = '.$c.'<br>';
        $d = 1.2345e+3; // 1234.5
        echo '1.2345*10^3   = '.$d.'<br>';

        echo '<br><br><b>Boolean & string type data</b>-------------------------------------------<br>';
        // == - оператор, який перевіряє еквівалентність і повертає бульова значення
        echo 'Boolean type (true or false)<br>';
        $bool = true;  // присвоєння булевій змінні значення - true

        if (true == $bool) {
            echo '$bool == true';
        } else {
            echo '$bool == false';
        }
        echo '<br>';
        if ($bool) {
            echo '$bool == true';
        } else {
            echo '$bool == false';
        }
        echo '<br>';

        echo '<br><br><b>Null - type data</b>-------------------------------------------<br>';
        $var = null; // їй присвоєно константа NULL
        echo (is_null($var)) ? '$var = NULL' : '$var != NULL';
        echo '<br>';
        $var = 1; // їй присвоєно значення - 1
        echo (is_null($var)) ? '$var = NULL' : '$var != NULL';
        echo '<br>';

        $str = '<br>Hello <b>Symfony 6</b> & <b>PHP 8</b><br>';
        echo $str.' a:'.$a.' b:'.$b.'<br>'; // Hello Symfony 6 & PHP 8 a:1234 b:-12
        $e = 0.5;
        $f = '0.5';
        echo $e + floatval($f).'<br>'; // 1 - не строга тіпізація

        echo '<br><br><b>Basic functions</b>-------------------------------------------<br>';
        $user = 'Taras';
        // перевірка на існування значення у змінної(чи інацілізована змінна)
        echo (isset($user)) ? 'Змінна існує<br>' : 'Змінна не існує<br>';

        echo (isset($user2)) ? 'Змінна існує<br>' : 'Змінна не існує<br>';

        $str = '';
        // перевірка чи є якийсь текст в рядку
        echo (empty($str)) ? 'Рядок пустий<br>' : 'Рядок не пустий<br>';
        $str = 'Symfony 6';
        // перевірка чи є якийсь текст в рядку
        echo (empty($str)) ? 'Рядок пустий<br>' : 'Рядок не пустий<br>';

        // дізнатися тип змінної
        echo gettype(123).'<br>'; // integer
        echo gettype(1.23).'<br>'; // double
        echo gettype(true).'<br>'; // boolean
        echo gettype('string').'<br>';
        echo gettype([1, 2, 3, 'string']).'<br>';

        // перевірка числа що це цілий тип даних
        echo (is_int(1)) ? 'Це ціле число<br>' : 'Це не ціле число<br>';
        echo (is_int(1.25)) ? 'Це ціле число<br>' : 'Це не ціле число<br>';

        echo '<br><br><b>Explicit and implicit type casting</b>-------------------------------------------<br>';
        $str = '42.3';
        echo $number = $str - 20.3.'<br>'; // 22
        //        $a = 0.0; #false
        //        $a = 0; #false
        //        $a = ''; #false
        $a = 'str'; // true
        echo ($a) ? "Змінна {$a} розглядається як true <br>" : "Змінна {$a} розглядається як false<br>";

        echo true.'<br>'; // 1
        echo false.'<br>'; // 0

        $float = 4.3;
        echo (int) $float.'<br>'; // 4

        $num = 24;
        echo ((float) ($num / 2) - (int) ($num / 2)) ? 'Число не парне<br>' : 'Число парне<br>';

        echo '<br><br><b>Rounding numbers</b>-------------------------------------------<br>';
        // is_numeric - перевірка елемента чи є воно числом чи ні
        $numbers = ['42', 1337, 0x539, 02471, 0b10100111001, 1337e0, '0x539', '02471', '0b10100111001', '1337e0', 'not numeric', [], 9.1, null];
        foreach ($numbers as $element) {
            if (is_numeric($element)) {
                echo var_export($element, true).' -  число', PHP_EOL.'<br>';
            } else {
                echo var_export($element, true).' - НЕ число', PHP_EOL.'<br>';
            }
        }

        // вбудовані матиматичні функ5ції
        echo abs(-22).'<br>'; // 22 - число по модулю
        echo ceil(3.1).'<br>'; // 4 - округлення до більшого
        echo floor(3.9).'<br>'; // 3 - округлення до меншого
        // round - округлення дробових чисел
        echo round(3.1).'<br>'; // 3 - округлення до меншого
        echo round(3.9).'<br>'; // 4 - округлення до більшого
        echo round(31.2493741, 2).'<br>'; // 31.25 - виведеться два числа після крапки

        echo mt_rand(0, 100).'<br>'; // випадкове число від 0 до 100
        echo min(100, 1, 23, 3, 17, 45, 30).'<br>'; // 1 - мінімальне число із даних чисел
        echo max(100, 1, 23, 3, 17, 45, 30).'<br>'; // 100 - максимальне число із даних чисел

        echo '<br><br><b>PHP OOP</b>-------------------------------------------<br>';
        //        require 'Point.php';
        $point1 = new Point(); // в змінну $point1 ми поміщаємо обєкт класу Point
        $point1->setX(13);
        $point1->setY(2);
        echo 'X: '.$point1->getX().'<br>';
        echo 'Y: '.$point1->getY().'<br>';

        $point2 = new Point(); // в змінну $point2 ми поміщаємо обєкт класу Point
        $point1->setX(30); // змінній класу присвоюємо значення
        $point1->setY(12);
        echo 'X: '.$point1->getX().'<br>'; // X: 30
        echo 'Y: '.$point1->getY().'<br>'; // Y: 12
        // два обєкта $point1 і $point2 по подобію одного класу Point
        // видалення обєктів
        unset($point1);
        unset($point2);

        // область видимості змінних класу
        $point3 = new Point(); // в змінну $point3 ми поміщаємо обєкт класу Point
        $point3->a = 10; //  публічній змінній класу присвоюємо значення
        $point3->b = 15;
        echo 'A: '.$point3->a.'<br>'; // A: 10
        echo 'B: '.$point3->b.'<br>'; // B: 15
        // два обєкта $point1 і $point2 по подобію одного класу Point
        // видалення обєкта $point3
        unset($point3);

        // звернення до статичної змінної без створення обєкту цього класу
        echo 'D: '.Point::$d.'<br>'; // D: 120

        $first = $second = 2;
        $first = 3;
        echo 'first: '.$first.'<br>'; // first: 3
        echo 'second: '.$second.'<br>'; // second: 2

        $first = new Point();
        $first->a = 3;
        $first->b = 3;
        echo "x: {$first->a} y: {$first->b}<br>"; // x: 3 y: 3

        // вказуємо просто посилання на обєкт
        $second = $first; // один і той же обєкт
        $second->a = 5;
        $second->b = 5;
        // якщо міняється другий обєкт то і меняється перший обєкт
        echo "x: {$first->a} y: {$first->b}<br>"; // x: 5 y: 5
        echo "x: {$second->a} y: {$second->b}<br>"; // x: 5 y: 5
        // видалення обєктів
        unset($first);
        unset($second);

        $first = 5;
        // вказуємо просто посилання на змінну
        $second = &$first;
        $second = 7;
        echo "first: {$first} second: {$second}<br>"; // first: 7 second: 7

        $first = new Point();
        $first->setX(3);
        $first->setY(3);
        echo "x: {$first->getX()} y: {$first->getY()}<br>"; // x: 3 y: 3

        // clone - клонування обєкту
        $second = clone $first;
        $second->setX(9);
        $second->setY(7);
        echo "x: {$second->getX()} y: {$second->getY()}<br>"; // x: 9 y: 7

        echo '<br><br><b>Constants</b>-------------------------------------------<br>';
        // константа - її перевага в тому що вона не може змінюватися під час виконання скрипту.
        // константа - не може приймати значення null

        define('MY_FIRST_NAME', 'Taras');
        define('MY_LAST_NAME', 'Moroz');
        define('AGO', 36);
        echo MY_LAST_NAME.' '.MY_FIRST_NAME.' '.AGO.'<br>';

        echo (define('NAME', 'Taras')) ? 'Константа NAME створена і має значення Taras<br>' : 'Не можливо створити константу NAME із значенням Taras<br>';
        // error -  повторне створення константи не можливо
        //        echo (define('NAME','Taras M'))? 'Константа NAME створена і має значення Taras M<br>':'Не можливо створити константу NAME із значенням Taras M<br>';
        // пепевірка на існування константи
        //        echo (!define('NAME','Taras'))? 'Константа NAME уже створено<br>':'Константа NAME ще не створено<br>';
        // defined - пепевірка на існування константи з вказаним імям
        echo (defined('NAME')) ? 'Константа NAME уже створено<br>' : 'Константа NAME ще не створено<br>';

        // виведення динамічної імя константи. Динамічне присвоєння значення
        $num = mt_rand(1, 10);
        $name = "VALUE($num)";
        define($name, $num);
        echo constant($name).'<br>'; // виведення динамічної константи.

        // стандартні константи
        // показую каталог і назву файлу
        echo 'Імя файлу: '.__FILE__.'<br>';
        // номер рядку з відки визвано константа
        echo 'Рядок №: '.__LINE__.'<br>';
        // абсолютний шлях до каталогу де лежить файл
        echo 'Шлях до файлу: '.__DIR__.'<br>';
        // require_once - дозволяє(перевіряє) тільки раз підключити вказаний файл/скрипт
        // require - дозволяє підключити вказаний файл скільки завгодно раз
        //        require_once __DIR__.'/file.php';
        // __DIR__ - абсолютний шлях до папки або файлу
        // ../file.php - відносний шлях
        echo (PHPController::NAME) ? 'Змінна NAME ініціалізована<br>' : 'Змінна NAME  не ініціалізована<br>';
        echo (defined('DefaultController::NAME')) ? 'Константа оприділена<br>' : 'Константа не оприділена<br>';

        echo '<br><br><b>Concatenation</b>-------------------------------------------<br>';
        // конкатинація - обєднання декілька рядків шляхом їх обєднання.
        $num = 7;
        $num .= '+5'; // $num = $num.'+5'
        echo 'Виведення на екран числа '.$num.'<br>';
        $firstName = 'Taras';
        $lastName = 'Moroz';
        $ago = 36;
        echo $firstName.' '.$lastName.' '.$ago.'<br>';

        echo '<br><br><b>Mathematical/Arithmetic operations</b>-------------------------------------------<br>';
        $x = 10;
        $y = 20;
        echo $x + $y.'<br>'; // 30
        echo $x - $y.'<br>'; // -10
        echo $x * $y.'<br>'; // 200
        echo $x / $y.'<br>'; // 0.5
        echo $x % $y.'<br>'; // 10 - залишок при діленні

        $num = 10;
        $num .= $var; // $num = $num . $var
        $num += $var; // $num = $num + $var
        $num -= $var; // $num = $num - $var
        $num *= $var; // $num = $num * $var
        $num /= $var; // $num = $num / $var
        $num %= $var; // $num = $num % $var
        $num **= $var; // $num = $num ** $var
        ++$num; // $num = $num + 1
        ++$num; // $num = $num + 1

        // унарні і бінарні оператори
        // бінарна операція
        $num += $var;
        // унарна операрці
        ++$num;
        --$num;
        echo '16**0.5 = ';
        echo (16 ** 0.5).'<br>';

        // $var++ - посфіксний запис
        // ++$var - префіксний запис
        $var = 3;
        echo 'var = '.$var.'<br>'; // var = 3
        echo 'var = '.$var++.'<br>'; // var = 3 - показує своє старе значення змінної і збільльшується на 1
        ++$var; // збільшується на 1 і одразу показує нове значення.
        echo 'var = '.$var.'<br>'; // var = 5 - показує уже остаточне значення.

        $res = 4 ** 2; // 4 у 2-ій степені
        echo '4 у 2-ій степені = '.$res.'<br>';
        $x = 11;
        $y = 3;
        echo '11 % 3 = '.$x % $y.'<br>'; // 2 - залишок при діленні
        echo '11 / 3 = '.(int) ($x / $y).'<br>'; // 3 - переобразування у ціле число

        echo '(8%2) : ';
        echo (8 % 2) ? 'Число не парне<br>' : 'Число парне<br>';
        echo '(9%2) : ';
        echo (9 % 2) ? 'Число не парне<br>' : 'Число парне<br>';

        $x += 10; // $x = $x + 10
        echo 'x: '.$x.'<br>'; // 20
        $y -= 5; // $y = $y - 5
        echo 'y: '.$y.'<br>'; // 15
        ++$x; // $x +=1; or $x = $x + 1 - інкремент
        --$y; // $y -=1; or $x = $x - 1 - декремент
        echo 'x: '.$x.'<br>'; // 21
        echo 'y: '.$y.'<br>'; // 14

        // вбудовані константи
        echo 'pi: '.M_PI.'<br>'; // pi: 3.1415926535898
        echo 'e: '.M_E.'<br>'; // e: 2.718281828459

        echo '2^8 = '.pow(2, 8).'<br>'; // 256
        echo 'sqrt(16) = '.sqrt(16).'<br>'; // 4

        $p1 = new Point();
        $p1->setX(10);
        $p1->setY(34);

        $p2 = new Point();
        $p2->setX(3);
        $p2->setY(10);

        // обрахунок відстані між двома точками.
        $distance = sqrt(pow($p2->getX() - $p1->getX(), 2) + pow($p2->getY() - $p1->getY(), 2));
        echo 'distance x & y : '.$distance.'<br>'; // 25

        echo '<br><br><b>String operations</b>-------------------------------------------<br>';
        $str = 'Hello';
        echo $str.' Symfony6 <br>';
        echo "$str Symfony6 <br>"; // в двойних кавичках можна виводити значення перемінної
        echo '$str Symfony6 <br>'; // - буде виводитися як обчний текст
        echo "$str Symfony6".'!<br>'; // - об'єднання з одинарними і двойними кавичками.
        echo '<input type="text"> <br>';
        // вбудовані функції по роботі із рядками
        $str = 'Hello Symfony 6 !';
        $length = strlen($str);
        echo 'length str: '.$length.'<br>'; // - довжина рядка
        echo trim('  some   ').'<br>'; // - видаляє всі пробіли по бокам рядку
        echo mb_strtolower('Hello Symfony 6 !').'<br>'; // - приводить текст у нижній ригістр
        echo mb_strtoupper('Hello Symfony 6 !').'<br>'; // - приводить текст у ВЕРХНІЙ РИГІСТР
        //        echo mb5($str);// - закешувати вказаний рядок

        echo '<br><br><b>Bitwise Operators</b>-------------------------------------------<br>';
        // https://disk.yandex.ru/i/0KRspl_jyC3P4A
        echo '6 & 10 = ';
        echo 6 & 10; // 2
        echo '<br>';
        // 6 = в двоїчній системі числиння  0110
        // 10 = в двоїчній системі числиння 1010
        // 2 = в двоїчній системі числиння  0010 (0110 + 1010)
        echo '6 | 10 = ';
        echo 6 | 10; // 14
        echo '<br>';
        // 2 = в двоїчній системі числиння  1110 (0110 + 1010)
        echo '6 ^ 10 = ';
        echo 6 ^ 10; // 12
        echo '<br>';

        echo '~45 = ';
        echo ~45; // -46
        echo '<br>';

        echo '6 << 1 = '; // 0110 звигаюється на один біт вліво 1100 і це буде 12
        echo 6 << 1; // 12 (1100)
        echo '<br>';

        echo '6 >> 1 = '; // 0110 звигаюється на один біт вправо 0011 і це буде 3
        echo 6 >> 1; // 3 (0011)
        echo '<br>';

        $num &= $var;
        $num |= $var;
        $num ^= $var;
        $num >>= $var;
        $num <<= $var;

        echo '<br><br><b>Comparison operators</b>-------------------------------------------<br>';
        // оператори порівняння дозволяють порівнювать дві різні змінні
        $x = 1;
        $y = '1';

        echo '$x = 1 $y = \'1\'<br>';
        echo '$x < $y = ';
        echo ($x < $y) ? 'true' : 'false'; // $x < $y = false
        echo '<br>';
        echo '$x <= $y = ';
        echo ($x <= $y) ? 'true' : 'false'; // $x <= $y = true
        echo '<br>';
        echo '$x > $y = ';
        echo ($x > $y) ? 'true' : 'false'; // $x > $y = false
        echo '<br>';
        echo '$x >= $y = ';
        echo ($x >= $y) ? 'true' : 'false'; // $x >= $y = true
        echo '<br>';

        echo '$x == $y = '; // порівння на рівність двух змінних без врахувння типу
        echo ($x == $y) ? 'true' : 'false'; // $x == $y = true
        echo '<br>';
        echo '$x != $y = '; // порівння на не рівність двух змінних без врахувння типу
        echo ($x != $y) ? 'true' : 'false'; // $x != $y = false
        echo '<br>';
        echo '$x <> $y = '; // порівння на не рівність двух змінних без врахувння типу
        echo ($x != $y) ? 'true' : 'false'; // $x <> $y = false
        echo '<br>';
        echo '$x === $y = '; // порівння на рівність двух змінних з врахувння їх типу
        echo ($x === $y) ? 'true' : 'false'; // $x === $y = false
        echo '<br>';
        echo '$x !== $y = '; // порівння на не рівність двух змінних з врахувння їх типу
        echo ($x !== $y) ? 'true' : 'false'; // $x !== $y = true
        echo '<br>';
        echo '$x <=> $y = '.($x <=> $y).'<br>'; // якщо $x == $y = 0, якщо $x > $y = 1, якщо $x < $y = -1

        echo 1 > 0; // true
        echo 1 > 1; // false
        echo 1 >= 1; // true

        echo 1 < 0; // false
        echo 1 < 1; // false
        echo 1 <= 1; // true

        echo 1 == 0; // false
        echo 1 == 1; // true
        echo 1 != 0; // true
        echo 1 != 1; // false

        echo 0 == '8ges'; // false
        echo 0 == ''; // true
        echo 0 == 'Hello'; // true
        echo 0 == null; // true

        echo '<br><br><b>Conditional operator \'if\'</b>-------------------------------------------<br>';
        // if - виконання одного чи другого коду взалежності від умови
        /*
                if (умова) {
                   код;
                } else {
                   код;
                }
        */
        //        (умова)?код:код;
        if (true) {
            echo 'Правда<br>';
        } else {
            echo 'Брехня<br>';
        }
        $a = 1;
        $b = 2;
        $c = 3;

        if ($a > $c) {
            echo '$a>$c<br>';
        } elseif ($b > $c) {
            echo '$a>$c<br>';
        } else {
            echo '$c>$b<br>';
        }

        $char = 'php';
        if ('php' == $char) {
            echo 'Мова PHP<br>';
        } elseif ('js' == $char) {
            echo 'Мова JS<br>';
        } elseif ('#c' == $char) {
            echo 'Мова #С<br>';
        } else {
            echo 'Невизначина мова<br>';
        }

        echo ('php' == $char) ? 'Мова PHP<br>' : 'Невизначина мова<br>';

        echo '<br><br><b>Logical operators</b>-------------------------------------------<br>';
        // https://disk.yandex.ru/i/c65OZvqFXJLv8w
        $num = 5;
        // && - (логічне і )перевірка на правдивість двух умов одночасно і вони повинні бути правдивими
        if ($num > 0 && $num < 8) {
            echo "0<{$num}<8<br>";
        }
        // || - (логічне або )перевірка на правдивість двух умов одночасно і одне із умов повинно бути правдивим
        if ($num > 0 || $num < 8) {
            echo 'Умова спрацювала<br>';
        }
        $num = -5;
        // ! - (лонічне ні )перевірка на протилежну умову
        if (!($num > 0)) { // false
            echo "Умова спрацювала !($num>0) <br>";
        }
        echo '<br><br><b>Ternary conditional operator</b>-------------------------------------------<br>';
        // Тернарний умовний оператор
        echo 'вираз1 ? вираз2 : вираз3; <br>';

        $a = 5;
        $b = 7;
        echo "a = {$a} b = {$b} <br>";
        $x = -450;
        $x = $x < 0 ? -$x : $x;
        echo "x = {$x} <br>"; // x = 450
        $x = 250;
        $x = $x < 0 ? -$x : $x;
        echo "x = {$x} <br>"; // x = 250

        // ?? - присвоєння нового значення змінній якщо вона раніше не була проініціалізована, або null.
        $y = null;
        $y = $y ?? 1;
        echo "y = {$y} <br>"; // y = 1

        // go to
        $i = 1;
        finish:
        echo 'go to '.$i.'<br>';
        ++$i;
        if (5 === $i) {
            goto end;
        }

        goto finish;
        end:
        echo 'go to end<br>';

        echo '<br><br><b>Switch</b>-------------------------------------------<br>';
        // Switch - дозволяє організувати зручний вибір із великої кількості умов

        $char = 'php';
        switch ($char) { // (вираз)
            case 'php': echo '<b>Мова PHP</b><br>';
                break; // break - зупинка поточного case і завершить виконання switch
            case 'js': echo '<b>Мова JavaScript</b><br>';
                break;
            case 'c#': echo '<b>Мова С#</b><br>';
                break;
            default: // аналог оператора 'else'
                echo '<b>Невизначина мова</b><br>';
                break;
        }

        $number = 120;
        switch (true) {
            case $number > 0 && $number <= 10:
                echo "Число $number більше 0 і менше рівне 10<br>";
                break;
            case $number > 10 && $number <= 100:
                echo "Число $number більше 10 і менше рівне 100<br>";
                break;
            case $number > 100 && $number <= 1000:
                echo "Число $number більше 100 і менше рівне 1000<br>";
                break;
            default:
                echo "Число $number більше 1000<br>";
                break;
        }

        echo '<br><br><b>Reading from a file and writing to a file</b>-------------------------------------------<br>';
        // Читання з файлу та запис у файл
        // file_get_contents - дозволяє читати дані із файлу
        // file_put_contents - дозволяє записувати дані у файл
        echo 'file /file.txt: ';
        echo $content = file_get_contents(__DIR__.'/file.txt');

        $content .= " \nSome added text for file /file2.txt";
        file_put_contents(__DIR__.'/file2.txt', $content);
        echo '<br>file /file2.txt: ';
        echo $content = file_get_contents(__DIR__.'/file2.txt');
        $fileName = __DIR__.'/'.date('Y-m-d-H-i-s').'.txt';
        // TODO need uncomment for record data in file
        //        file_put_contents($fileName, $content);

        echo '<br><br><b>Cycle While</b>-------------------------------------------<br>';
        // While - префіксна умова
        // Цикл While - виконується скільки раз, скільки раз умова вірна
        // Цикл While - називається циклом із передумовою. Умова перевіряється на початку виконання циклу
        // Цикл While break перериває виконання поточної структури for, foreach, while, do-while чи switch.

        $i = 0;
        while ($i <= 10) {
            //            if ($i <= 4) {;
            //                $i++;
            //                continue; # вихід із поточної ітерації циклу, але не вихід із циклу
            //            }
            if (5 == $i) {
                echo "i = $i break<br>";
                break; // вихід із свого циклу в цілому
            }
            echo "i = $i<br>";
            ++$i;
        }
        echo '------------------------<br>';
        $i = 5;
        while (--$i) {
            echo "i = $i<br>";
        }

        echo '<br><br><b>Cycle Do While</b>-------------------------------------------<br>';
        // Do While - постфіксна умова
        // Цикл Do While -цикл із після умовою. Виконується скільки раз, скільки умова вірна
        // Цикл Do While - перевірка на істинність умови в кінці циклу.
        // Цикл Do While - в будь якому випадку виконається принаймі один раз >=1
        $i = 1;
        do {
            echo "do while i = $i<br>";
        } while (++$i <= 5);

        echo '<br><br><b>Cycle For</b>-------------------------------------------<br>';
        // Цикл For - цикл із рахівником
        /*
          for (ініціалізація змінної; умова; зміннювання змінної)
          {
            тіло цикло;
          }
         */
        for ($i = 1; $i <= 5; ++$i) {
            echo "Cycle For: i = $i<br>";
        }
        echo '------------------------<br>';

        for ($i = 5, $j = 1; $i >= 1, $j <= 5; $i--, $j++) {
            echo "Cycle For: i = {$i} j = {$j} <br>";
        }
        echo '------------------------<br>';

        for ($i = 0; $i <= 100; $i += 10) {
            echo "Cycle For: i = {$i}<br>";
        }
        echo '------------------------<br>';
        for ($i = 2; $i <= 20; $i += 2) {
            echo "Cycle For: i = {$i}<br>";
        }
        echo '------------------------<br>';
        $i = 1;
        while (true) {
            if ($i <= 20) {
                echo "Cycle For: i = {$i}<br>";
            } else {
                break;
            }
            $i += 2;
        }
        echo '---- Prime numbers (2-100) ----<br>';
        // Числа які діляться тільки самі на себе
        $flag = false;
        for ($i = 2; $i < 100; ++$i) {
            for ($j = 2; $j < $i; ++$j) {
                if (($i % $j) != 0) {
                    continue; // пропуск ітерації циклу
                } else {
                    $flag = true;
                    break; // вихід із поточного циклу
                }
            }
            if (!$flag) {
                echo "{$i} ";
            }
            $flag = false;
        }

        echo '<br><br><b>Arrays</b>-------------------------------------------<br>';
        // Масив - структура даних, яка одночасно може зберігати в собі велику кількість даних
        // Індекс масиву- кожне значення в масиві зберігається під свїм індексом, по якому можна звернутися до цього значення
        // Масиви бувають індексні і асоціативні, одномірні і багатомірні
        $arrs = ['Hello', 'Symfony', '6', '&', 'PHP', '8', '!'];
        foreach ($arrs as $arr) {
            echo $arr.' ';
        }
        echo '<pre>';
        print_r($arrs);
        echo '</pre>';

        $arr = ['one' => 'Hello', 'two' => 'Symfony', 'three' => '6', 'four' => '&', 'five' => 'PHP', 'six' => '8', 'seven' => '!'];
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        echo $arr['one'].' '.$arr['two'].' '.$arr['seven'].'<br>';
        $arr2[1] = 'Hello';
        $arr2[2] = 'Symfony';
        $arr2[3] = '6';
        $arr2[4] = '&';
        $arr2[5] = 'PHP';
        $arr2[6] = '8';
        $arr2[7] = '!';
        echo '<pre>';
        print_r($arr2);
        echo '</pre>';
        $arr3[] = 'Hello';
        $arr3[] = 'Symfony';
        $arr3[] = '6';
        $arr3[] = '&';
        $arr3[] = 'PHP';
        $arr3[] = '8';
        $arr3[] = '!';
        echo '<pre>';
        print_r($arr3);
        echo '</pre>';

        $str = 'Hello Symfony 6 & PHP 8 !';
        $arr4[] = (array) $str;
        echo '<pre>';
        print_r($arr4);
        echo '</pre>';

        echo '<br><br><b>Associative arrays</b>-------------------------------------------<br>';
        // Асоціативні масиви - в якості ключі (індексів) масива виступають рядкові значення
        // ключ - індекс в асоціативному масиві
        $arr = ['red' => 'червоний', 'black' => 'чорний', 'blue' => 'синій', 'grey' => 'сірий', 'green' => 'зелений'];
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        $arr = ['one' => '1', 'two' => '2', 'three' => '3', 'four' => '4', 'five' => '5'];
        foreach ($arr as $key => $value) {
            echo "arr[{$key}] => {$value}<br>";
        }
        // звернення до елементу в асоціативному масиві
        echo $arr['five'].'<br>'; // 5
        $arr['six'] = '6';
        $arr['Six'] = '6'; // six і Six два різних ключі до масива
        $arr['seven'] = '7';
        $arr['seven'] = 'seven'; // присвоєння буде 'seven' - те що було присвоєне останній раз
        foreach ($arr as $key => $value) {
            echo "arr[{$key}] => {$value}<br>";
        }

        echo '<br><br><b>Multidimensional arrays</b>-------------------------------------------<br>';
        // Багатовимірні масиви - у якості елементів масиву можуть бути інші масиви.
        $transport = [
            'auto' => ['Mercedes', 'Chevrolet', 'Dodge'],
            'planes' => ['Il-2', 'I-16', 'helicopter', 'Boeing-747'],
            'ships' => ['Carrier', 'Frigate', 'Destroyer'],
        ];
        echo '<pre>';
        print_r($transport);
        echo '</pre>';
        // звернення до одного елементу багатомірного масиву
        echo $transport['auto'][2].'<br>'; // Dodge

        echo '<br><br><b>Interpolation of array elements</b>-------------------------------------------<br>';
        // Інтерполяція елементів масиву в рядки -
        $arr[0] = 'Moroz';
        $arr[1] = 'Taras';
        echo "My name is {$arr[1]}<br>";
        $arr['ago'] = 36;
        echo "I'm $arr[ago]<br>";

        echo '------------------------<br>';
        $arr1[0][0] = 'Moroz';
        $arr1[0][1] = 'Taras';
        $arr1[0][2] = 36;
        echo "My last name is {$arr1[0][0]}<br>";
        echo "My first name is {$arr1[0][1]}<br>";
        echo "I'm {$arr1[0][2]}<br>";

        echo '<br><br><b>List construction</b>-------------------------------------------<br>';
        // list() - переобразує елементи масиву на звичайні змінні
        // list() - працює тільки із індексними масивами. Тільки з тими масивами індекси яких починається з нуля.
        $arr = [1, 2, 3];
        list($one, $two, $three) = $arr;
        echo $one.'<br>';
        echo $two.'<br>';
        echo $three.'<br>';

        $arr = [1, 2, 3, 4, 4];
        list(, $val) = $arr;
        echo $val.'<br>';

        $x = 6;
        $y = 3;
        echo 'До:<br>';
        echo "x: {$x}<br>"; // 3
        echo "y: {$y}<br>"; // 6
        list($x, $y) = [$y, $x];
        echo 'Після:<br>';
        echo "x: {$x}<br>"; // 6
        echo "y: {$y}<br>"; // 3

        echo '<br><br><b>For & foreach in array</b>-------------------------------------------<br>';
        // Обхід усіх елементів масиву у циклі
        // можна робить прохід по усім елементам у масиві і щось з ними робити.
        // foreach - цикл який відноситься до асоціативних масивів. Перебирає масив по ключам і значенням.
        $numbers = ['1', '2', '3', '4', '5', '6', '7', 'Hello', true];
        for ($i = 0; $i < count($numbers); ++$i) {
            echo "$numbers[$i]<br>";
        }

        $transports = [
            'auto' => 'Mercedes',
            'planes' => 'Il-2',
            'ships' => 'Carrier',
        ];
        foreach ($transports as $key => $name) {
            echo "{$key} : {$name} <br>";
        }

        $transports = [
            'auto' => ['Mercedes', 'Chevrolet', 'Dodge'],
            'planes' => ['Il-2', 'I-16', 'helicopter', 'Boeing-747'],
            'ships' => ['Carrier', 'Frigate', 'Destroyer'],
        ];
        // обхід багатовимірного масиву
        foreach ($transport as $key => $arr) {
            echo "<b>$key</b><br>";
            foreach ($arr as $value) {
                echo "<li>$value</li>";
            }
        }

        foreach ($transport as $key => $arr) {
            echo "<b>$key</b><br>";
            for ($i = 0; $i < count($arr); ++$i) {
                echo "<li>$arr[$i]</li>";
            }
        }

        echo '<br><br><b>Merging and comparing arrays</b>-------------------------------------------<br>';
        // Злиття та порівняння масивів
        // 1
        // при однакових індексах записується елемент який був першим із цим індексом
        $first = [1 => 'Red', 2 => 'Blue', 3 => 'Black'];
        $second = [4 => 'Brown', 5 => 'Green'];
        //        $con = array_merge($first,$second);# злиття двох масивів в один;
        //        echo ('<pre>');
        //        print_r ($con);
        //        echo ('</pre>');

        // порівняння масивів на рівність
        echo ($first == $second) ? 'Масиви рівні<br>' : 'Масиви не рівні<br>';

        // порівняння масивів на рівність
        echo ($first != $second) ? 'Масиви не рівні<br>' : 'Масиви рівні<br>';

        // === - порівнює на значення в масиві і типи значень
        $a = [1];
        $b = ['1'];
        // порівняння масивів на рівність
        echo ($a === $b) ? 'Масиви рівні<br>' : 'Масиви не рівні<br>';
        $a = ['1'];
        $b = ['1'];
        // порівняння масивів на рівність
        echo ($a === $b) ? 'Масиви рівні<br>' : 'Масиви не рівні<br>';

        echo '<br><br><b>Check the existence and delete elements of the array</b>-------------------------------------------<br>';
        // Перевірка існування і видалення елементів масиву
        // isset() - ф-я яка перевіряє на існування елемента у масиві
        $arr = [5 => 1, 2, 3];
        for ($i = 0; $i <= 10; ++$i) {
            echo (isset($arr[$i])) ? "Елемент масиву \$arr[$i] існує<br>" : "Елемент масиву \$arr[$i] не існує<br>";
        }
        // is_array() - ф-я яка перевіряє чи переданий параметр являється масивом
        echo (is_array($arr)) ? 'Це є масив<br>' : 'Це не є масив<br>'; // Це є масив
        echo (is_array($arr[6])) ? 'Це є масив<br>' : 'Це не є масив<br>'; // Це не є масив
        // in_array() - ф-я яка шукає передане значення у масиві
        echo (in_array(3, $arr, true)) ? 'Значення 3 знайдено в масиві<br>' : 'Значення 3 знайдено не в масиві<br>';
        // array_key_exists() - ф-я яка шукає передане значення по ключам масиву
        echo (array_key_exists(6, $arr)) ? 'Заданий ключ найдений<br>' : 'Заданий ключ не найдений<br>';
        echo (array_key_exists(8, $arr)) ? 'Заданий ключ найдений<br>' : 'Заданий ключ не найдений<br>';
        // array_search() - ф-я яка повертає значення ключа масиву по його значенню, яке передано в якості параметру
        echo array_search(5, $arr);
        echo '<br>';
        echo array_search(2, $arr); // 6
        echo '<br>';

        // видалення елементів у масиві
        unset($arr[6]); // видалено елемент в масиві із ключем/індексом 6
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        unset($arr); // видалено весь масив в цілому

        echo '<br><br><b>We solve problems for understanding arrays</b>-------------------------------------------<br>';
        // Вирішуємо завдання на розуміння масивів
        $colors = ['red', 'white', 'green', 'blue', 'pink', 'yellow'];
        $color = $colors[rand(0, count($colors) - 1)];
        echo "<span style='color: {$color}'>$color</span><br>";

        $length = rand(5, 10); // випадкове число від 5 до 10
        $array = [];
        for ($i = 0; $i <= $length; ++$i) {
            $array[$i] = rand(0, 100);
        }
        sort($array); // сортування значення масиву від мін до макс
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        $months = file(__DIR__.'/month.txt');
        echo '<pre>';
        print_r($months);
        echo '</pre>';

        echo '<br><br><b>Functions PHP</b>-------------------------------------------<br>';
        // Функції на PHP
        // Створивши свою функцію та записавши туди необхідний код, ви зможете викликати та використовувати його стільки разів, скільки необхідно.
        // імя функції записується camelCase (верблюжаЗапис)
        // self::result($передані аргументи); - передані параметри тільки передаються у функцію
        echo '5^3 = '.self::result(5, 3).'<br>'; // 5^3 = 125
        // не обов'язкові параметри у функції
        echo '5^5 = '.self::result(5).'<br>'; // 5^5 = 3125

        // self::result(&$передані_аргументи_по_посиланню); - передані параметри передаються у функцію і можуть самій функції змінитися
        $b = 10; // 10
        echo self::sum($b).'<br>'; // 20
        echo 'b = '.$b.'<br>'; // b = 20

        // передача довільну кількість параметрів, які невідомо заздалегідь
        self::outArguments('PHP', 'JS', 'HTML', 'CSS', 'MySQL', 'RUBY', 'GO');
        echo '-------------------------<br>';
        // в якості переданого параметру ми передаємо масив
        $items = ['PHP', 'JS', 'HTML', 'CSS', 'MySQL', 'RUBY', 'GO'];
        self::outArguments2(...$items);
        echo '-------------------------<br>';

        echo '<br><br><b>Global variables</b>-------------------------------------------<br>';
        // Глобальні змінні
        // Змінна в самій функції це локальна змінна і воно доступна тільки внутрі цієї ф-ії
        // Глобальна змінна може змінюватися із будь якого місця програми.
        $var = 6;
        echo "{$var}<br>"; // 6
        echo self::globalVar().'<br>';
        echo "{$var}<br>"; // 2

        // локальна змінна у функції існує до тих пір пока виконується ця ф-ія

        // статична змінна дана змінна пам'ятає своє попереднє значення, яке в неї було при минулому визові цієї ф-ії
        echo self::count().'<br>'; // 1
        echo self::count().'<br>'; // 2
        echo self::count().'<br>'; // 3
        echo self::count().'<br>'; // 4
        echo self::count().'<br>'; // 5

        echo '<pre>';
        print_r(self::formatSize(54989777));
        echo '</pre>';

        list($bytes, $kbytes, $mbytes, $gbytes) = self::formatSize(54989777);
        echo "{$bytes}<br>{$kbytes}<br>{$mbytes }<br>{$gbytes}";

        echo '<br><br><b>Recursion, nested and anonymous functions</b>-------------------------------------------<br>';
        // Рекурсія, вкладені та анонімні функції
        // Рекурсія - це функція яка викликає саму себе
        self::recursiya(8);

        // вложені ф-ції

        // динамічне імя функції
        $nameFunction = rand(1, 0) ? 'first' : 'second';

        //        echo $this->nameFunction();
        // анонімна функція - це ф-ія яка не має свого особистого імені
        $arr = ['PHP', 'HTML', 'CSS', 'JS', 'MySQL', 'Ruby'];
        sort($arr);
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

        $fst = new Point();
        $fst->setX(12);
        $fst->setY(5);

        $snd = new Point();
        $snd->setX(1);
        $snd->setY(1);

        $thd = new Point();
        $thd->setX(4);
        $thd->setY(10);

        $arr = [$fst, $snd, $thd];
        usort($arr, function ($a, $b) {
            $dist_a = sqrt($a->x ** 2 + $a->y ** 2);
            $dist_b = sqrt($b->x ** 2 + $b->y ** 2);

            return $dist_a <=> $dist_b;
        });
        echo '<pre>';
        print_r($arr);
        echo '</pre>';

        echo '<br><br><b>Closures</b>-------------------------------------------<br>';
        // Замикання - це ф-ія яка за поминає стан оточення в момент свого створення.
        // Тобто якщо стан якихось змінних зміниться після в, то замикання зберігає первоначальний стан змінної при першому її визові
        // головне призначення Замикання - заміна глобальних змінних
        $message = 'My text message';
        $mFu = function () use ($message) {
            $message = 'New text message';

            return $message;
        };

        //        echo $mFu.'<br>'; # New text message
        echo $message.'<br>'; // My text message

        echo (self::odd(6)) ? 'Число не парне<br>' : 'Число парне <br>'; // 1

        echo 'Sum number 1..9 = '.self::sumNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 0).'<br>';

        echo '<br><br><b>Working with strings</b>-------------------------------------------<br>';
        // Робота з рядками
        $str1 = 'Hello Symfony 6 & PHP 8 & Docker';
        // Вивести нульовий елемент цього рядку
        echo $str1[0].'<br>'; // H
        // "\u{код символу}" - отримати символ по коду символу із кодіровки UTF-8
        echo "\u{0410}<br>"; // A

        // mb_strlen() - підраховує кількість символів у рядку
        $str2 = 'Привіт Сімфоні 6 ПНП 8 і Докер';
        echo mb_strlen($str2).'<br>'; // 30 символів у цьому рядку (1 байт - англ і 2 байта українські символи)
        for ($i = 0; $i < mb_strlen($str1); ++$i) {
            echo $str1[$i].'<br>';
        }
        echo chr(36).'<br>'; // $ - по коду вертається символ
        echo ord('$').'<br>'; // 36 - по символу вертається його код

        echo '<br><br><b>Working with substrings</b>-------------------------------------------<br>';
        // Робота з підрядками
        // substr() - ф-ія яка повертає частину рядку, 1 - з якого рядку, 2 - кількість символів
        $date = '2022-05-28';
        echo 'Year: '.substr($date, 0, 4).'<br>';
        echo 'Month: '.substr($date, 5, 2).'<br>';
        echo 'Day: '.substr($date, 8, 2).'<br>';

        // strpos() - повертає номер індексу входу шукаємого символа або підрядкую в рядку.
        $str = 'Hello Symfony 6 & PHP 8 & Docker';
        echo strpos($str, 'PHP').'<br>';

        echo substr($str, strpos($str, 'Symfony')).'<br>'; // Symfony 6 & PHP 8 & Docker

        // str_replace() - заміна в тексті
        $str = 'Hello [b]Symfony 6[/b] & [b]PHP 8[/b] & [b]Docker[/b]';
        echo $str.'<br>';
        //        $str = str_replace('[b]', '<b>', $str);
        //        $str = str_replace('[/b]', '</b>', $str);
        $str = str_replace(['[b]', '[/b]'], ['<b>', '</b>'], $str, $number);
        echo $str.'<br>';
        echo 'Кількість зроблених замін '.$number.'<br>';

        // trim() - видалення пробілів із початку і кінця рядку
        $str = ' Symfony 6 ';
        echo strlen($str).'<br>'; // 11
        echo strlen(trim($str)).'<br>'; // 9
        echo trim($str, ' S'); // ymfony 6

        echo '<br><br><b>Functions for working with html</b>-------------------------------------------<br>';
        // ф-ії для роботи з HTML
        $str = "Hello\nSymfony\n6\n&\nPHP\n8\n&\nDocker";
        echo $str.'<br>';
        echo nl2br($str).'<br>'; // вірна обробка - \n (починається із нового рядку)
        // htmlspecialchars - допомагає перетворити HTML код в безпечний вигляд (будь-який код мовою програмування буде показаний, але не буде виконаним)?>
        <form action="#" method="get">
            Повідомлення: <br>
            <textarea name="msg" cols="50" rows="5"></textarea><br>
            <input type="submit" value="Добавити">
        </form>
        <?php
        if (isset($_GET['msg'])) {
            echo htmlspecialchars($_GET['msg']).'<br>';
        }

        // strip_tags ф-ція яка видаляє всі html теги
        $str = '<p>Звичайний текст</p><br>
                <b>Жирний текст</b><br>';

        echo htmlspecialchars(strip_tags($str, '<p>')); // тег <p> лишиться

        echo '<br><br><b>Format output, functions printf, explode, implode</b>-------------------------------------------<br>';
        // Форматний вигляд тесту, функції printf, explode, implode
        //        $red = 255;
        //        $green = 255;
        //        $blue = 100;
        //        print_r('#%X%X%X', $green, $green, $blue);

        echo '<pre>';
        printf('%4d', 45); //  45
        echo '<br>';
        printf('%04d', 45); // 0045
        echo '<br>';
        printf('%4.2f', 44.12345); // 44.12
        echo '<br>';
        printf('%.4f', 45.12345); // 45.1234
        echo '</pre>';

        // explode() - розділення рядка на декілька підрядків
        $str = 'FirstName, LastName, Email, PhoneNumber';
        // ', ' - розділитиль
        echo '<pre>';
        print_r(explode(', ', $str, 3)); // [0] => FirstName [1] => LastName [2] => Email [3] => PhoneNumber
        echo '</pre>';

        // implode() - із елементів масиву перетворюється в рядок
        $arr = ['FirstName, LastName, Email, PhoneNumber'];

        echo '<pre>';
        print_r(implode(', ', $arr)); // FirstName, LastName, Email, PhoneNumber
        echo '</pre>';

        echo '<br><br><b>Working with JSON</b>-------------------------------------------<br>';
        // Робота із JSON
        //  serialize (сеалізація) - перетворення масиву у json за допомогою json_encode
        //  deserialize (десеалізація) - перетворення json в асоціативний  масив за допомогою json_decode
        $contact = [
            'name' => 'Taras',
            'phones' => [
                '0981234567',
                '0507654321',
            ],
        ];
        $encodeContact = json_encode($contact);
        // json - обєкт
        echo $encodeContact.'<br>';

        echo '<pre>';
        // масив
        print_r(json_decode($encodeContact, true)); // отримаємо масив
        // обєкт
        //        print_r(json_decode($encodeContact, false)); // отримаємо об'єкт
        echo '</pre>';

        echo '<br><br><b>Passing parameters using the GET method</b>-------------------------------------------<br>';
        // Передача параметрів методом GET
        // GET - протокол http, параметри якого передаються в адресному рядку запиту
        // POST - протокол http, параметри якого передаються в тілі самого http документу

        // звичайні параметри
        // ?firstName=Taras&lastName=Moroz&ago=36
        //        echo $_GET['firstName'].' '.$_GET['lastName'].' '.$_GET['ago'].'<br>'; // Taras Moroz 36

        // передані параметри у вигляді масиву
        // ?firstName[]=Taras&firstName[]=Katya&lastName[]=Moroz&lastName[]=Moroz&ago[]=36&ago[]=27

        // urlencode()- ф-ія переобразовує переданий параметр в безпечний рядок
        echo '<a href="?firstName[]='.urlencode('Taras').'&firstName[]='.urlencode('Katya').'&lastName[]='.urlencode('Moroz').'&lastName[]='.urlencode('Moroz').'&ago[]='.urlencode(36).'&ago[]=27">URL<br></a>';
        if (isset($_GET['firstName'])) {
            echo '<pre>';
            print_r($_GET);
            echo '</pre>';
        }

        echo "<a href='?message=".urlencode('Hello Symfony 6 PHP 8 and docker')."'>Message<br></a>";
        if (isset($_GET['message'])) {
            echo '<pre>';
            print_r($_GET);
            echo '</pre>';
        }

        // parse_url() - ф-ія яка парсить url сторинки в асоціативний масив, розбиває рядок на окремі параметри (масив із ключами)
        $url = 'https://www.google.com/search?q=symfony+6+php+8+docker&rlz=1C5CHFA_enUA985UA986&oq=symfony+6+php+8+docker&aqs=chrome..69i57j69i64j69i60l3j69i65.22092j0j15&sourceid=chrome&ie=UTF-8';
        echo '<pre>';
        print_r(parse_url($url));
        echo '</pre>';

        echo '<pre>';
        print_r(parse_url($url, PHP_URL_HOST)); // www.google.com
        echo '</pre>';

        echo '<br><br><b>The POST method</b>-------------------------------------------<br>';
        // GET
        //        echo "
        //            <form method='GET' action='#' name='formGet'>
        //            <input type='text' name='firstName' placeholder='FirstName'><br>
        //            <input type='text' name='lastName' placeholder='LastName'><br>
        //            <input type='submit' value='Submit'>
        //            </form>
        //        ";
        //        // empty($_GET['firstName']) - перевірка чи пустий глобальний масив із таким ключем
        //        if (isset($_GET['firstName']) && isset($_GET['lastName']) && '' != $_GET['firstName'] && '' != $_GET['lastName']) {
        //            echo "FirstName {$_GET['firstName']}, LastName {$_GET['lastName']}";
        //        } else {
        //            exit('Поля не заповнені');
        //        }
        // POST
        echo "
            <form method='POST' action='#' name='formPost'>
            Name:<br><input type='text' name='name' placeholder='Name'><br>
            <input type='submit' value='Submit'>
            </form>
        ";
        $errors = [];
        if (!empty($_POST)) {
            if (empty($_POST['name'])) {
                $errors[] = 'Текстове поле не заповнено';
            }
            if (empty($errors)) {
                echo 'Name: '.htmlspecialchars($_POST['name']);
                exit;
            }
            if (!empty($errors)) {
                foreach ($errors as $err) {
                    echo "<span style='color: red'>$err</span><br>";
                }
            }
        }

        echo '<br><br><b>Working with form elements (checkbox, radio, select)</b>-------------------------------------------<br>';
        // Робота із елементами форми
        echo 'Checkbox - вибір декількох варіантів одразу<br>';
        echo "
            <form method='POST' action='#' name='formCheckbox'>
                Я знайомий із:<br>
                <input type='checkbox' value='1' name='html'>HTML<br>
                <input type='checkbox' value='2' name='css'>CSS<br>
                <input type='checkbox' value='3' name='js'>JS<br>
                <input type='checkbox' value='4' name='php'>PHP<br>
                <input type='submit' value='Submit'>
            </form>
        ";
        if (!empty($_POST)) {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
        echo 'Select - вибір одного варіанту із цілого списку<br>';
        echo "
        <form method='POST' action='#' name='formSelect'>
            <select name='fst[]' multiple size='3' form='formSelect'>
                <option value='1' selected>Перший пункт</option>
                <option value='2'>Другий пункт</option>
                <option value='3'>Третій пункт</option>
            </select>
            <br>
            <select name='snd' form='formSelect'>
                <option value='one' selected>Перший пункт</option>
                <option value='two'>Другий пункт</option>
                <option value='three'>Третій пункт</option>
            </select>
            <br>
            <input type='submit' value='Submit'>
        </form>
        ";
        if (!empty($_POST)) {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
        // radio button (радіо кнопка/перемикач)
        echo 'Radio button - вибір тільки одного варіанту із декількох<br>';
        echo "
            <form method='POST' action='#' name='formRadioButton'>
                Я знайомий із:<br>
                <input type='radio' name='language' value='html'>HTML<br>
                <input type='radio' name='language' value='css'>CSS<br>
                <input type='radio' name='language' value='js'>JS<br>
                <input type='radio' name='language' value='php' checked>PHP<br>
                <input type='submit' value='Submit'>
            </form>
        ";
        if (!empty($_POST)) {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
        echo '<br><br><b>Upload files to the server</b>-------------------------------------------<br>';
        // Робота із елементами форми - завантаження файлу
        echo 'Form for upload file';
        echo "
            <form method='POST' action='#' name='formUploadFile' enctype='multipart/form-data'>
                <input type='file' name='fileName'>
                <input type='submit' value='Submit'>
            </form>
        ";
        if (isset($_FILES['fileName'])) {
            if ($_FILES['fileName']['size'] > 7 * 1024 * 1024) {
                exit('Розмір файлу більший чим 3 Мб');
            }
            if (move_uploaded_file($_FILES['fileName']['tmp_name'], __DIR__.'temp/'.$_FILES['fileName']['name'])) {
                echo 'Файл успішно завантажений<br>';
                echo 'Вихідне імя файлу: '.$_FILES['fileName']['name'].'<br>';
                echo 'Розмір файлу в байтах: '.$_FILES['fileName']['size'].'<br>';
                echo 'MINE тип файлу: '.$_FILES['fileName']['type'].'<br>';
                echo 'Тимчасовий файл, в якому збережений тимчасовий файл: '.$_FILES['fileName']['tmp_name'].'<br>';
            } else {
                echo 'Помилка завантаження файлу';
            }
        }

        echo '<br><br><b>Form for send mail</b>-------------------------------------------<br>';
        echo "<div style='box-sizing: border-box; display: block; width: 250px; height: 30px; margin-bottom: 15px;'>
        <form method='POST' action='#' name='sendMail'>
            <select name='subject'>
                <option disabled selected>Тема листа</option>
                <option value='Питання по уроку'>Питання по уроку</option>
                <option value='Особисте питання'>Особисте питання</option>
                <option value='Подяка'>Подяка</option>
            </select><br>
            <input type='email' name='email' placeholder='Уведіть свій email' maxlength='50' required><br>   
            <textarea name='message' placeholder='Уведіть повідомлення' maxlength='150' required style='resize: none; height: 100px'></textarea><br>
            7 * 8 = <br>
            <input type='number' name='captcha' placeholder='Уведіть відповідь' maxlength='3' required><br> 
            <input type='submit' value='Відправити листа'>
        </form>
        </div>";

        if (isset($_POST['captcha'])) {
            if (56 == $_POST['captcha']) {
                $subject = isset($_POST['subject']) ? $_POST['subject'] : 'Subject';
                $to = 'taras.moroz@ekreative.com';
                $from = trim($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                $message = urlencode($message);
                $message = trim($message);
                if (mail($to, $subject, $message)) {
                    echo "<span style='color: green'>Лист успішно відправлений</span><br>";
                } else {
                    echo "<span style='color: red'>Лист не відправлений</span><br>";
                }
            }
        }

        echo '<br><br><br><br><br><br><br><br><br><b>Class Methods</b>-------------------------------------------<br>';
        // Метод - це та сама функція яка о приділена в межі класу, і вони можуть робити дії над змінними класу
        // Ф-ція об'явлена в середині класу називається методом

        // Об'єкт (екземпляр) класу Point
        // НЕ можна визвати метод класу, пока не створив екземпляр цього класу
        $obj = new Point();
        echo $obj->printText();

        $p1 = new Point();
        $p1->setX(5);
        $p1->setY(7);
        echo 'Distance between two points 5 & 7 = '.$p1->distanse().'<br>';

        // Статичні методи - метод класу який можна викликати без створення об'єкту цього класу
        echo Point::staticMethodPrintText();

        Page::site();

        // Статестичні свойства класу - це свойства до яких можна звернутися без створення об'єкту цього класу
        Person::$name = 'Taras'; // ініціалізація статичного методу
        echo Person::$name.'<br>'; // вивод статичної зімнної

        // Статичний метод - це метод який можна викликати не створюючи екземпляр класу
        // Статичний метод не містять змінну this
        // Статичний метод може використовувати константи класу
        echo Person::getName().'<br>'; // вивод статичного методу
        echo Person::COUNTRY.'<br>'; // вивод константи

        echo '<br><br><b>Constructor class</b>-------------------------------------------<br>';
        // Конструктор - спеціальний метод класу який автоматично виконується в момент створення об'єкту клас, до визову усіх остальних не статичних методів класу
        $userAgent = 'Kidslox/7.6.0 (Phone; Android/12.1.0)';
        echo 'osVersion: '.$this->parseOsVersionFromUserAgent($userAgent).'<br>';

        $obj = new People();
        echo '<pre>';
        print_r($obj);
        echo '</pre>';

        $point = new Point(10, 20);
        echo '<pre>';
        print_r($point);
        echo '</pre>';

        //        echo "$point";
        echo '<br><br><b>Inheritance and method overloading</b>-------------------------------------------<br>';
        // Наслідування - дозволяє один і той самий кусок коду використовувати повторно, для того, щоб не дублювати один і той самий код
        // Ми можемо змінні і методи батьківського класу використовувати всередині класу-наслідника
        $dog = new Dog();
        echo $dog->info().'<br>';
        echo $dog->voice().'<br>';

        $cat = new Cat();
        echo $cat->info().'<br>';
        echo $cat->voice().'<br>';

        // перезавантаження методу - він полягає в тому що ви можете переопромінити метод батьківського класу у класі нащадку
        echo $dog->parentInfo().'<br>';

        $header['X-Device-model'] = 'Xiaomi Mi Mix 2s';
        echo $header['X-Device-model'].'<br>';

        // --------------------------------
        $deviceBrand = stristr($header['X-Device-model'], ' ', true);
        echo $deviceBrand.'<br>';

        $deviceModel = stristr($header['X-Device-model'], ' ');
        echo $deviceModel.'<br>';
        // --------------------------------
        echo '<br><br><b>Abstract and final classes and methods</b>-------------------------------------------<br>';
        // Перегрузка методу(abstract) - переопромінення метофду у класі нащадку
        // final - заборонить переопридялення методу у класі нащадку

        // Cannot instantiate abstract class App\Controller\Animal
        //        $animal = new Animal(); #не можна зробити екземпляр цього класу томущо він абстрактний
        $dog = new Dog();
        $cat = new Cat();
        // instanceof - перевірка об'єкту на приналежність до якогось класу
        if ($dog instanceof Animal) {
            echo 'Dog являє собою екземпляром(обєктом) класу Animal<br>';
        }
        if ($dog instanceof Dog) {
            echo 'Dog являє собою екземпляром(обєктом) класу Dog<br>';
        }
        if ($dog instanceof Cat) {
            echo 'Dog являє собою екземпляром(обєктом) класу Cat<br>';
        }

        echo '<br><br><b>Regular expression</b>-------------------------------------------<br>';
        // https://www.youtube.com/watch?v=yAGJgPupZO4
        // https://www.youtube.com/watch?v=5NNZE-HrVUE
        // https://www.youtube.com/watch?v=YdYUzWxR_Po

        // Regular expression php - регулярні вираження - деякий приклад входження умовно підрядка в рядок
        // регулярний вираз (rational expression) — це рядок, що описує або збігається з множиною рядків, відповідно до набору спеціальних синтаксичних правил.
        $str = 'Masha is,  x -  z 123 _  x beautiful';
        $res = explode(' ', $str); // розділяє рядок на масиви
        echo '<pre>';
        print_r($res);
        echo '</pre>';

        echo '\s+ - розділитиль слів, розбиває рядок на масиви, ігнорує пробіли<br>';
        echo '<pre>';
        print_r(preg_split('/\s+/', 'Masha is        very beautiful'));
        echo '</pre>';

        // preg_match - ф-ія для пошуку підрядку в рядку
        // pattern - шаблон регулярних виразів який в мові php указується саме в якості рядка
        // $str - рядок в якому ми будемо і шукати щось по нашому шаблону
        // $matches - вертаються всі входження які знайдено

        echo 'Пошук підрядку is в рядку<br>';
        echo '<pre>';
        print_r(preg_match('/is/', $str, $matches));
        echo '</pre>';
        echo 'Перевірка чи є в цьому рядку символ z, або символ x<br>';
        echo '<pre>';
        print_r(preg_match('/[zx]/', $str, $matches));
        echo '</pre>';

        // preg_match_all - пошук усіх входжень
        echo 'Перевірка чи є в цьому рядку символ z, або символ x всі входження<br>';
        echo '<pre>';
        print_r(preg_match_all('/[zx]/', $str, $matches));
        echo '</pre>';

        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Перевірка чи є в цьому рядку діапазон символів від символу a до c<br>';
        echo '<pre>';
        print_r(preg_match_all('/[a-c]/', $str, $matches)); // 4
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Перевірка кількість символі із діапазону від a до z<br>';
        echo '<pre>';
        print_r(preg_match_all('/[a-z]/', $str, $matches)); // 18
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Перевірка кількість символі із діапазону від a до z і від символу A до Z<br>';
        echo '<pre>';
        print_r(preg_match_all('/[a-zA-Z]/', $str, $matches)); // 19
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo 'еревірка кількість символі із діапазону від a до z і від символу A до Z і цифру 3<br>';
        echo '<pre>';
        print_r(preg_match_all('/[a-zA-Z3]/', $str, $matches)); // 20
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo 'Перевірка кількість символі із діапазону від a до z і від символу A до Z і цифри 0-9<br>';
        echo '<pre>';
        print_r(preg_match_all('/[a-zA-Z0-9]/', $str, $matches)); // 22
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Спеціальні символи<br>';
        echo 'Система повторення<br>';
        echo '\w - найти всі входження усіх символів від a до z, A до Z, 0 до 9 і _<br>';
        echo '<pre>';
        print_r(preg_match_all('/[\w]/', $str, $matches)); // 23
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo '\W - найти всі входження які не є символами від a до z, A до Z, 0 до 9 і _<br>';
        echo '<pre>';
        print_r(preg_match_all('/[\W]/', $str, $matches)); // 13
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo '\d - найти всі входження які є цифрами<br>';
        echo '<pre>';
        print_r(preg_match_all('/[\d]/', $str, $matches)); // 3
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo '\D - найти всі входження які не є цифрами<br>';
        echo '<pre>';
        print_r(preg_match_all('/[\D]/', $str, $matches)); // 33
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo '\n - найти всі входження перенесення рядку<br>';
        $str = 'Masha is,  
        x -  z 
        123 _ beautiful';
        echo '<pre>';
        print_r(preg_match_all('/[\n]/', $str, $matches)); // 2
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo '\s - найти всі входження пробілів і перенесення рядку<br>';
        $str = "Masha is,  \r\n x -  z 123 _ beautiful";
        echo '<pre>';
        print_r(preg_match_all('/[\s]/', $str, $matches)); // 12
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo '\S - найти всі входження які не є пробілами і перенесення рядку<br>';
        $str = "Masha is,  \r\n x -  z 123 _ beautiful";
        echo '<pre>';
        print_r(preg_match_all('/[\S]/', $str, $matches)); // 24
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo '\t - найти всі входження які є табуляцією<br>';
        $str = "Masha\tis, x -  z 123 _ beautiful";
        echo '<pre>';
        print_r(preg_match_all('/[\t]/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        // part 2
        echo 'Знайти всі варіанти символів "as" або "a "(a+пробіл)';
        $str = 'Masha is, x -  z 123 _ beautiful';
        // (s|\s) - підмаска
        // | - або
        echo '<pre>';
        print_r(preg_match_all('/a(s|\s)/', $str, $matches)); // 2
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Знайти всі варіанти коли йде спочатку символ "a" а потім любий другий символ<br>';
        echo '<pre>';
        print_r(preg_match_all('/a./', $str, $matches)); // 3
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Знайти всі варіанти коли йде два пробіла і якийсь символ <br>';
        $str = 'Masha is,  123 _ beautiful';
        echo '<pre>';
        print_r(preg_match_all('/\s{2,}\w/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';
        echo 'Знайти всі варіанти коли йде від 2 до 4 пробіла і якийсь символ, але перед ним теж стоїть символ<br>';
        $str = 'Masha is,  123 _  x - z     very beautiful';
        echo '<pre>';
        print_r(preg_match_all('/[\S]\s{2,4}\w/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Система заперечення<br>';
        echo 'Знайти всі варіанти коли йде від 2 до 4 пробіла, перед якими стоять не пробіли і не символ кома <br>';
        // ^ - ні
        $str = 'Masha is,  123 _    x - z       very beautiful';
        echo '<pre>';
        print_r(preg_match_all('/[^,\s]\s{2,4}\w/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Знайти всі варіанти із початку рядку символів A-Z<br>';
        // ^ - пошук з самого початку рядка
        $str = 'Masha is,  123 _    x - z       very beautiful';
        echo '<pre>';
        print_r(preg_match_all('/^[A-Z]/', $str, $matches));
        echo '</pre>';
        echo '<pre>';
        print_r($matches);
        echo '</pre>';

        echo 'Знайти всі варіанти із кінця рядку символів A-Z<br>';
        // $ - пошук з самого початку рядка
        $str = 'Masha is,  123 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/[A-Z]$/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // L
        echo '</pre>';
        // + - один і більше разів
        echo 'Знайти всі варіанти із символів A-Z один і більше разів<br>';
        // $ - пошук з самого початку рядка
        $str = 'MaSHa is,  123 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/[A-Z]+/', $str, $matches)); // 3
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // [0] => M [1] => SH [2] => L
        echo '</pre>';

        echo 'Знайти всі варіанти коли йдуть 3 цифри в потім знак підчеплення, а між ними можить бути пробіл а можить і ні <br>';
        // * - нуль і більше разів
        $str = 'MaSHa is,  123 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/[\d]{3}\s*_/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // 123 _
        echo '</pre>';

        echo 'Знайти всі варіанти коли йдуть цифри, потім знак підчеплення, а між ними множить бути пробіл, а може і ні <br>';
        // * - нуль і більше разів
        $str = 'MaSHa is,  12345678 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/\d+\s*_/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // 12345678 _
        echo '</pre>';

        echo 'Жадність квантифікатора. ? - спроба захватити мінімум символів.<br>';
        echo 'Вивести всі символи до першого пробілу.<br>';
        $str = 'MaSHa is,  12345678 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match('/.+?\s+/', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';

        echo 'Вивести всі символи рядку.<br>';
        $str = 'MaSHa is,  12345678 _    x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/.+?\s+/U', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // MaSHa is,  12345678 _    x - z       very
        echo '</pre>';

        // u - мультибайтовий пошук
        echo 'Вивести всі символи українського алфавіту.<br>';
        $str = 'MaSHa is,  12345678 _ Маша привет   x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/[а-яА-Я\s]+/u', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // Маша привет
        echo '</pre>';
        // ui - мультибайтовий пошук, пошук букв верхнього і нижнього реєстру
        echo 'Вивести всі символи українського алфавіту.<br>';
        $str = 'MaSHa is,  12345678 _ Маша привет   x - z       very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/[а-я\s]+/ui', $str, $matches)); // 1
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // Маша привет
        echo '</pre>';

        // m - Прапор багаторядкового пошуку
        echo 'Вивести багаторядкового пошуку.<br>';
        $str = 'MaSHa is,  
        12345678 _ Маша привет   
        x - z       
        very beautifuL';
        echo '<pre>';
        print_r(preg_match_all('/^.+$/uim', $str, $matches)); // 4
        echo '</pre>';
        echo '<pre>';
        print_r($matches); // [0] => MaSHa is, [1] =>         12345678 _ Маша привет [2] =>         x - z [3] =>         very beautifuL
        echo '</pre>';

        // ----Special functions for Kidslox-----------------
        echo "Kidslox parse header - 'UserAgent'<br>";
        $str = 'Kidslox/6.10.2 (Phone; Android/12)';
        $match = preg_match('/^Kidslox\/([\d\.]+) \((Phone|Tablet); ([^)]+)\)$/is', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[3] : null); // Android/12
        echo '</pre>';

        $str = 'Kidslox/7.6.2 (Tablet; Android/9)';
        $match = preg_match('/^Kidslox\/([\d\.]+) \((Phone|Tablet); ([^)]+)\)$/is', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[3] : null); // Android/9
        echo '</pre>';

        $str = 'Kidslox/7.6.0 (com.kidslox.main; build:9.1; iOS 15.6.0) Alamofire/7.6.0';
        $match = preg_match('/^Kidslox\/([\d\.]+) \(com.kidslox.main; build:[\d\.]+; (iOS)[\s]([^)]+)\)/', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[2].'/'.$matches[3] : null); // iOS/15.6.0
        echo '</pre>';

        $str = 'Kidslox/7.7.0 (com.kidslox.main; build:3; iOS 14.4.0) Alamofire/4.9.1';
        $match = preg_match('/^Kidslox\/([\d\.]+) \(com.kidslox.main; build:[\d\.]+; (iOS)[\s]([^)]+)\)/', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[2].'/'.$matches[3] : null); // iOS/14.4.0
        echo '</pre>';

        $str = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1';
        $match = preg_match('/^Mozilla\/([\d\.]+) \((iPhone);([^)]+)\)([^)]+)\(([^)]+)\)[\s]Version\/([\d\.]+)/', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[2].'/'.$matches[6] : null); // iPhone/15.6
        echo '</pre>';

        $str = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6';
        $match = preg_match('/^Mozilla\/([\d\.]+) \((iPhone);([^)]+)\)([^)]+)\(([^)]+)\)[\s]Version\/([\d\.]+)/', $str, $matches);
        echo '<pre>';
        print_r(($match) ? $matches[2].'/'.$matches[6] : null); // iPhone/15.6
        echo '</pre>';

        echo 'Kidslox 2<br>';
        $str1 = 'Kidslox/6.10.2 (Phone; Android/12)';
        $str2 = 'Kidslox/7.6.2 (Tablet; Android/9)';
        $str3 = 'Kidslox/7.6.0 (com.kidslox.main; build:9.1; iOS 15.6.0) Alamofire/7.6.0';
        $str4 = 'Kidslox/7.7.0 (com.kidslox.main; build:3; iOS 14.4.0) Alamofire/4.9.1';
        $str5 = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1';
        $str6 = 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6';

        echo $this->parseOsVersionFromUserAgent($str1).'<br>';
        echo $this->parseOsVersionFromUserAgent($str2).'<br>';
        echo $this->parseOsVersionFromUserAgent($str3).'<br>';
        echo $this->parseOsVersionFromUserAgent($str4).'<br>';
        echo $this->parseOsVersionFromUserAgent($str5).'<br>';
        echo $this->parseOsVersionFromUserAgent($str6).'<br>';

        echo '<br><br><b>Magic methods</b>-------------------------------------------<br>';
        echo '<ul>
            <li>__construct() - </li>
            <li>__destruct() - </li>
            <li>__get() - </li>
            <li>__set() - </li>
            <li>__isset() - </li>
            <li>__unset() - </li>
            <li>__serialize() - </li>
            <li>__unserialize() - </li>
            <li>__toString() - </li>
            <li>__clone() - відповідальний за клонування об\'єктів у PHP. Метод __clone() буде автоматично визивтися при клонуванні об\'єкту.</li>
        </ul>';
        $user1 = new User('Taras', 'Moroz', 'Cherkasy');
        $user1->setId(1410);
        $user2 = clone $user1; // клонування обєкту $user1
        echo '<pre>';
        print_r($user1);
        print_r($user2);
        echo '</pre>';

        $user3 = new User('Taras', 'Moroz', 'Cherkasy');
        $user3->phone; // спроба звенркутися до закритої змінної класу, але перехвачується методом __get()
        $user3->phone = '+380981234567'; // спроба засетити дані до закритої змінної класу, але перехвачується методом __set()

        echo '<br><br><b>OOP - Interface</b>-------------------------------------------<br>';
        // один клас наслідує багато класів - php відмовився від такої реалізації і компенсував це інтерфейсами
        // Інтерфейс - по факту це просто шаблони, це структури які описують то які константи, а також методи повинен містити клас який буде реалізовувати інтерфейс.
        // Інтерфейс не повинен містити реалізацію вказаних методів.
        // В інтерфейсі можуть знаходитися тільки об'явлення методів, але не тіло самих ціх методів.
        $user = new User('Taras', 'Moroz', 'Cherkasy');
        $user->getFirstName();
        $user->getLastName();
        $user->getRole();

        // Інтерфейсі підтримують наслідування
        // для інтерфейсів так як і для абстрактних класів не можна створити екземпляр(об'єкт) класу.
        // Відмінність абстрактного класу від інтерфейсу полягає в тому що в інтерфейсі необхідно тіло усіх методів лишати пустим.

        // Абстрактний метод може містити реалізацію окремих методів.
        // Для класів не можливо багато наслідувань.
        // Для інтерійсів можливо багато наслідувань.

        echo '<br><br><b>OOP - Trait</b>-------------------------------------------<br>';
        // Trait(примісь) - для повторного використання у класах. Механізм забезпечення повторного використання нашого коду.
        // PHP- не підтримується багато наслідування
        // Trait схожий на клас і придназначений групуванню функціоналу, хорошо структурованим і послідуваним чином
        // Trait - схожий на інтерфейс, але із реалізацію методів.

        $obj = new myHelloSymfony();
        $obj->sayHello();
        $obj->saySymfony();

        echo '<br><br><b>OOP - Polymorphism</b>-------------------------------------------<br>';
        // Поліморфізм - слідство наслідування, це свойство наслідуючих класів мати одинакові методи які будуть працювати по різному в контексті об'єкту.
        // Різна поведінка одного і того самого методу у різних класах.
        // Поліморфізм використовується для створення модульних структур додатку і спрощення процедури розширення функціоналу.
        // Замість того щоб влаштовувати мішанину умовних виразів описуючі разні варіанти дій.
        // Можна створити взаємозамінні обєкти які будуть вибиратися в залежності від умов використання.
        $a = new A(); // Обєкт класу A
        $b = new B(); // Обєкт класу B
        $a->Call(); // виведення "Test from A"
        $b->Test(); // виведення "Test from B"
        $b->Call(); // Увага! Виведення "Test from B"!

        return $this->render('php/page.html.twig', [
            'title' => $title,
            'year' => date('Y'),
        ]);
    }

    /*
        private function myFirstFunction(тип_переданого_параметру передані_параметри): тип_повернутого_результату
        {
            дія над переданими параметрами

            return результат;
        }
    */

    // $n = 5 - не обвязковий переданий параметр.
    private function result(int $a, int $n = 5): int
    {
        return pow($a, $n);
    }

    private function sum(int &$a): int
    {
        $a = $a + 10;

        return $a;
    }

    // ...$items - не знаємо кількість переданих параметрів
    private static function outArguments(...$items)
    {
        foreach ($items as $arg) {
            echo $arg.'<br>';
        }
    }

    // кожен елемент переданого у ф-ю масиву $items перетворюється у змінну переданого параметра ф-ії
    private static function outArguments2($a, $b, $c, $d, $e, $f, $i)
    {
        echo $a.'<br>';
        echo $b.'<br>';
        echo $c.'<br>';
        echo $d.'<br>';
        echo $e.'<br>';
        echo $f.'<br>';
        echo $i.'<br>';
    }

    private function globalVar(): int
    {
        global $var; // глобальна змінна
        $var = 2;

        return $var;
    }

    private function count(): int
    {
        static $count; // статична змінна

        return ++$count;
    }

    private function formatSize(int $bytes): array
    {
        $kbytes = $bytes / 1024;
        $mbytes = $kbytes / 1024;
        $gbytes = $mbytes / 1024;

        // ф-ія поверне значення у вигляді масиву
        return [$bytes, $kbytes, $mbytes, $gbytes];
    }

    // ф-ія викликає саму себе декілька раз
    public function recursiya($counter)
    {
        if ($counter > 0) {
            echo ($counter--).'<br>';
            $this->recursiya($counter);
        } else {
            return;
        }
    }

    private function first()
    {
        return 'First function';
    }

    private function second()
    {
        return 'Second function';
    }

    private function odd(int $number): bool
    {
        return !(0 == $number % 2);
    }

    // повертає суму усіх переданих елементів
    private function sumNumbers(...$items): int
    {
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item;
        }

        return $sum;
    }

    private function parseOsVersionFromUserAgent(string $userAgent): ?string
    {
        if (preg_match('/^Kidslox\/([\d\.]+) \((Phone|Tablet); ([^)]+)\)$/is', $userAgent, $matches)) {
            return $matches[3];
        }
        if (preg_match('/^Kidslox\/([\d\.]+) \(com.kidslox.main; build:[\d\.]+; (iOS)[\s]([^)]+)\)/', $userAgent, $matches)) {
            return $matches[2].'/'.$matches[3];
        }
        if (preg_match('/^Mozilla\/([\d\.]+) \((iPhone);([^)]+)\)([^)]+)\(([^)]+)\)[\s]Version\/([\d\.]+)/', $userAgent, $matches)) {
            return $matches[2].'/'.$matches[6];
        }

        return null;
    }
}

// just interface
interface FirstInteface
{
    // Реалізація цього методу повинна бути в класі який реалізовує цей інтерфейс
    // Інтерфейс(і абстракний клас) не дозволяє створювати екземпляри(об'єкти) цього класу.
    // У кожному класі який буде підтримувати цей інтерфейс, повинні бути реалізовані всі методи які використовуються у даному інтерфейсі - це обов'язковоо.
    public function getFirstName(); // метод без його тіла.
}

interface SecondInterface
{
    public function getLastName(); // метод без його тіла.

    public function getRole(); // метод без його тіла.
}

// цей інтерфейс - ThirdInterface підтримує наслідування двох інтерфейсів FirstInteface і SecondInterface
interface ThirdInterface extends FirstInteface, SecondInterface
{
}

// Реалізація інтерфейсу у класі TestInteface.
// Один клас може реалізовувати декілька інтерфейсів

// class User implements FirstInteface, SecondInterface
class User implements ThirdInterface
{
    // цей клас(User) обов'язково повинен реалізувати усі методи описані у інтерфейсі
    private int $id;
    private string $firstName = 'Taras';
    private string $lastName = 'Moroz';
    private string $role = 'ROLE_ADMIN';
    private string $city;
    private string $phone;

    public function __construct($firstName, $lastName, $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->role = 'ROLE_USER';
        $this->city = $city;
    }

    // Магічні методи __get() і __set() призначені для доступу до закритих змінних класу. Вони перехвачують звернення до змінної.
    public function __get($name)
    {
        echo "You get {$name}<br>";
    }

    public function __set($name, $value)
    {
        echo "You set {$name} to {$value}<br>";
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    // Реалізація обов'язкового методу із інтерфейсу FirstInteface.
    public function getFirstName()
    {
        echo $this->firstName;
    }

    // Реалізація обов'язкового методу із інтерфейсу SecondInterface.
    public function getLastName()
    {
        echo $this->lastName;
    }

    // Реалізація обов'язкового методу із інтерфейсу SecondInterface.
    public function getRole()
    {
        echo $this->role;
    }

    // Метод працює з скопійованим об'єктом, а не з вихідним
    public function __clone()
    {
        $this->setId(0);
        //        echo 'Cloned';
    }
}
trait Hello
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

// Створення трейту
trait Symfony
{
    public function saySymfony()
    {
        echo 'Symfony!';
    }
}

class myHelloSymfony
{
    // використання трейтів
    use Hello;
    use Symfony;
}

class Person
{
    // Доступ до цієї константи здійснюється через клас н-д Person::COUNTRY
    public const COUNTRY = 'Ukraine';

    // Доступ до цієї змінної здійснюється через клас н-д Person::$name
    public static $name;

    // Доступ до цього методу здійснюється через клас н-д Person::getName()
    public static function getName()
    {
        return 'Hello '.self::$name; // не можна юзать $this->name;
    }
}

// Поліморфізм
class A
{
    // Виводить, функція якого класу була викликана
    public function Test()
    {
        echo "Test from A\n";
    }

    // Тестова функція — просто переадресовується на Test()
    public function Call()
    {
        $this->Test();
    }
}
class B extends A
{
    // Функція Test() для класу B
    public function Test()
    {
        echo "Test from B\n";
    }
}
