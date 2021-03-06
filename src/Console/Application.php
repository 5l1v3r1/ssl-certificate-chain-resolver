<?php

namespace Spatie\CertificateChain\Console;

use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    public function __construct()
    {
        parent::__construct('Ssl certificate chain resolver', '2.0.0');

        $this->add(new ResolveCommand());
    }

    public function getLongVersion(): string
    {
        return parent::getLongVersion().' by <comment>Spatie</comment>';
    }
}
