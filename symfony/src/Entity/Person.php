<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;
    
    /**
     * @ORM\Column(type="string", length=255) 
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;
    
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    
    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }
    
    /**
     * @param string|null $mail
     *
     * @return $this
     */
    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }
    
    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }
    
    /**
     * @param int|null $age
     *
     * @return $this
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
