<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container41xsJay\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container41xsJay/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container41xsJay.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container41xsJay\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container41xsJay\App_KernelDevDebugContainer([
    'container.build_hash' => '41xsJay',
    'container.build_id' => '9ee80bd6',
    'container.build_time' => 1662538458,
], __DIR__.\DIRECTORY_SEPARATOR.'Container41xsJay');