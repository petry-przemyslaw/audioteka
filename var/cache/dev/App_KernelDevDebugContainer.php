<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCRTHBeN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCRTHBeN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCRTHBeN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCRTHBeN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCRTHBeN\App_KernelDevDebugContainer([
    'container.build_hash' => 'CRTHBeN',
    'container.build_id' => 'a167a151',
    'container.build_time' => 1717948348,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCRTHBeN');