<?php

/**
 * Рекомендуется не переименовывать таблицу, а создавать новую и работать с новой таблицей вместо старой.
 * Делается это для того, если вдруг придется откатить изменения кода, то не возникнет ошибок работы с БД.
 * Смысл в том, что структура БД должна соответствовать новому релизу и старому.
 * Так будет меньше проблем на продакшене. А в следующий релиз уже можно удалить старую таблицу.
 */
class m220624_062954_rename_frameworks_new_table extends CDbMigration
{
    public function up()
    {
        $this->renameTable('frameworks_new', 'framework_new');
    }

    public function down()
    {
        $this->renameTable('framework_new', 'frameworks_new');
    }

}