<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ScoreChild
 *
 * @ORM\Table(name="score_child")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScoreChildRepository")
 */
class ScoreChild
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
     * @Assert\Type(
     *     type="digit",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     *@ORM\Column(name="marks", type="string", length=255)
     */
    private $marks;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="ChildSubject", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="c_subject_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $childSubject;

    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $subject;

    /**
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="ExamCompany", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $examCompany;

    /**
     * @ORM\ManyToOne(targetEntity="Classs", inversedBy="scoreChildren")
     * @ORM\JoinColumn(name="class_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $class;

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
     * Set marks
     *
     * @param integer $marks
     *
     * @return ScoreChild
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * Get marks
     *
     * @return int
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return ScoreChild
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
     * Set childSubject
     *
     * @param \AppBundle\Entity\ChildSubject $childSubject
     *
     * @return ScoreChild
     */
    public function setChildSubject(\AppBundle\Entity\ChildSubject $childSubject = null)
    {
        $this->childSubject = $childSubject;

        return $this;
    }

    /**
     * Get childSubject
     *
     * @return \AppBundle\Entity\ChildSubject
     */
    public function getChildSubject()
    {
        return $this->childSubject;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return ScoreChild
     */
    public function setStudent(\AppBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set examCompany
     *
     * @param \AppBundle\Entity\ExamCompany $examCompany
     *
     * @return ScoreChild
     */
    public function setExamCompany(\AppBundle\Entity\ExamCompany $examCompany = null)
    {
        $this->examCompany = $examCompany;

        return $this;
    }

    /**
     * Get examCompany
     *
     * @return \AppBundle\Entity\ExamCompany
     */
    public function getExamCompany()
    {
        return $this->examCompany;
    }

    /**
     * Set class
     *
     * @param \AppBundle\Entity\Classs $class
     *
     * @return ScoreChild
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
     * Set subject
     *
     * @param \AppBundle\Entity\Subject $subject
     *
     * @return ScoreChild
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
}
