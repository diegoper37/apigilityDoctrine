<?php
/**
 * This class is the ORM for "UserAccount" entity on Mysql.
 *
 * @author Diego Pimentel <diego@siworks.it>
 * @since 2015-11-07
 */
namespace Account\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class UserAccount
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
    protected $username;

    public function __construct()
    {
        //
    }

    /**
     * @return the $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Account\Entity\User The User itself
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
     * @return Account\Entity\User The User itself
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return the $username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Account\Entity\User The User itself
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
}

