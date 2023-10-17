<?php

class HighSchoolSweetheart
{
    // Define a firstLetter method that accepts a name as a string, and returns the first letter of the name
    public function firstLetter($name)
    {
        $name = trim($name);

        return substr(
            $name,
            0,
            1
        );
    }

    // Define an initial method that accepts a name as a string, and returns the first letter of the name
    public function initial($name)
    {
        $firstLetter = $this->firstLetter($name);

        // If the first letter is lowercase, return it as uppercase
        if (ctype_lower($firstLetter)) {
            $firstLetter = strtoupper($firstLetter);
        }

        return $firstLetter . '.';
    }

    // Define an initials method that accepts a full name as a string, and returns the initials of each word in the string
    public function initials($fullName)
    {
        $names = explode(
            ' ',
            $fullName
        );
        $initials = '';

        // Loop through each name and call the initial method to get the first letter of each name
        foreach ($names as $name) {
            $initials .= $this->initial($name) . ' ';
        }

        return trim($initials);
    }

    // Define a pair method that accepts two names as strings, and returns a heart with the initials of each name inside
    public function pair($name1, $name2)
    {
        $initials1 = $this->initials($name1);
        $initials2 = $this->initials($name2);

        $heart = <<<EXPECTED_HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $initials1  +  $initials2     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    EXPECTED_HEART;

        return $heart;
    }
}
