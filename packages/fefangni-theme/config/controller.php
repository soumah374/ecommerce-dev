<?php

return [
	'frontend' => [
		'catalog' => [
			'cache' => [
				'enable' => true,
			],
		],
	],
	'jobs' => [
		'catalog' => [
			'export' => [
				'sitemap' => [
					'location' => 'public/sitemap-catalog-%d.xml.gz',
				],
			],
		],
	],
];
