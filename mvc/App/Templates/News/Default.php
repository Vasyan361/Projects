<!DOCTYPE html>

<html lang="ru">

    <head>
        <title>Новости</title>
    </head>

    <body>

        {% for article in news %}
            <a href="/Index/One/?id={{ article.id}}">
                <h1>{{ article.title }}</h1>
                <article>{{ article.lead }}</article>
                <em>
                    {{ article.author.fullName | default('Нет автора') }}
                </em>
            </a>
        {% endfor %}



    </body>
</html>