<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTcwsV3A\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTcwsV3A/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTcwsV3A.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTcwsV3A\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTcwsV3A\App_KernelDevDebugContainer([
    'container.build_hash' => 'TcwsV3A',
    'container.build_id' => '68c2a6a8',
    'container.build_time' => 1671708916,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTcwsV3A');
