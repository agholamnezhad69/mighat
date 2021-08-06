<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'font_path' => base_path('public/mighat_asset/fonts/'),
	'font_data' => [
		'farsi' => [
			'R'  => 'iransansweb.ttf',
			'B'  => 'iransansweb.ttf',
			'useOTL' => 0xFF,
			'useKashida' => 75,
		],
		'en' => [
			'R'  => 'Gothic/Century Gothic.ttf',
			'B'  => 'Gothic/GOTHICB.ttf',
		]
	]
];
