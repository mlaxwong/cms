<?php

namespace craft\migrations;

use Craft;
use craft\db\Migration;
use yii\base\ErrorException;

/**
 * The class name is the UTC timestamp in the format of mYYMMDD_HHMMSS_migrationName
 */
class m151209_000000_move_logo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $pathService = Craft::$app->getPath();
        $from = $pathService->getStoragePath().DIRECTORY_SEPARATOR.'logo';
        $to = $pathService->getRebrandPath().DIRECTORY_SEPARATOR.'logo';
        echo "    > Moving {$from} to {$to} ... ";
        rename($from, $to);
        echo "done\n";
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m151209_000000_move_logo cannot be reverted.\n";

        return false;
    }
}
