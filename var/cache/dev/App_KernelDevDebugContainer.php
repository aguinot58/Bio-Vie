<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2Tl5tN3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2Tl5tN3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2Tl5tN3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2Tl5tN3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2Tl5tN3\App_KernelDevDebugContainer([
    'container.build_hash' => '2Tl5tN3',
    'container.build_id' => 'bab5f533',
    'container.build_time' => 1663163898,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2Tl5tN3');
