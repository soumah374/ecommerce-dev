<?php

return [
    'index' => [
        'manager' => [
            'name' => 'MySQL',
            'sort' => [
                'name' => array(
                    'code' => 'name',
                    'invert' => false,
                    'sortattr' => 'product.label'
                ),
                '-name' => array(
                    'code' => 'name',
                    'invert' => true,
                    'sortattr' => 'product.label'
                ),
                'price' => array(
                    'code' => 'price',
                    'invert' => false,
                    'sortattr' => 'price.value'
                ),
                '-price' => array(
                    'code' => 'price',
                    'invert' => true,
                    'sortattr' => 'price.value'
                )
            ]
        ]
    ]
];
