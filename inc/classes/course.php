<?php

class Course {
    // définition des propriétés de notre cours
    public $title;
    public $image;
    public $shortDescription;
    public $description;
    public $programContent;
    public $numberOfHours;
    public $price;
    public $classDate;
    public $professor;
    public $modality;
    public $requiredLevel;

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
     * @return  self
     */
    public function setTitle(string $title): Course
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
    public function setImage(string $image): Course
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
    public function setShortDescription(string $shortDescription): Course
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
    public function setDescription(string $description): Course
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
    public function setProgramContent(array $programContent): Course
    {
        $this->programContent = $programContent;

        return $this;
    }

    public function addToProgramContent(string $programContentElement): Course {
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
    public function setNumberOfHours(int $numberOfHours): Course
    {
        if ($numberOfHours >0) {
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
    public function setPrice(float $price): Course
    {
        if ($price > 0) {
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
    public function setClassDate(string $classDate): Course
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
    public function setProfessor(string $professor): Course
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
    public function setModality(string $modality): Course
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
    public function setRequiredLevel(string $requiredLevel): Course
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }
}