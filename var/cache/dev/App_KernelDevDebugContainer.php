<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXTwI3AR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXTwI3AR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXTwI3AR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXTwI3AR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXTwI3AR\App_KernelDevDebugContainer([
    'container.build_hash' => 'XTwI3AR',
    'container.build_id' => 'e0facacf',
    'container.build_time' => 1692694864,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXTwI3AR');
