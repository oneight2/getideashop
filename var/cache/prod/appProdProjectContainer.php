<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4tip1z1\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4tip1z1/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4tip1z1.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4tip1z1\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4tip1z1\appProdProjectContainer([
    'container.build_hash' => '4tip1z1',
    'container.build_id' => '2749cbd9',
    'container.build_time' => 1607152347,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4tip1z1');
