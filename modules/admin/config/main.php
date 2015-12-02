<?php

return [
    'modules' => [
        'import' => [
            'class' => 'lo\modules\import\modules\admin\Module',
            //'defaultRoute' => 'item'
			'components'=>[
                'csvImporter'=>[
                    'class'=> \lo\modules\import\components\CsvImporter::className(),
                    'allowedModels'=>[
                        \lo\modules\love\models\Author::className(),
                        \lo\modules\page\models\Page::className(),
                        \lo\modules\love\models\Lib::className(),
                        \lo\modules\love\models\Prim::className(),
                        \lo\modules\love\models\Aphorism::className(),
					],
                ],
            ],
        ],
    ],
];