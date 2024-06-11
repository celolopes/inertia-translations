<?php

namespace App\Lang;

enum Lang:string {
    case EN = "en";
    case PT = "pt-BR";
    case ES = "es";

    public function label():string {
        return match ($this) {
            self::EN => "English",
            self::PT => "Português BR",
            self::ES => "Español",
        };
    }
}
