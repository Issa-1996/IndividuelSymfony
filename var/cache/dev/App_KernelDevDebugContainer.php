<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7oOnQQQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7oOnQQQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7oOnQQQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7oOnQQQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7oOnQQQ\App_KernelDevDebugContainer([
    'container.build_hash' => '7oOnQQQ',
    'container.build_id' => '8c333cb4',
    'container.build_time' => 1614032488,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7oOnQQQ');
