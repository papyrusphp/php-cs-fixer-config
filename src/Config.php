<?php

declare(strict_types=1);

namespace Papyrus\PhpCsFixerConfig;

use PhpCsFixer\Config as PhpCsFixerConfig;

final class Config extends PhpCsFixerConfig
{
    private array $overrideRules = [];

    public static function create(array $overrideRules = []): self
    {
        $config = new self();
        $config->overrideRules = $overrideRules;

        return $config;
    }

    public function getRules(): array
    {
        return [
            ...[
                '@PhpCsFixer' => true,
                '@Symfony' => true,
                '@PER' => true,
                'binary_operator_spaces' => false,
                'concat_space' => ['spacing' => 'one'],
                'declare_strict_types' => true,
                'global_namespace_import' => [
                    'import_classes' => true,
                    'import_constants' => null,
                    'import_functions' => null,
                ],
                'multiline_whitespace_before_semicolons' => false,
                'phpdoc_align' => ['align' => 'left'],
                'phpdoc_order' => true,
                'php_unit_test_class_requires_covers' => false,
                'single_line_throw' => false,
                'trailing_comma_in_multiline' => [
                    'elements' => ['arrays', 'arguments', 'parameters'],
                ],
                'void_return' => true,
                'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
            ],
            ...$this->overrideRules,
        ];
    }
}
