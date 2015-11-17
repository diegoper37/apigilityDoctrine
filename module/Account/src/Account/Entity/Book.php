<?php
/**
 * This class is the ORM for "Book" entity on Mysql.
 *
 * @author Diego Pimentel <diego@siworks.it>
 * @since 2015-11-07
 */
namespace Account\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=128)
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id = null;

    /**
     * @ORM\Column(type="string", nullable=true, length=200)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", nullable=true, length=200)
     */
    protected $resume;

    /**
     * @ORM\ManyToOne(targetEntity="Account\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    protected $user;


    /**
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return \Account\Entity\Book The Book itself
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return the $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Account\Entity\Book The Book itself
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return the $resume
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param strinr $resume
     * @return \Account\Entity\Book The Book itself
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
        return $this;
    }

    /**
     * @return \Account\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param \Account\Entity\User $user
     * @return self
     */
    public function setUser(\Account\Entity\User $user) {
        $this->user = $user;
        return $this;
    }
}

