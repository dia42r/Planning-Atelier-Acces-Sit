<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemCommand
 *
 * @ORM\Table(name="item_command")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ItemCommandRepository")
 */
class ItemCommand
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="PlanningProductType.php", inversedBy="itemCommand")
     * @ORM\Column(name="referenceArticle", type="string", length=70, unique=true)
     */
    private $referenceArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionArticle", type="string", length=255)
     */
    private $descriptionArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="endDateFabrication", type="string", length=255)
     */
    private $endDateFabrication;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set referenceArticle
     *
     * @param string $referenceArticle
     *
     * @return itemCommand
     */
    public function setReferenceArticle($referenceArticle)
    {
        $this->referenceArticle = $referenceArticle;

        return $this;
    }

    /**
     * Get referenceArticle
     *
     * @return string
     */
    public function getReferenceArticle()
    {
        return $this->referenceArticle;
    }

    /**
     * Set descriptionArticle
     *
     * @param string $descriptionArticle
     *
     * @return itemCommand
     */
    public function setDescriptionArticle($descriptionArticle)
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get descriptionArticle
     *
     * @return string
     */
    public function getDescriptionArticle()
    {
        return $this->descriptionArticle;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return itemCommand
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return itemCommand
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set endDateFabrication
     *
     * @param string $endDateFabrication
     *
     * @return itemCommand
     */
    public function setEndDateFabrication($endDateFabrication)
    {
        $this->endDateFabrication = $endDateFabrication;

        return $this;
    }

    /**
     * Get endDateFabrication
     *
     * @return string
     */
    public function getEndDateFabrication()
    {
        return $this->endDateFabrication;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return itemCommand
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

