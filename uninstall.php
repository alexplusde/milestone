<?php

rex_config::removeNamespace("milestone");

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::removeTable('rex_milestone');
}
