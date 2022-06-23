<?php

class m220622_101707_create_frameworks_new_table extends CDbMigration
{
    /**
     * Создание таблицы frameworks_new, более корректную, чем прошлая frameworks
     *
     * InnoDB - одна из выбираемых подсистем низкого уровня в СУБД MySQL
     * CHARSET (character set) - набор используемых символов
     * COLLATE (collation) - набор правил для сравнения символов в наборе
     * AUTO_INCREMENT - функция автоматического увеличения, по умолчанию 1 (можно задать другое знач.)
     */
    public function up()
    {
        $this->createTable(
            'frameworks_new',
            [
                'id' => 'pk',
                'title' => 'VARCHAR(255) NOT NULL COMMENT "Название фреймворка"',
                'content' => 'text COMMENT "Описание фреймворка"',
            ],
            'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE utf8_general_ci AUTO_INCREMENT=1');
    }

    /**
     * Удаление таблицы frameworks
     */
    public function down()
    {
        $this->dropTable('frameworks_new');
    }

}