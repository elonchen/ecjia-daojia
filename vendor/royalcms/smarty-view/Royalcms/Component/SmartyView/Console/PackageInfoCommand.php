<?php namespace Royalcms\Component\SmartyView\Console;

use Smarty;
use Royalcms\Component\Console\Command;
use Royalcms\Component\SmartyView\SmartyFactory;

/**
 * Class SmartyInfoCommand
 *
 */
class PackageInfoCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'ytake:smarty-package-info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'information about ytake/laravel-smarty';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->line('<info>Smarty</info> version <comment>' . Smarty::SMARTY_VERSION . '</comment>');
        $this->line('<info>ytake/laravel-smarty</info> version <comment>' . SmartyFactory::VERSION . '</comment>');
    }
}
