<?php

declare(strict_types=1);

namespace Antidot\Cli\Container\Config;

use Antidot\Cli\Application\Command\ShowContainer;
use Antidot\Cli\Application\Console;
use Antidot\Cli\Container\ConsoleFactory;
use Antidot\Cli\Container\ShowContainerCommandFactory;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'console' => [
                'commands' => [
                    ShowContainer::NAME => ShowContainer::class,
                ],
                'helper-sets' => [],
                'dependencies' => [
                    'factories' => [
                        Console::class => ConsoleFactory::class,
                        ShowContainer::class => ShowContainerCommandFactory::class,
                    ],
                ],
            ],
        ];
    }
}
