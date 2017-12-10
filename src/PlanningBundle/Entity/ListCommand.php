<?php

namespace PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListCommand
 *
 * @ORM\Table(name="list_command")
 * @ORM\Entity(repositoryClass="PlanningBundle\Repository\ListCommandRepository")
 */
class ListCommand
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
     * @var string
     *
     * @ORM\Column(name="commandName", type="string", length=255, unique=true)
     */
    private $commandName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="registerDate", type="string", length=255)
     */
    private $registerDate;

    /**
     * @var string
     *
     * @ORM\Column(name="startingDate", type="string", length=255)
     */
    private $startingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="validDate", type="string", length=255, nullable=true)
     */
    private $validDate;


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
     * Set commandName
     *
     * @param string $commandName
     *
     * @return ListCommand
     */
    public function setCommandName($commandName)
    {
        $this->commandName = $commandName;

        return $this;
    }

    /**
     * Get commandName
     *
     * @return string
     */
    public function getCommandName()
    {
        return $this->commandName;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return ListCommand
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
     * Set registerDate
     *
     * @param string $registerDate
     *
     * @return ListCommand
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return string
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set startingDate
     *
     * @param string $startingDate
     *
     * @return ListCommand
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    /**
     * Get startingDate
     *
     * @return string
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * Set validDate
     *
     * @param string $validDate
     *
     * @return ListCommand
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;

        return $this;
    }

    /**
     * Get validDate
     *
     * @return string
     */
    public function getValidDate()
    {
        return $this->validDate;
    }
}
