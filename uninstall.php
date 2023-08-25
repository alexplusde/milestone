<?php

// in der uninstall.php sollten Befehle ausgeführt werden, die alle Änderungen, die mit der Installation kamen, entfernen.

// Konfiguration entfernen
// rex_config::removeNamespace("milestone");

// Installierte Metainfos entfernen
// rex_metainfo_delete_field('art_milestone');
// rex_metainfo_delete_field('cat_milestone');
// rex_metainfo_delete_field('med_milestone');
// rex_metainfo_delete_field('clang_milestone');

// Zusäzliche Verzeichnisse entfernen, z.B.
// rex_dir::delete(rex_path::get('milestone'), true);

// YForm-Tabellen löschen (die YForm-Tabellendefinition wird gelöscht, nicht die Datenbank-Tabellen)
// if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
// rex_yform_manager_table_api::removeTable('rex_milestone');
// }

// Weitere Vorgänge
// ...
