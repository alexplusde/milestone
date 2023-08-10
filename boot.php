<?php

// Beispiel YOrm Model-Klasse registrieren, wenn das Addon mit einer eigenen YForm Tabelle kommt.

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_milestone',
        milestone::class
    );
}


// Prüfen, ob ein anderes Addon installiert ist, bspw. Cronjob-Addon
/*
if (rex_addon::get('cronjob')->isAvailable() && !rex::isSafeMode()) {
    rex_cronjob_manager::registerType('rex_cronjob_blaupause');
}
*/

// Beim Extension Point REX_YFORM_SAVED etwas ausführen
/*
rex_extension::register('REX_YFORM_SAVED', function (rex_extension_point $ep) {
    // Mein Code, oder meine Funktion / statische Methode aufrufen
});
*/
