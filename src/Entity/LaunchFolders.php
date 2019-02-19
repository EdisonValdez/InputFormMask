<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LaunchFoldersRepository")
 */
class LaunchFolders
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
    private $code_name;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $folder_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $business_unit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $folder_image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeName(): ?string
    {
        return $this->code_name;
    }

    public function setCodeName(string $code_name): self
    {
        $this->code_name = $code_name;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getFolderDescription(): ?string
    {
        return $this->folder_description;
    }

    public function setFolderDescription(string $folder_description): self
    {
        $this->folder_description = $folder_description;

        return $this;
    }

    public function getBusinessUnit(): ?string
    {
        return $this->business_unit;
    }

    public function setBusinessUnit(string $business_unit): self
    {
        $this->business_unit = $business_unit;

        return $this;
    }

    public function getFolderImage(): ?string
    {
        return $this->folder_image;
    }

    public function setFolderImage(?string $folder_image): self
    {
        $this->folder_image = $folder_image;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->product_category;
    }

    public function setProductCategory(string $product_category): self
    {
        $this->product_category = $product_category;

        return $this;
    }
}
