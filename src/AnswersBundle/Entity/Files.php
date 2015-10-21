<?php

namespace AnswersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * file
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class File
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=60)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=4)
     */
    private $extension;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="commentID", type="integer")
     */
    private $commentID;

    /**
     * @var integer
     *
     * @ORM\Column(name="qaID", type="integer")
     */
    private $qaID;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return file
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return file
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return file
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set commentID
     *
     * @param integer $commentID
     *
     * @return file
     */
    public function setCommentID($commentID)
    {
        $this->commentID = $commentID;

        return $this;
    }

    /**
     * Get commentID
     *
     * @return integer
     */
    public function getCommentID()
    {
        return $this->commentID;
    }

    /**
     * Set qaID
     *
     * @param integer $qaID
     *
     * @return file
     */
    public function setQaID($qaID)
    {
        $this->qaID = $qaID;

        return $this;
    }

    /**
     * Get qaID
     *
     * @return integer
     */
    public function getQaID()
    {
        return $this->qaID;
    }
}
