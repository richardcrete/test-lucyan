<?php

class BigCTA
{
    public static function getBigCTA(bool $isLight = false, bool $isHigher = false): string
    {
        return '
            <div class="BigCTA isComponent' . ($isLight ? ' isLight' : '') . ($isHigher ? ' isHigher' : '') . '">
                <div class="container">
                    <div class="BigCTA-content">
                        <div class="BigCTA-title">
                            <h3 class="h3">Vous n’avez pas trouvé votre bonheur dans nos biens à la vente&nbsp?</h3>
                            <h2 class="h1">Nous recherchons pour vous LE bien idéal</h2>
                        </div>
                        <a href="#" class="Button isTertiary isMedium isBorderRadius">
                            Parlez-nous de votre projet
                        </a>
                    </div>
                </div>
            </div>
        ';
    }
}