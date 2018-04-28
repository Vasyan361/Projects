<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [
                'title' => 'Random Access Memories',
                'year' => '2013',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/1767585/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/1767585\'>Random Access Memories</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'TRON: Legacy Reconfigured',
                'year' => '2011',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/5082338/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/5082338\'>TRON: Legacy Reconfigured</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Alive 2007',
                'year' => '2007',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/36875/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/36875\'>Alive 2007</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Musique Vol 1',
                'year' => '2006',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/169252/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/169252\'>Musique Vol 1</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Human After All',
                'year' => '2005',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/34597/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/34597\'>Human After All</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Daft Club',
                'year' => '2003',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/45222/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/45222\'>Daft Club</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Discovery',
                'year' => '2001',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/35654/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/35654\'>Discovery</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'DIGITAL LOVE',
                'year' => '2001',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49457/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49457\'>DIGITAL LOVE</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Homework',
                'year' => '1997',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/35598/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/35598\'>Homework</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Starboy',
                'year' => '2016',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/3923690/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/3923690\'>Starboy</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Get Lucky',
                'year' => '2013',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/1778467/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/1778467\'>Get Lucky</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Robot Rock',
                'year' => '2005',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/48463/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/48463\'>Robot Rock</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Something About US (Love Theme From Interstella)',
                'year' => '2003',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/31916/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/31916\'>Something About US (Love Theme From Interstella)</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Harder Better Faster Stronger',
                'year' => '2001',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49487/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49487\'>Harder Better Faster Stronger</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Alive 1997',
                'year' => '2001',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/45347/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/45347\'>Alive 1997</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Aerodynamic',
                'year' => '2001',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/36279/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/36279\'>Aerodynamic</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'One More Time',
                'year' => '2000',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/36262/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/36262\'>One More Time</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Revolution 909',
                'year' => '1998',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49386/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49386\'>Revolution 909</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Burnin\'',
                'year' => '1997',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49367/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49367\'>Burnin\'</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'Around The World',
                'year' => '1996',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49357/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49357\'>Around The World</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ],
            [
                'title' => 'DA FUNK',
                'year' => '1995',
                'code' => '<iframe frameborder="0" style="border:none;width:900px;height:600px;" width="900" height="600" src="https://music.yandex.ru/iframe/#album/49356/hide/title/">Слушайте <a href=\'https://music.yandex.ru/album/49356\'>DA FUNK</a> — <a href=\'https://music.yandex.ru/artist/13905\'>Daft Punk</a> на Яндекс.Музыке</iframe>'
            ]
        ]);
    }
}
