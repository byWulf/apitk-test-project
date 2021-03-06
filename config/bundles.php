<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Nelmio\ApiDocBundle\NelmioApiDocBundle::class => ['all' => true],
    Shopping\ApiTKCommonBundle\ShoppingApiTKCommonBundle::class => ['all' => true],
    Shopping\ApiTKHeaderBundle\ShoppingApiTKHeaderBundle::class => ['all' => true],
    Shopping\ApiTKDeprecationBundle\ShoppingApiTKDeprecationBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
    FOS\RestBundle\FOSRestBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Shopping\ApiTKDtoMapperBundle\ShoppingApiTKDtoMapperBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Shopping\ApiTKUrlBundle\ShoppingApiTKUrlBundle::class => ['all' => true],
    Shopping\ApiTKManipulationBundle\ShoppingApiTKManipulationBundle::class => ['all' => true],
];
