<?php
/**
 * Created by PhpStorm.
 * User: Vasya
 * Date: 21.12.2017
 * Time: 20:36
 */

namespace App;

/**
 * класс представления для использования шаблонизатора twig
 * @package App
 */
class TwigView
{

    use Magic;

    /**
     * метод отображает шаблон с данными
     * @param $template
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    /**
     * метод возвращает шаблон с данными
     * @param $temlate
     * @return mixed
     */
    public function render($temlate)
    {
        $loader = new \Twig_Loader_Filesystem(dirname($temlate));
        $twig = new \Twig_Environment($loader, ['debug' => true]); // ['debug' => true] это в принципе не нужно для нормальной работы
        $twig->addExtension(new \Twig_Extension_Debug()); // и эта строчка тоже, но они позволяют использовать
        // функцию {{ dump() }}, которая является аналагом var_dump(), что крайне удобно при отладке.

        return $twig->render(basename($temlate), $this->data);
    }

}