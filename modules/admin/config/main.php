<?php

return [
    'modules' => [
        'import' => [
            'class' => 'lo\modules\import\modules\admin\Module',
            //'defaultRoute' => 'item'
			'components'=>[
                'csvImporter'=>[
                    'class'=> \lo\modules\import\components\CsvImporter::class,
                    'allowedModels'=>[
                        \lo\modules\love\models\Author::class,
                        \lo\modules\page\models\Page::class,
                        \lo\modules\love\models\Lib::class,
                        \lo\modules\love\models\Prim::class,
                        \lo\modules\love\models\Aphorism::class,
					],
                ],
            ],
        ],
    ],
];