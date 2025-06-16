<?php
declare(strict_types=1);

namespace Flore\Oop\App;
class Car
{
    protected string $brand;
    protected string $model;
    protected int $fuel;

    public function __construct(string $brand, string $model, int $fuel)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->fuel = $fuel;
    }

    public function drive()
    {
        if ($this->fuel <= 0) {
            return "Can't drive, fuel empty.\n";
        }

        $this->fuel--;
        return "Fuel remaining: " . $this->fuel . "\n";
    }

    public function refuel(int $amount)
    {
        $this->fuel += $amount;
        return "Refueled. Current fuel: " . $this->fuel . "\n";
    }
}
