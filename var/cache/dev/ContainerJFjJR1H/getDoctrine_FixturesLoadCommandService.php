<?php

namespace ContainerJFjJR1H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Command/CommandCompatibility.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Loader/SymfonyBridgeLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/src/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Fixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/CategoriesFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/ProduitFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/UtilisateurFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/src/Purger/ORMPurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);

        $b = ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en'));

        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\CategoriesFixtures($b), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\ProduitFixtures($b), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\UtilisateurFixtures(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), $b), 'groups' => []]]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? $container->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
