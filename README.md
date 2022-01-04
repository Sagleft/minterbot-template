# MinterBot Template

## Фичи

* подобие MVC структуры;
* .ENV через dotenv;
* что-то еще;

## Требования
* PHP >=7.0;

# Логика проекта

1. Подключаются библиотеки через composer;
2. создается экземпляр Handler;
3. Handler создает экземпляры Environment, Logic и User;
4. Environment загружает данные из .env;
5. Из скрипта Logic получает и обрабатывает запрос.

## Развертывание

Пример для проекта с именем project:

```
git clone https://github.com/Sagleft/minterbot-template.git project
cd project
cp .env.example .env
cp composer.json.example composer.json
composer update
cd controller/public_html
cp example.htaccess .htaccess
```

Далее внесите изменения в .env

Apache www directory: ``` controller\public_html ```.

## Copyright

Copyright (c) 2019 Sagleft.

---

![image](https://github.com/Sagleft/Sagleft/raw/master/image.png)

### :globe_with_meridians: [Telegram канал](https://t.me/+VIvd8j6xvm9iMzhi)
