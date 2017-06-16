console.clear();

// ## 0 Проверка диапазона
//
// Напишите код который б проверял длинну телефонного номера
// Длинна номера не должна быть не меньше 9 и не больше 11

// * Your code Start *
var phoneNumber = prompt('Введите ваш номер телефона: ');
if((phoneNumber.length  >= 9) && (phoneNumber.length  <= 11)) {
	console.info('Телефон ввеен верно');
} else {
	console.info('Телефон введен не верно');
}
// * Your code End *


// ## 1 Клонирование обьектов
//
// Склонируйте обьект objectA в objectB при помощи цикла

var objectA = {
  name: 'John',
  lastname: 'Dou',
  age: 50
}

var objectB = {};

// * Your code Start *
for (var keyA in objectA) {
	var keyB = keyA;
	objectB[keyB] = objectA[keyA];
}


// * Your code End *

// Переопределяем значения обьекта objectA
objectA.name = 'Chris';
objectA.lastname= 'Couer';
objectA.age = '45';

// Если обьект objectB склонирован, значения в нем меняться не будут
// Выводим значения склонированного обьекта для проверки
console.log(objectB.name); // John
console.log(objectB.lastname); // Dou
console.log(objectB.age); // 50


// ## 2 Ветвление
// При помощи конструкци switch/case выведете текущую дату
// Название месяца должно иметь вид строки
// Например = 14 Июня 2017

var date = new Date();
var day = date.getDate(); // Текущий день
var month = date.getMonth(); // Текущий месяц (от 0 до 11)
var year = date.getFullYear(); // Текущий год
var monthName = ''; // Переменная для значения

// * Your code Start *
switch (true) {
	case month == 0:
		monthName = 'Января';
		break;
	case month == 1:
		monthName = 'Февраля';
		break;
	case month == 2:
		monthName = 'Марта';
		break;
	case month == 3:
		monthName = 'Апреля';
		break;
	case month == 4:
		monthName = 'Мая';
		break;
	case month == 5:
		monthName = 'Июня';
		break;
	case month == 6:
		monthName = 'Июля';
		break;
	case month == 7:
		monthName = 'Августа';
		break;
	case month == 8:
		monthName = 'Сентября';
		break;
	case month == 9:
		monthName = 'Октября';
		break;
	case month == 10:
		monthName = 'Ноября';
		break;
	case month == 11:
		monthName = 'Декабря';
		break;
}


// * Your code End *

console.log(`Today is: ${day} ${monthName} ${year}`) // Пример: 14 Июня 2017



// ## 3 Взаимодействие с пользователем
//
// Запросите через prompt у пользователя его имя;
// Запрашивайте имя пользователя, пока одно из имен не будет совпадать с одним из массива users
// После того как пользователь введет имя которое есть в обьекте users, запросите у него пароль
// -- Если пароль введен не верно выведете alert об этом и вернитесь на повторый ввод имени
// -- Если пароль совпадает - вывести сообщение о том что пароль верный и прервите цикл

var users = [{
  name: 'Alex',
  password: 123
}, {
  name: 'Chris',
  password: 456
}, {
  name: 'Bill',
  password: 789
}];

// * Your code Start *
var check = false;
do {
 	var enteredName = prompt('Введите имя пользователя');
	for (var i=0; i < users.length; i += 1) {
		if (enteredName == users[i].name) {
			do {
				var enteredPassword = prompt('Введите пароль');
				if (parseInt(enteredPassword) !== users[i].password) {
					alert('Пароль введен не верно!');
				}
				else {
					alert('Пароль введен верно!');
					check = true;
				}
			} while (!check)
		}
	}
}while(!check);


// * Your code End *
