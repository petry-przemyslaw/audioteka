<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJdX7Eju\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJdX7Eju/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJdX7Eju.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJdX7Eju\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJdX7Eju\App_KernelDevDebugContainer([
    'container.build_hash' => 'JdX7Eju',
    'container.build_id' => 'f4a70162',
    'container.build_time' => 1718221979,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJdX7Eju');
