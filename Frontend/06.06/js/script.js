console.clear();

// ## 0 Подключение файла script.js
//
// * Подключите этот файл в index.js
// * Что бы проверить подключен ли файл выведете в консоль фразу Hello world!
console.log('Hello world!');
// ## 1 Обьявление примитивных переменные
//
// * Обьявите 5 примитивных типов переменных, которые доступны в Javascript.
// * Присвойте им значения на свое усмотрение
// * Проверьте валидность кода через парсер
var numb = 2;
var str = "Andrew";
var boole = true;
var nule = null;
var undef = undefined;
// ## 2 Математические операции
//
// Создайте три переменные (значения сторон треугольник) с типом Number с значениями 7, 8, 9
// * Найдите периметр треугольника
// * Найдите полупериметр треугольника
// * Найдите радиус вписанной окружности в треугольник
// * Найдите радиус вписанной окружности в прямоугольный треугольник
// Результат всех четырех вычислений присвойте переменным и выведете в консоль с помошью функции console.info() с названием расчета
// Пример вывода в консоли: Square = 18
var a = 7;
var b = 8;
var c = 9;
var trianglePerimetr = a + b +c;
var triangleHalfPerimetr = trianglePerimetr / 2;
var tringleInCircleRadius = Math.sqrt(((triangleHalfPerimetr-a) * (triangleHalfPerimetr-b) * (triangleHalfPerimetr-c)) / triangleHalfPerimetr);
var d = Math.sqrt(Math.pow(a, 2)+Math.pow(b, 2));
var rectangulaHalfPerimetr = (a + b + d)/2;
var rectangularInCircleRadius = Math.sqrt(((rectangulaHalfPerimetr-a) * (rectangulaHalfPerimetr-b) * (rectangulaHalfPerimetr-d)) / rectangulaHalfPerimetr);
console.info('Периметр: ' + trianglePerimetr);
console.info('Полупериметр: ' + triangleHalfPerimetr);
console.info('Радиус вписанной окружности в треугольник: ' + tringleInCircleRadius);
console.info('Радиус вписанной окружности в прямоугольный треугольник: ' + rectangularInCircleRadius);
// ## 3 Названия переменных
//
// Создайте 5 пустых переменных и придумайте им "корректные" названия которые соотвецтвовали б их описанию
// * Переменная для названия емейла пользователя
// * Переменная для текущей даты
// * Переменная для массива фамилий пользователей
// * Переменная для значения "по умолчанию"
// * Переменная которая описывала б значение правой верхней границы html элемента
var userEmail;
var currentDate;
var usersLastName;
var defaultValue;
var topRightBorder;
// ## 4 Работа с обьектами
//
// * Создайте обьект ""Пользователь" (С корректным названием) с ключем и значением "Вася"
// * Измените значение ключа на "Петя"
// * Выведите в консоли значение ключа обьекта из файла index.phtml
var user = {
	name: 'Вася'
};
user.name = 'Петя';
console.info(user.name);
document.write("<p>Пользователя зовут: " + user.name + "</p>");
// ## 5 Преобразование типов
//
// Обьясните почему консоль выводит такой результат. Ответ запишите в комментарии напротив строки
console.info('6' - 3); //для выполнения математической операции строка приводится к численному значению
console.info('20' + 10); //знак + в данном случае воспринимается как конкатенация строк: 10 преобразовывается в строку и припысывается к строке 20
console.info('10' + - 2); // аналочично второму примеру
console.info("4px" - 2); // для выполнения  математической операции строка должна быть преобразована в число, но поскольку она содержит буквенные значения, выражение возвратило значение, которое не свляется числом
console.info(15 / 0); // результат деления числа на ноль - число стресяшееся в бесконечность
console.info(4 + 5 + "px"); // слево на право - сначала сумируются 4 и 5, следующий плюс - конкатенация строк
console.info(+""); // эквивалетно var a = 0; a+=""; к нулю добавляется приведенная пустая строка
console.info(NaN === NaN); //false, потому что Nan может быть любого типа, которое не число, === сравнивает не только числа, а и типы
console.info(null == undefined); // после привидения типов оба значения равны (пустые), сответственно отвут true
