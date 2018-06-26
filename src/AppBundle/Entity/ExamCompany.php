<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ExamCompany
 *
 * @ORM\Table(name="exam_company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExamCompanyRepository")
 */
class ExamCompany
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
     * @ORM\Column(name="c_title", type="string", length=255)
     */
    private $cTitle;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="examCompanies")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Classs", inversedBy="examCompanies")
     * @ORM\JoinColumn(name="class_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $class;

    /**
     * @ORM\OneToMany(targetEntity="Score", mappedBy="examCompany", fetch="EAGER")
     */
    private $scores;

    /**
     * @ORM\OneToMany(targetEntity="ScoreChild", mappedBy="examCompany")
     */
    private $scoreChildren;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scores = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cTitle
     *
     * @param string $cTitle
     *
     * @return ExamCompany
     */
    public function setCTitle($cTitle)
    {
        $this->cTitle = $cTitle;

        return $this;
    }

    /**
     * Get cTitle
     *
     * @return string
     */
    public function getCTitle()
    {
        return $this->cTitle;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ExamCompany
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
     * Set class
     *
     * @param \AppBundle\Entity\Classs $class
     *
     * @return ExamCompany
     */
    public function setClass(\AppBundle\Entity\Classs $class = null)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \AppBundle\Entity\Classs
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Add score
     *
     * @param \AppBundle\Entity\Score $score
     *
     * @return ExamCompany
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
     * @return ExamCompany
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
