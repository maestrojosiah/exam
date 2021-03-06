<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ChildSubject
 *
 * @ORM\Table(name="child_subject")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChildSubjectRepository")
 */
class ChildSubject
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
     * @Assert\NotBlank()
     * @ORM\Column(name="c_s_title", type="string", length=100)
     */
    private $cSTitle;

    /**
     * @var integer
     * @Assert\Type(
     *     type="digit",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @ORM\Column(name="out_of", type="integer")
     */
    private $out_of;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="childSubjects")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="childSubjects")
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $subject;

    /**
     * @ORM\OneToMany(targetEntity="ScoreChild", mappedBy="childSubject")
     */
    private $scoreChildren;


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
     * Set cSTitle
     *
     * @param string $cSTitle
     *
     * @return ChildSubject
     */
    public function setCSTitle($cSTitle)
    {
        $this->cSTitle = $cSTitle;

        return $this;
    }

    /**
     * Get cSTitle
     *
     * @return string
     */
    public function getCSTitle()
    {
        return $this->cSTitle;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ChildSubject
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set subject
     *
     * @param \AppBundle\Entity\Subject $subject
     *
     * @return ChildSubject
     */
    public function setSubject(\AppBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \AppBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set outOf
     *
     * @param integer $outOf
     *
     * @return ChildSubject
     */
    public function setOutOf($outOf)
    {
        $this->out_of = $outOf;

        return $this;
    }

    /**
     * Get outOf
     *
     * @return integer
     */
    public function getOutOf()
    {
        return $this->out_of;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scoreChildren = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add scoreChild
     *
     * @param \AppBundle\Entity\ScoreChild $scoreChild
     *
     * @return ChildSubject
     */
    public function addScoreChild(\AppBundle\Entity\ScoreChild $scoreChild)
    {
        $this->scoreChildren[] = $scoreChild;

        return $this;
    }

    /**
     * Remove scoreChild
     *
     * @param \AppBundle\Entity\ScoreChild $scoreChild
     */
    public function removeScoreChild(\AppBundle\Entity\ScoreChild $scoreChild)
    {
        $this->scoreChildren->removeElement($scoreChild);
    }

    /**
     * Get scoreChildren
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getScoreChildren()
    {
        return $this->scoreChildren;
    }
}
