<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScoreRepository")
 */
class Score
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
     * @var int
     * @Assert\Type(
     *     type="digit",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @ORM\Column(name="marks", type="integer")
     */
    private $marks;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="scores")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="scores")
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $subject;

    /**
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="scores")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="ExamCompany", inversedBy="scores")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $examCompany;

    /**
     * @ORM\ManyToOne(targetEntity="Classs", inversedBy="scores")
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
     * @return Score
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
     * @return Score
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
     * @return Score
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
     * Set student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return Score
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
     * @return Score
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
     * @return Score
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

}
