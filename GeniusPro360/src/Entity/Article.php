<?php

// src/Entity/Article.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

/**
 * Représente un article de blog ou une publication.
 */
#[ORM\Entity(repositoryClass: App\Repository\ArticleRepository::class)]
class Article
{
    /**
     * Identifiant unique de l'article.
     * 
     * @var int
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private int $id;

    /**
     * Titre de l'article.
     * 
     * @var string
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    private string $title;

    /**
     * Contenu principal de l'article.
     * 
     * @var string
     */
    #[ORM\Column(type: Types::TEXT)]
    private string $content;

    /**
     * Date de création de l'article.
     * 
     * @var \DateTimeInterface
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private \DateTimeInterface $createdAt;

    /**
     * Date de dernière mise à jour de l'article (optionnelle).
     * 
     * @var \DateTimeInterface|null
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    // Getters et Setters pour manipuler les propriétés de l'entité

    /**
     * Récupère l'identifiant de l'article.
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Récupère le titre de l'article.
     * 
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Définit le titre de l'article.
     * 
     * @param string $title Le titre de l'article
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Récupère le contenu de l'article.
     * 
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Définit le contenu de l'article.
     * 
     * @param string $content Le contenu de l'article
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Récupère la date de création de l'article.
     * 
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Définit la date de création de l'article.
     * 
     * @param \DateTimeInterface $createdAt La date de création
     * @return self
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Récupère la date de dernière mise à jour de l'article.
     * 
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Définit la date de dernière mise à jour de l'article.
     * 
     * @param \DateTimeInterface|null $updatedAt La date de mise à jour
     * @return self
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
