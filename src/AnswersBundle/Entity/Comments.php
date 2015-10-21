<?php

namespace AnswersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="content", type="string", length=1000)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="creadetBy", type="string", length=100)
     */
    private $creadetBy;

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
     * Set content
     *
     * @param string $content
     *
     * @return comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set creadetBy
     *
     * @param string $creadetBy
     *
     * @return comment
     */
    public function setCreadetBy($creadetBy)
    {
        $this->creadetBy = $creadetBy;

        return $this;
    }

    /**
     * Get creadetBy
     *
     * @return string
     */
    public function getCreadetBy()
    {
        return $this->creadetBy;
    }

    /**
     * Set qaID
     *
     * @param integer $qaID
     *
     * @return comment
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
