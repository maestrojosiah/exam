<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(name="f_name", type="string", length=255)
     */
    private $fName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="l_name", type="string", length=255)
     */
    private $lName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     */
    private $password;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="tokens", type="string", length=255)
     */
    private $tokens;

    /**
     * @ORM\OneToMany(targetEntity="Subject", mappedBy="user")
     */
    private $subjects;

    /**
     * @ORM\OneToMany(targetEntity="Classs", mappedBy="user")
     */
    private $classes;

    /**
     * @ORM\OneToMany(targetEntity="ChildSubject", mappedBy="user")
     */
    private $childSubjects;

    /**
     * @ORM\OneToMany(targetEntity="Config", mappedBy="user", fetch="EAGER")
     */
    private $configs;

    /**
     * @ORM\OneToMany(targetEntity="ExamCompany", mappedBy="user")
     */
    private $examCompanies;

    /**
     * @ORM\OneToMany(targetEntity="Student", mappedBy="user")
     */
    private $students;


    /**
     * @ORM\OneToMany(targetEntity="Score", mappedBy="user")
     */
    private $scores;

    /**
     * @ORM\OneToMany(targetEntity="Download", mappedBy="user")
     */
    private $downloads;

    /**
     * @ORM\OneToMany(targetEntity="ScoreChild", mappedBy="user")
     */
    private $scoreChildren;

    public function __construct()
    {
        $this->active = true;
        $this->tokens = 0;
        $this->configs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->examCompanies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childSubjects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->downloads = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fName
     *
     * @param string $fName
     *
     * @return User
     */
    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    /**
     * Get fName
     *
     * @return string
     */
    public function getFName()
    {
        return $this->fName;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->active
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->active
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    /**
     * Set lName
     *
     * @param string $lName
     *
     * @return User
     */
    public function setLName($lName)
    {
        $this->lName = $lName;

        return $this;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    /**
     * Get lName
     *
     * @return string
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->active;
    }

    /**
     * Add subject
     *
     * @param \AppBundle\Entity\Subject $subject
     *
     * @return User
     */
    public function addSubject(\AppBundle\Entity\Subject $subject)
    {
        $this->subjects[] = $subject;

        return $this;
    }

    /**
     * Remove subject
     *
     * @param \AppBundle\Entity\Subject $subject
     */
    public function removeSubject(\AppBundle\Entity\Subject $subject)
    {
        $this->subjects->removeElement($subject);
    }

    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * Add class
     *
     * @param \AppBundle\Entity\Classs $class
     *
     * @return User
     */
    public function addClass(\AppBundle\Entity\Classs $class)
    {
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Remove class
     *
     * @param \AppBundle\Entity\Classs $class
     */
    public function removeClass(\AppBundle\Entity\Classs $class)
    {
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add childSubject
     *
     * @param \AppBundle\Entity\ChildSubject $childSubject
     *
     * @return User
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
     * Add config
     *
     * @param \AppBundle\Entity\Config $config
     *
     * @return User
     */
    public function addConfig(\AppBundle\Entity\Config $config)
    {
        $this->configs[] = $config;

        return $this;
    }

    /**
     * Remove config
     *
     * @param \AppBundle\Entity\Config $config
     */
    public function removeConfig(\AppBundle\Entity\Config $config)
    {
        $this->configs->removeElement($config);
    }

    /**
     * Get configs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * Add examCompany
     *
     * @param \AppBundle\Entity\ExamCompany $examCompany
     *
     * @return User
     */
    public function addExamCompany(\AppBundle\Entity\ExamCompany $examCompany)
    {
        $this->examCompanies[] = $examCompany;

        return $this;
    }

    /**
     * Remove examCompany
     *
     * @param \AppBundle\Entity\ExamCompany $examCompany
     */
    public function removeExamCompany(\AppBundle\Entity\ExamCompany $examCompany)
    {
        $this->examCompanies->removeElement($examCompany);
    }

    /**
     * Get examCompanies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamCompanies()
    {
        return $this->examCompanies;
    }

    /**
     * Add student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return User
     */
    public function addStudent(\AppBundle\Entity\Student $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \AppBundle\Entity\Student $student
     */
    public function removeStudent(\AppBundle\Entity\Student $student)
    {
        $this->students->removeElement($student);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Add score
     *
     * @param \AppBundle\Entity\Score $score
     *
     * @return User
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
     * @return User
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

    /**
     * Set tokens
     *
     * @param string $tokens
     *
     * @return User
     */
    public function setTokens($tokens)
    {
        $this->tokens = $tokens;

        return $this;
    }

    /**
     * Get tokens
     *
     * @return string
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * Add download
     *
     * @param \AppBundle\Entity\Download $download
     *
     * @return User
     */
    public function addDownload(\AppBundle\Entity\Download $download)
    {
        $this->downloads[] = $download;

        return $this;
    }

    /**
     * Remove download
     *
     * @param \AppBundle\Entity\Download $download
     */
    public function removeDownload(\AppBundle\Entity\Download $download)
    {
        $this->downloads->removeElement($download);
    }

    /**
     * Get downloads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDownloads()
    {
        return $this->downloads;
    }
}
