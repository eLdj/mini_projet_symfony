<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeRepository")
 * @UniqueEntity(fields="matricule", message="Ce matricumle existe déjà")
 */
class Employe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="matricule" , type="string", length=30, unique=true)
     * @Assert\Length(max=7,min=7, minMessage = "Le matricule doit comporter {{limit}} caractére",maxMessage = "Le matricule doit comporter {{limit}} caractére")
     * @Assert\NotBlank(message="Le matricule est obligatoire")
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(min=4, minMessage = "Veuillez entrer un nom valide")
     * @Assert\NotBlank(message="Le nom complet est obligatoire")
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date()
     * @Assert\LessThan("2005/12/31",message="Vous êtes mineur")
     * @Assert\GreaterThan("1957/12/31",message="Trop vieux pour ce job")
     * @Assert\NotBlank(message="La date de naissance est obligatoire")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive(message="Le salaire ne peut être négatif")
     * @Assert\GreaterThan(50000, message="Le salaire doit être suppérieur à 50 000")
     * @Assert\LessThan(500000, message="Diambar li barri na dhé ")
     * @Assert\NotBlank(message="Le salaire est obligatoire")
     */
    private $salaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Service", inversedBy="employes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idService;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService(?Service $idService): self
    {
        $this->idService = $idService;

        return $this;
    }
}
