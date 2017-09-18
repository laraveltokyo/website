<?php

namespace LaravelTokyo\Entrance\Controllers;

use LaravelTokyo\Entrance\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class ApplicationController extends BaseController
{
    public function getTop()
    {
    	$events = [
    	];

    	$events_old = [
    		[
    			'datetime_html' => '2016.4.9(土) 13時〜18時',
    			'content_html' => 'dots(渋谷)にて、「Laravel 作戦 Kaigi #7」を開催します。<a href="http://eventdots.jp/event/583702">イベント詳細・申し込みはこちら</a>から。',
    		],
    	];

    	$news = [
    		[
				'date_html' => '2017.8.30',
				'content_html' => 'Laravel 5.5がリリースされました！',
			],
    		[
				'date_html' => '2017.1.24',
				'content_html' => 'Laravel 5.4がリリースされました！',
			],
    		[
				'date_html' => '2016.8.23',
				'content_html' => 'Laravel 5.3がリリースされました！',
			],
    		[
				'date_html' => '2015.12.21',
				'content_html' => 'Laravel 5.2がリリースされました！',
			],
    		[
				'date_html' => '2015.11.1',
				'content_html' => 'Laravel 5.1 体験ハンズオンセミナーの<a href="http://jumilla.me/laravel-51-handson">イベントレポート</a>と<a href="http://jumilla.me/lessons/laravel-51-handson">資料</a>が公開されました。',
			],
    		[
				'date_html' => '2015.6.9',
				'content_html' => 'Laravel 5.1がリリースされました！',
			],
    		[
				'date_html' => '2015.3.25',
				'content_html' => '3/13に21cafeで行われた<a href="http://geechs-magazine.com/tag/event/20150325">「Laravel Tokyo Camp Vol.2」のイベントレポート</a>が公開されました。',
			],
    		[
				'date_html' => '2015.2.5',
				'content_html' => '
					Laravel 5が正式にリリースされました。<br>
					<a href="http://laravel.com">公式Webサイト</a>のデザインもスッキリしました！
				',
			],
		];

		$news_old = [
    		[
				'date_html' => '2014.12.20',
				'content_html' => '11/20に21cafeで行われた<a href="http://geechs-magazine.com/4991">「Laravel Tokyo Camp Vol.1」のイベントレポート</a>が公開されました。',
			],
    		[
				'date_html' => '2014.08.01',
				'content_html' => 'Laravel Tokyoサイトをオープンしました。Laravel Tokyoはメンバーが自由にイベントを企画・開催できるユーザーグループです。',
			],
		];

		return addon()->view('index', compact('events', 'news'));
    }
}
