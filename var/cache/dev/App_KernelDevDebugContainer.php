<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEJ6oLLt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEJ6oLLt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEJ6oLLt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEJ6oLLt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEJ6oLLt\App_KernelDevDebugContainer([
    'container.build_hash' => 'EJ6oLLt',
    'container.build_id' => '3b6e28f6',
    'container.build_time' => 1733010173,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEJ6oLLt');
