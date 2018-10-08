<?php

namespace App\Command;


use Redis;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Faker;

class Generator extends Command
{
    protected function configure(): void
    {
        $this->setName('data:generator')
            ->setDescription('Generator data');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('<info>START</info>');

        /*$redis = new Redis();
        $redis->connect('127.0.0.1');*/

        //$faker = Faker\Factory::create();

        $output->writeln('<info>FINISH</info>');
    }
}