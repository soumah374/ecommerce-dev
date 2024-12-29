<?php

return [
	'jqadm' => [
		'url' => [
			'copy' => [
				'target' => 'aimeos_shop_jqadm_copy'
			],
			'create' => [
				'target' => 'aimeos_shop_jqadm_create'
			],
			'delete' => [
				'target' => 'aimeos_shop_jqadm_delete'
			],
			'get' => [
				'target' => 'aimeos_shop_jqadm_get'
			],
			'save' => [
				'target' => 'aimeos_shop_jqadm_save'
			],
			'search' => [
				'target' => 'aimeos_shop_jqadm_search'
			],
		],
	],
	'jsonadm' => [
		'url' => [
			'target' => 'aimeos_shop_jsonadm_get',
			'config' => [
				'absoluteUri' => true,
			],
			'options' => [
				'target' => 'aimeos_shop_jsonadm_options',
				'config' => [
					'absoluteUri' => true,
				],
			],
		],
	],
];
