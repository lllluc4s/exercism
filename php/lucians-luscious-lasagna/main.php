<?php

declare(strict_types=1);

class Lasagna
{
    // Task 1: Define the expected oven time in minutes
    public function expectedCookTime()
    {
        return 40;
    }

    // Task 2: Calculate the remaining oven time in minutes
    public function remainingCookTime($actualCookTime)
    {
        $expectedCookTime = $this->expectedCookTime();

        return max(0, $expectedCookTime - $actualCookTime);
    }

    // Task 3: Calculate the preparation time in minutes
    public function totalPreparationTime($numLayers)
    {
        return $numLayers * 2;
    }

    // Task 4: Calculate the total working time in minutes
    public function totalElapsedTime($numLayers, $actualCookTime)
    {
        $preparationTime = $this->totalPreparationTime($numLayers);

        return $preparationTime + $actualCookTime;
    }

    // Task 5: Create a notification that the lasagna is ready
    public function alarm()
    {
        return "Ding!";
    }
}
