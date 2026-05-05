<?php
namespace App\Enum;

enum Unit: string
{
    case HEURE = 'heure';
    case JOUR = 'jour';
    case PIECE = 'piece';
    case MOIS = 'mois';
    case FORFAIT = 'forfait';
}
