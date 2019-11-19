<?php
declare(strict_types=1);

namespace TroiaStudio\BlizzardAPI\WorldOfWarcraft\Achievement;

class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $href;

    /**
     * @var Category[]
     */
    private $achievements;

    /**
     * @var bool
     */
    private $isGuildCategory;

    /**
     * @param int $id
     * @param string $name
     * @param string $href
     * @param array $achievements
     * @param bool $isGuildCategory
     */
    public function __construct(int $id, string $name, string $href, array $achievements, bool $isGuildCategory = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->href = $href;
        $this->achievements = $achievements;
        $this->isGuildCategory = $isGuildCategory;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return Category[]
     */
    public function getAchievements(): array
    {
        return $this->achievements;
    }

    /**
     * @return bool
     */
    public function isGuildCategory(): bool
    {
        return $this->isGuildCategory;
    }

}
