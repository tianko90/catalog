# Филмов каталог #

Това е примерен (не завършен) прект, целящ да покаже част от знанията ми в Web програмирането.
Използан framework - CodeIgniter v2.0


## Инсталация ##

1. Свалате проекта в Web root-а на HTTP сървъра си
2. Създайте празна база данни в MySQL
3. Import-нете файла `database.sql`
4. Стартирайте [http://localhost/catalog](http://localhost/catalog)


## Завършени функционалности ##

1. Собствен централен контролер
	* Наследява CI_Controller и се наследява от всички останали
	* `render` метод с централен layout файл
	* Възможност за вмъкване на различни JavaScript файлове за всеки action
3. Регистрация на потребители
	* JavaScript валидация на данните
	* PHP валидация на данните
4. Login страница
	* Запазване на потребителските данни в сесията
	* Показване на потребителското име в layout файла
5. Добавяне на филми
	* JavaScript валидация на данните
6. Изход от системата


## Предвидени функционалности ##

1. PHP валидация при добавяне на филм
2. Извеждане/редакция/изтриване на филми
3. Контрол на достъпа до различните точки на сайта
4. Качване на постер
5. ...