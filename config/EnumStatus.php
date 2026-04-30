<?php

namespace App\Config;

enum EnumStatus: string
{
    case DRAFT = 'draft';
    case PENDING_PAYMENT = 'pending_payment';
    case PAID = 'paid';

    /**
     * Retourne le status en Français
     */

    public function getStatus(): string
    {
        return match ($this) {
            self::DRAFT => 'brouillon',
            self::PENDING_PAYMENT => 'en attente de paiement',
            self::PAID => 'payé',
        };
    }
};
