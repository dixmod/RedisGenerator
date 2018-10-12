<?php

namespace App\Command;

use App\Entity\Event;
use Redis;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Faker;

class Generator extends Command
{
    protected function configure()
    {
        $this->setName('data:generator')
            ->setDescription('Generator data');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('<info>START</info>');

        $i = 0;
        $faker = Faker\Factory::create('ru_RU');
        while ($i++ < 10) {
            $event = new Event([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'fromCity' => $faker->city,
                'fromAddress' => $faker->streetAddress,
                'toCity' => $faker->city,
                'toAddress' => $faker->streetAddress,
                'description' =>$faker->text
            ]);

            $event->setPriority(rand(1,9)*1000);
            $event->save();
        }

        $output->writeln('<info>FINISH</info>');
    }
}