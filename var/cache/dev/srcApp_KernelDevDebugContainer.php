<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerReTzXje\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerReTzXje/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerReTzXje.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerReTzXje\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerReTzXje\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ReTzXje',
    'container.build_id' => '933fc79d',
    'container.build_time' => 1574156062,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerReTzXje');
