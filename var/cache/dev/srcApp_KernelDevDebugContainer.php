<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8aF7k9k\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8aF7k9k/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8aF7k9k.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8aF7k9k\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8aF7k9k\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '8aF7k9k',
    'container.build_id' => 'c7134ba3',
    'container.build_time' => 1574017077,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8aF7k9k');