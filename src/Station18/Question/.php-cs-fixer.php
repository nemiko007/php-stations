<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_useless_else' => true,
        'ordered_class_elements' => true,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
