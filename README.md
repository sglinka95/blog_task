# Blog Task

Zadanie rekrutacyjne polegające na utworzeniu uproszczonej wersji bloga według wytycznych.

Wytyczne:
- każdy post zawiera tytuł, datę utworzenia oraz aktualizacji
- każdy post może posiadać nieskończenie wiele komentarzy
- każdy komentarz zawiera nazwę użytkownika (jako zwykły string), treść oraz datę utworzenia
- powinna istnieć podstrona zawierającą tabelę z wylistowanymi wszystkimi postami (1 wiersz = 1 
post); Kolumny tabeli: liczba porządkowa, tytuł postu (jako link, po kliknięciu przenosi nas do 
podstrony postu)
- powinna istnieć podstrona postu. Na tej podstronie powinien znajdować się tytuł danego postu oraz 
tabela zaw. jego komentarze (wyświetlamy maksymalnie 10 komentarzy, reszty nie pokazujemy, 
sortowane od najnowszego do najstarszego); Kolumny tabeli: liczba porządkowa, nazwa 
użytkownika, treść, data utworzenia
- powinna istnieć komenda konsolowa (artisan), która będzie usuwała komentarze starsze niż x dni (x 
podawane jest przez użytkownika) i wyświetlała w konsoli informację o ilości usuniętych komentarzy
- powinien istnieć seeder, który wypełni bazę postami (50 postów) oraz komentarzami (od 6 do 20 
komentarzy per post)

## Instalacja
- Clone project
- Go to the folder application using cd command on your cmd or terminal
- Run ```composer install``` on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type ```copy .env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
- Run ```php artisan key:generate```
- Run ```php artisan migrate```
- Run ```php artisan db:seed```
- Run ```php artisan serve```
- Go to http://localhost:8000/

## Usage
To delete comments older than X days, run the command below.

```
php artisan comments:delete {X days}
```

Example:

```bash
php artisan comments:delete 3
```
