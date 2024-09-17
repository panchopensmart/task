Приветствую!
это api для сервиса аналитики

Необходимый софт для работы с проектом:
- docker (если windows, то docker desktop)
- docker-compose

1. для Начала необходимо будет выполнить `docker-compose up --build` из корня проекта чтобы поднять контейнеры.
2. После настроить БД, сделать миграцию
3. Проверить работу api браузер/Постман [localhost:8000](http://localhost:8000/)

Разворачивание БД
1) `docker exec -it db bash`
2)  `mysql -u root -proot -e "CREATE DATABASE IF NOT EXISTS test_database;"` (создание бд)
3) `mysql -u root -proot test_database < /tmp/dump.sql` (миграция бд)

Проверка миграций БД
1) `mysql -u root -proot`
2) `show database;` (должна появиться бд test_database)
3) `USE test_database;`
4)  `SELECT * FROM test_table;` (должны отобразиться данные из таблицы)