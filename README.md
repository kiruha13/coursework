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

*chattable*
username,message,time
*contacttable*
fullname,email,subject,message,time
*counter*
visit id
*exptable*
fname,password,email
*paymenttable*
fname,password,cred,coursename,time
*raitingtable*
fname,ui,perfomance,design,usability
*reviewtable*
username,comment,time
## 6. HTTP запросы/ответы
### Начальная страница
GET / HTTP/1.1
<br> Host: f0767281.xsph.ru
<br> Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
<br> Upgrade-Insecure-Requests: 1
<br> User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, <br> like Gecko) Chrome/109.0.0.0 Safari/537.36

<br>HTTP/1.1 200 OK
<br> Connection: keep-alive
<br> Content-Encoding: gzip
<br> Content-Type: text/html; charset=UTF-8
<br> Date: Tue, 17 Jan 2023 07:25:07 GMT
<br> Server: openresty
<br> Transfer-Encoding: chunked
<br> Vary: Accept-Encoding

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
