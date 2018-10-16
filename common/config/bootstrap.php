<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('root', dirname(dirname(__DIR__)));
Yii::setAlias('nodeModules', dirname(dirname(__DIR__)) . '/node_modules');

Yii::setAlias('frontendWeb', 'http://cosmetic.loc/');
Yii::setAlias('backendWeb', 'http://admin.cosmetic.loc/');