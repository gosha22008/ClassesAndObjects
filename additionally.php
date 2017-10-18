<?php

class News
{
    private $contents;

    function __construct($contents)
    {
        $this->contents = $contents;
    }

    public function getContents()
    {
        return $this->contents;
    }

}

$news1 = new News('--СМИ опубликовали фото корзины с колбасой от Сечина
    --Позиции ИГ у Дейр-эз-Зора удерживали боевики — выходцы из РФ и СНГ
    --Россия предложила Японии вместе построить мост от Хоккайдо до Сахалина
    --Губернатор Калифорнии надеется на урегулирование конфликта с РФ в суде
    --В Госдуме высказались против запрета на лампы накаливания мощнее 50 Вт;');
echo '<pre>';
echo $news1->getContents();
