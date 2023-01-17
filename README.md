# Курсовой проект
## Текст задания
### Цель работы
Разработать сайт для курсов по изучению программирования. Должна быть возможность войти в личный кабинет и просмотра там купленных курсов. Также реализовать вход под администратором.
## Ход работы
- Пользовательский интерфейс
- Пользовательские сценарии работы
- API сервера и хореография
- Структура базы данных
- Алгоритмы
## 1. Пользовательский интерфейс
### [Пользовательский интерфейс 1](https://www.figma.com/file/9RYDiFVtneFOJ6pE7EdMML/Coursework?node-id=0%3A1&t=ePzWRuynf3lDj4aL-1)
### [Пользовательский интерфейс 2](https://www.figma.com/file/EPN7V8HedocpehiebGK5Wl/Coursework2?node-id=0%3A1&t=dm9A958TOrySrBwX-1)

## 2. Пользовательские сценарии работы

Пользователь попадает на главную страницу *index.php*. Там есть возможность изучить всю информацию о нашей компании и учителях, а также подписаться на рассылку и отправить предложение по улучшению сайта. Далее регистрируется или заходит под уже зарегистрированным именем. Если данные корректны, то он получает доступ к профилю, где может посмотреть купленные курсы и другую информацию об аккаунте. Если пользователь забыл пароль, есть возможность его восстановить.

## 3. API сервера и хореография

[Создание нового чата](https://imgur.com/a/YtyftN1)

[Авторизация](https://imgur.com/a/WY72i9b)

## 4. Структура БД

*chats*
| Название | Тип | Длина | NULL | Описание |
| :------: | :------: | :------: | :------: | :------: |
| **id** | INT | - | - | id канала |
| **chatname** | VARCHAR | 40 | - | имя чата |
| **type** | VARCHAR | 40 | - | тип чата |
| **login** | VARCHAR | 40 | - | имя того, кто создал чат |
| **messtime** | TEXT | - | - | время последнего сообщения |

*messages*
| Название | Тип | Длина | NULL | Описание |
| :------: | :------: | :------: | :------: | :------: |
| **id** | INT | - | - | id сообщения |
| **chatid** | INT | - | - | id чата |
| **text** | TEXT | - | - | текст сообщения |
| **login** | VARCHAR | 40 | - | имя пользователя |
| **dtime** | TEXT | - | - | время сообщения |

*permissions*
| Название | Тип | Длина | NULL | Описание |
| :------: | :------: | :------: | :------: | :------: |
| **id** | INT | - | - | id сообщения |
| **chat_id** | VARCHAR | 40 | - | id чата |
| **login** | VARCHAR | 40 | - | имя пользователя |

*users*
| Название | Тип | Длина | NULL | Описание |
| :------: | :------: | :------: | :------: | :------: |
| **id** | INT | - | - | id пользователя |
| **login** | VARCHAR | 40 | - | имя пользователя |

## 5. Алгоритмы
[Создание нового чата](https://imgur.com/a/NtRkMxa)
[Приватный чат](https://imgur.com/a/sJEAJX9)
## 6. HTTP запросы/ответы
### Начальная страница
<br>GET /chat_src/index.php HTTP/1.1
<br>Host: localhost
<br>Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
<br>sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"
<br>sec-ch-ua-mobile: ?0
<br>sec-ch-ua-platform: "Windows"
<br>Upgrade-Insecure-Requests: 1
<br>User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36

<br>HTTP/1.1 200 OK
<br>Cache-Control: no-store, no-cache, must-revalidate
<br>Connection: Keep-Alive
<br>Content-Length: 1958
<br>Content-Type: text/html; charset=UTF-8
<br>Date: Fri, 13 Jan 2023 12:47:38 GMT
<br>Expires: Thu, 19 Nov 1981 08:52:00 GMT
<br>Keep-Alive: timeout=5, max=97
<br>Pragma: no-cache
<br>Server: Apache/2.4.54 (Win64) PHP/8.1.10
<br>X-Powered-By: PHP/8.1.10

### Проверка логина
<br>POST /chat_src/login.php HTTP/1.1
<br>Host: localhost
<br>Accept: */*
<br>Content-Type: application/x-www-form-urlencoded
<br>sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"
<br>sec-ch-ua-mobile: ?0
<br>sec-ch-ua-platform: "Windows"
<br>User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
<br>X-Requested-With: XMLHttpRequest

<br>HTTP/1.1 200 OK
<br>Cache-Control: no-store, no-cache, must-revalidate
<br>Connection: Keep-Alive
<br>Content-Length: 0
<br>Content-Type: text/html; charset=UTF-8
<br>Date: Fri, 13 Jan 2023 17:54:23 GMT
<br>Expires: Thu, 19 Nov 1981 08:52:00 GMT
<br>Keep-Alive: timeout=5, max=100
<br>Pragma: no-cache
<br>Server: Apache/2.4.54 (Win64) PHP/8.1.10
<br>X-Powered-By: PHP/8.1.10

### Добавление канала

<br>POST /chat_src/add_chat.php HTTP/1.1
<br>Host: localhost
<br>Accept: text/html, */*
<br>Content-Type: application/x-www-form-urlencoded
<br>sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"
<br>sec-ch-ua-mobile: ?0
<br>sec-ch-ua-platform: "Windows"
<br>User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
<br>X-Requested-With: XMLHttpRequest

<br>HTTP/1.1 200 OK
<br>Connection: Keep-Alive
<br>Content-Length: 1
<br>Content-Type: text/html; charset=UTF-8
<br>Date: Fri, 13 Jan 2023 17:56:50 GMT
<br>Keep-Alive: timeout=5, max=100
<br>Server: Apache/2.4.54 (Win64) PHP/8.1.10
<br>X-Powered-By: PHP/8.1.10

## 7. Значимые фрагменты кода
### реализация чата в панели администратора 
``` js
function displaychat() 
    {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("chats").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "chatdisplay.php", true);
        xmlhttp.send();
    }
   setInterval(displaychat,10);
```
