<?php

namespace SqlSrvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemsubfamily
 *
 * @ORM\Table(name="ItemSubFamily")
 * @ORM\Entity
 */
class Itemsubfamily
{
    /**
     * @var string
     *
     * @ORM\Column(name="Caption", type="string", length=40, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="ItemFamilyId", type="string", length=10, nullable=false)
     */
    private $itemfamilyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AnalyticAccounting_GridId", type="string", length=40, nullable=true)
     */
    private $analyticaccountingGridid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sysEditCounter", type="integer", nullable=true)
     */
    private $syseditcounter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sysCreatedDate", type="datetime", nullable=true)
     */
    private $syscreateddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysCreatedUser", type="string", length=255, nullable=true)
     */
    private $syscreateduser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sysModifiedDate", type="datetime", nullable=true)
     */
    private $sysmodifieddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sysModifiedUser", type="string", length=255, nullable=true)
     */
    private $sysmodifieduser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotesClear", type="string", length=0, nullable=true)
     */
    private $notesclear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Notes", type="string", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set caption.
     *
     * @param string $caption
     *
     * @return Itemsubfamily
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set itemfamilyid.
     *
     * @param string $itemfamilyid
     *
     * @return Itemsubfamily
     */
    public function setItemfamilyid($itemfamilyid)
    {
        $this->itemfamilyid = $itemfamilyid;

        return $this;
    }

    /**
     * Get itemfamilyid.
     *
     * @return string
     */
    public function getItemfamilyid()
    {
        return $this->itemfamilyid;
    }

    /**
     * Set analyticaccountingGridid.
     *
     * @param string|null $analyticaccountingGridid
     *
     * @return Itemsubfamily
     */
    public function setAnalyticaccountingGridid($analyticaccountingGridid = null)
    {
        $this->analyticaccountingGridid = $analyticaccountingGridid;

        return $this;
    }

    /**
     * Get analyticaccountingGridid.
     *
     * @return string|null
     */
    public function getAnalyticaccountingGridid()
    {
        return $this->analyticaccountingGridid;
    }

    /**
     * Set syseditcounter.
     *
     * @param int|null $syseditcounter
     *
     * @return Itemsubfamily
     */
    public function setSyseditcounter($syseditcounter = null)
    {
        $this->syseditcounter = $syseditcounter;

        return $this;
    }

    /**
     * Get syseditcounter.
     *
     * @return int|null
     */
    public function getSyseditcounter()
    {
        return $this->syseditcounter;
    }

    /**
     * Set syscreateddate.
     *
     * @param \DateTime|null $syscreateddate
     *
     * @return Itemsubfamily
     */
    public function setSyscreateddate($syscreateddate = null)
    {
        $this->syscreateddate = $syscreateddate;

        return $this;
    }

    /**
     * Get syscreateddate.
     *
     * @return \DateTime|null
     */
    public function getSyscreateddate()
    {
        return $this->syscreateddate;
    }

    /**
     * Set syscreateduser.
     *
     * @param string|null $syscreateduser
     *
     * @return Itemsubfamily
     */
    public function setSyscreateduser($syscreateduser = null)
    {
        $this->syscreateduser = $syscreateduser;

        return $this;
    }

    /**
     * Get syscreateduser.
     *
     * @return string|null
     */
    public function getSyscreateduser()
    {
        return $this->syscreateduser;
    }

    /**
     * Set sysmodifieddate.
     *
     * @param \DateTime|null $sysmodifieddate
     *
     * @return Itemsubfamily
     */
    public function setSysmodifieddate($sysmodifieddate = null)
    {
        $this->sysmodifieddate = $sysmodifieddate;

        return $this;
    }

    /**
     * Get sysmodifieddate.
     *
     * @return \DateTime|null
     */
    public function getSysmodifieddate()
    {
        return $this->sysmodifieddate;
    }

    /**
     * Set sysmodifieduser.
     *
     * @param string|null $sysmodifieduser
     *
     * @return Itemsubfamily
     */
    public function setSysmodifieduser($sysmodifieduser = null)
    {
        $this->sysmodifieduser = $sysmodifieduser;

        return $this;
    }

    /**
     * Get sysmodifieduser.
     *
     * @return string|null
     */
    public function getSysmodifieduser()
    {
        return $this->sysmodifieduser;
    }

    /**
     * Set notesclear.
     *
     * @param string|null $notesclear
     *
     * @return Itemsubfamily
     */
    public function setNotesclear($notesclear = null)
    {
        $this->notesclear = $notesclear;

        return $this;
    }

    /**
     * Get notesclear.
     *
     * @return string|null
     */
    public function getNotesclear()
    {
        return $this->notesclear;
    }

    /**
     * Set notes.
     *
     * @param string|null $notes
     *
     * @return Itemsubfamily
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
