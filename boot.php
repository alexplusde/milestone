<?php

use Alexplusde\Milestone\Entry;


if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_milestone',
        Entry::class
    );
}
