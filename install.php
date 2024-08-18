<?php

/* Tabelle anlegen und Index setzen */
rex_sql_table::get(rex::getTable('milestone'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('title', 'varchar(191)', false, ''))
    ->ensureColumn(new rex_sql_column('description', 'text'))
    ->ensureColumn(new rex_sql_column('image', 'text'))
    ->ensureColumn(new rex_sql_column('date', 'date'))
    ->ensureColumn(new rex_sql_column('status', 'tinyint(1)'))
    ->ensureColumn(new rex_sql_column('createdate', 'datetime'))
    ->ensureColumn(new rex_sql_column('createuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'datetime'))
    ->ensureColumn(new rex_sql_column('updateuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('uuid', 'varchar(36)'))
    ->ensureIndex(new rex_sql_index('uuid', ['uuid']))
    ->ensureIndex(new rex_sql_index('status', ['status']))
    ->ensureIndex(new rex_sql_index('date', ['date']))
    ->ensure();

/* Tablesets aktualisieren */

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'install/rex_milestone.tableset.json')));
    rex_yform_manager_table::deleteCache();
}
