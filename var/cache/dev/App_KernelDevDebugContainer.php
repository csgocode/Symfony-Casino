<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKrw6oRd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKrw6oRd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKrw6oRd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKrw6oRd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKrw6oRd\App_KernelDevDebugContainer([
    'container.build_hash' => 'Krw6oRd',
    'container.build_id' => '0b206d07',
    'container.build_time' => 1700636701,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKrw6oRd');
