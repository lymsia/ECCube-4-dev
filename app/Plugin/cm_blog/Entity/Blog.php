<?php

namespace Plugin\cm_blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="plg_blog")
 * @ORM\Entity(repositoryClass="Plugin\cm_blog\Repository\ConfigRepository")
 */
class Blog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var text
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->name;
    }

    /**
     * @param string $title
     *
     * @return $this;
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->name;
    }

    /**
     * @param string $body
     *
     * @return $this;
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
}
