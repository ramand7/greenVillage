<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0orr7eK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0orr7eK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0orr7eK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0orr7eK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0orr7eK\App_KernelDevDebugContainer([
    'container.build_hash' => '0orr7eK',
    'container.build_id' => 'eb342083',
    'container.build_time' => 1733124677,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0orr7eK');
