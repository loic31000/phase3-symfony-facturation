<?php

namespace App\Config;

enum EnumUnit: string
{
    case PIECE = 'piece';
    case HOUR = 'hour';
    case DAY = 'day';
    case MONTH = 'month';
    case YEAR = 'year';


       /**
     * Retourne le status en Français
     */
    public function getUnit(): string
    {

        return match ($this) {
            self::PIECE => 'piece',
            self::HOUR => 'heure',
            self::DAY => 'jour',
            self::MONTH => 'mois',
            self::YEAR => 'annee',
        };
    }
};
