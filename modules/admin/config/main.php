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
                        \lo\modules\page\models\Page::className(),                    
					],
                ],
            ],
        ],
    ],
];