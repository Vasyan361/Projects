<!DOCTYPE html>

<html lang="ru">

    <head>
        <title>Новости</title>
    </head>

    <body>

        <a href="/">
            <button>Назад</button>
        </a>

        <h1>{{ article.title }}</h1>
        <article>{{ article.lead }}</article>
        <em>
            {{ article.author.fullName | default('Нет автора') }}
        </em>

    </body>

</html>