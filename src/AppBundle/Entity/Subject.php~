<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubjectRepository")
 */
class Subject
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
     * @ORM\Column(name="s_title", type="string", length=100)
     */
    private $sTitle;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="subjects")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="ChildSubject", mappedBy="subject")
     */
    private $childSubjects;

    /**
     * @ORM\OneToMany(targetEntity="Score", mappedBy="subject")
     */
    private $scores;

    /**
     * @ORM\OneToMany(targetEntity="ScoreChild", mappedBy="subject")
     */
    private $scoreChildren;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->childSubjects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scores = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return $this->sTitle;
    }
    

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
     * Set sTitle
     *
     * @param string $sTitle
     *
     * @return Subject
     */
    public function setSTitle($sTitle)
    {
        $this->sTitle = $sTitle;

        return $this;
    }

    /**
     * Get sTitle
     *
     * @return string
     */
    public function getSTitle()
    {
        return $this->sTitle;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Subject
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
     * Add childSubject
     *
     * @param \AppBundle\Entity\ChildSubject $childSubject
     *
     * @return Subject
     */
    public function addChildSubject(\AppBundle\Entity\ChildSubject $childSubject)
    {
        $this->childSubjects[] = $childSubject;

        return $this;
    }

    /**
     * Remove childSubject
     *
     * @param \AppBundle\Entity\ChildSubject $childSubject
     */
    public function removeChildSubject(\AppBundle\Entity\ChildSubject $childSubject)
    {
        $this->childSubjects->removeElement($childSubject);
    }

    /**
     * Get childSubjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildSubjects()
    {
        return $this->childSubjects;
    }

    /**
     * Add score
     *
     * @param \AppBundle\Entity\Score $score
     *
     * @return Subject
     */
    public function addScore(\AppBundle\Entity\Score $score)
    {
        $this->scores[] = $score;

        return $this;
    }

    /**
     * Remove score
     *
     * @param \AppBundle\Entity\Score $score
     */
    public function removeScore(\AppBundle\Entity\Score $score)
    {
        $this->scores->removeElement($score);
    }

    /**
     * Get scores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Add scoreChild
     *
     * @param \AppBundle\Entity\ScoreChild $scoreChild
     *
     * @return Subject
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
