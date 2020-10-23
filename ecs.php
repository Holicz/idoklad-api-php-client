<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use SlevomatCodingStandard\Sniffs\ControlStructures\JumpStatementsSpacingSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/src',
            __DIR__ . '/ecs.php',
        ]
    );

    $parameters->set(
        Option::SETS,
        [
            SetList::CLEAN_CODE,
            SetList::COMMON,
            SetList::DEAD_CODE,
            SetList::PHP_70,
            SetList::PHP_71,
            SetList::PSR_12,
        ]
    );

    $parameters->set(
        'skip',
        [
            NotOperatorWithSuccessorSpaceFixer::class => null,
            PhpdocSummaryFixer::class => null,
        ]
    );

    $services = $containerConfigurator->services();

    $services
        ->set(YodaStyleFixer::class)
        ->call(
            'configure',
            [
                [
                    'always_move_variable' => false,
                    'equal' => false,
                    'identical' => false,
                    'less_and_greater' => false,
                ],
            ]
        );

    $services
        ->set(PhpdocAlignFixer::class)
        ->call(
            'configure',
            [
                [
                    'align' => 'left',
                ],
            ]
        );

    $services->set(JumpStatementsSpacingSniff::class);
};
