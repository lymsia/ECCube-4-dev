<?php

namespace Plugin\cm_blog\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\cm_blog\Entity\Blog;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * BlogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlogRepository extends AbstractRepository
{
    /**
     * ConfigRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Blog::class);
    }

    /**
     * @param int $id
     *
     * @return null|Blog
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }

    /**
     * @param string $title
     *
     * @return null|Blog
     */
    public function getByTitle($title)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            "SELECT b FROM plg_blog b WHERE b.title like :title"
        )->setParameter('title', '%'.$title.'%');

        return $query->getResult();
    }
}
