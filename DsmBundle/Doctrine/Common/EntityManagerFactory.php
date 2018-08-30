<?php declare(strict_types=1);
/**
 * @category EdmondsCommerce
 * @package  EdmondsCommerce_
 * @author   Ross Mitchell <ross@edmondscommerce.co.uk>
 */

namespace EdmondsCommerce\DsmBundle\Doctrine\Common;

use Doctrine\Common\Cache\Cache;
use Doctrine\ORM\Configuration;
use EdmondsCommerce\DoctrineStaticMeta\ConfigInterface;
use EdmondsCommerce\DoctrineStaticMeta\Entity\Factory\EntityFactory;
use EdmondsCommerce\DoctrineStaticMeta\EntityManager\EntityManagerFactory as DsmEntityManagerFactory;

class EntityManagerFactory extends DsmEntityManagerFactory
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * EntityManagerFactory constructor.
     *
     * @param Configuration $configuration
     * @param Cache         $cache
     * @param EntityFactory $factory
     */
    public function __construct(
        Configuration $configuration,
        Cache $cache,
        EntityFactory $factory
    ) {
        parent::__construct($cache, $factory);
        $this->configuration = $configuration;
    }

    public function getDoctrineConfig(ConfigInterface $config): Configuration
    {
        return $this->configuration;
    }
}
