<?php

class Spacer
{
    public static function getSpacer(bool $isLight = false): string
    {
        return '
            <div class="Spacer component' . ($isLight ? ' isLight' : '') . '"></div>
        ';
    }
}