<?php

class Course {
    // définition des propriétés de notre cours
    private $title;
    private $image;
    private $shortDescription;
    private $description;
    private $programContent;
    private $numberOfHours;
    private $price;
    private $classDate;
    private $professor;
    private $modality;
    private $requiredLevel;

    public function __construct(
        $title = '',
        $image = '',
        $shortDescription = '',
        $description = '',
        $programContent = [],
        $numberOfHours = 0,
        $price = 0,
        $classDate = '',
        $professor = '',
        $modality = '',
        $requiredLevel = ''
    ) {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setShortDescription($shortDescription);
        $this->setDescription($description);
        $this->setProgramContent($programContent);
        $this->setNumberOfHours($numberOfHours);
        $this->setPrice($price);
        $this->setClassDate($classDate);
        $this->setProfessor($professor);
        $this->setModality($modality);
        $this->setRequiredLevel($requiredLevel);
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of shortDescription
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * Set the value of shortDescription
     *
     * @return  self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of programContent
     */
    public function getProgramContent(): array
    {
        return $this->programContent;
    }

    /**
     * Set the value of programContent
     *
     * @return  self
     */
    public function setProgramContent(array $programContent): self
    {
        $this->programContent = $programContent;

        return $this;
    }

    public function addToProgramContent(string $programContentElement): self
    {
        $this->programContent[] = $programContentElement;

        return $this;
    }

    /**
     * Get the value of numberOfHours
     */
    public function getNumberOfHours(): int
    {
        return $this->numberOfHours;
    }

    /**
     * Set the value of numberOfHours
     *
     * @return  self
     */
    public function setNumberOfHours(int $numberOfHours): self
    {
        if ($numberOfHours > 0) {
            $this->numberOfHours = $numberOfHours;
        }

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice(float $price): self
    {
        if ($price >= 0) {
            $this->price = $price;
        }

        return $this;
    }

    /**
     * Get the value of classDate
     */
    public function getClassDate(): string
    {
        return $this->classDate;
    }

    /**
     * Set the value of classDate
     *
     * @return  self
     */
    public function setClassDate(string $classDate): self
    {
        $this->classDate = $classDate;

        return $this;
    }

    /**
     * Get the value of professor
     */
    public function getProfessor(): string
    {
        return $this->professor;
    }

    /**
     * Set the value of professor
     *
     * @return  self
     */
    public function setProfessor(string $professor): self
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     * Get the value of modality
     */
    public function getModality(): string
    {
        return $this->modality;
    }

    /**
     * Set the value of modality
     *
     * @return  self
     */
    public function setModality(string $modality): self
    {
        $this->modality = $modality;

        return $this;
    }

    /**
     * Get the value of requiredLevel
     */
    public function getRequiredLevel(): string
    {
        return $this->requiredLevel;
    }

    /**
     * Set the value of requiredLevel
     *
     * @return  self
     */
    public function setRequiredLevel(string $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }
}