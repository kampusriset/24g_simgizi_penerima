<?php

class UserHelper
{
    public static function getInitials(
        string $name
    ): string {

        $words = explode(
            ' ',
            trim($name)
        );

        $initials = strtoupper(
            substr($words[0], 0, 1)
        );

        if (count($words) > 1) {
            $initials .= strtoupper(
                substr(end($words), 0, 1)
            );
        }

        return $initials;
    }
}