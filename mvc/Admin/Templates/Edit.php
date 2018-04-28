<!doctype html>
<html lang="ru">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Редактирование новости</title
        >
    </head>

    <body>

        <h1><?php if (isset($article)):
                echo 'Редактирование новости';
            else:
                echo 'Создать Новость';
            endif; ?></h1>
        <?php
        if (!empty($errors)):
            foreach ($errors as $error): ?>
                <h3>Ошибка:</h3>
                <?php echo $error->getMessage(); ?>

                <?php
            endforeach;
        endif; ?>

        <form action="/Admin/Save" method="post">

            <input type="hidden" name="id" value="<?php
            if (isset($article->id)):
                echo $article->id;
            endif; ?>" >
            <br>

            <h3>Заголовок новости</h3>
            <input type="text" name="title" size="50" placeholder="Введите заголовок" value="<?php
            if (isset($article->title)):
                echo $article->title;
            endif; ?>">
            <br>

            <h3>Текст новости</h3>
            <textarea name="lead" placeholder="Введите новость" cols="50" rows="20"><?php
                if (isset($article->lead)):
                    echo $article->lead;
                endif; ?></textarea>
            <br>
            <input type="submit">

        </form>

    </body>

</html>