<?php
declare(strict_types=1);

namespace DosFarma\MigrationsBundle\DependencyInjection\Compiler;

use DosFarma\MigrationsBundle\Command\UpCommand;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class UpCommandPass extends AbstractCommandPass
{
    public function process(ContainerBuilder $container): void
    {
        $this->addCommandDefinition(UpCommand::class, $container);
    }
}
