<?php
/**
 * Проверяет валидность репозитория миграций
 *
 * PHP version 5
 *
 * @package
 * @author  Eugene Kurbatov <ekur@i-loto.ru>
 */

namespace DBMigrator\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Check extends BaseCommand
{
	protected function configure()
	{
		$this->setName("check")
			->setDescription("Check the repository migration.")
			->setHelp(sprintf('%sCheck the repository migration.%s', PHP_EOL, PHP_EOL));
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		throw new \Exception("Not implemented yet");
	}
}
