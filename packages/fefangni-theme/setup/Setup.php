<?php

namespace Aimeos\fefangnitheme;

class Setup
{
    private $context;
    private $setup;

    public function __construct(\Aimeos\MShop\Context\Item\Iface $context, \Aimeos\MW\Setup\DBSchema\Iface $setup)
    {
        $this->context = $context;
        $this->setup = $setup;
    }

    public function migrate()
    {
        // Migration du schéma si nécessaire
        $this->setupSchema();
        
        // Installation des données de démo
        $this->setupData();
    }

    protected function setupSchema()
    {
        $ds = DIRECTORY_SEPARATOR;
        $files = array(
            'customer',
            'catalog',
            'media'
        );

        foreach($files as $file) {
            $filepath = __DIR__ . $ds . 'default' . $ds . 'schema' . $ds . $file . '.php';
            if(file_exists($filepath)) {
                include_once $filepath;
            }
        }
    }

    protected function setupData()
    {
        $ds = DIRECTORY_SEPARATOR;
        $files = array(
            'demo-products',
            'demo-categories'
        );

        foreach($files as $file) {
            $filepath = __DIR__ . $ds . 'default' . $ds . 'data' . $ds . $file . '.php';
            if(file_exists($filepath)) {
                include_once $filepath;
            }
        }
    }
} 