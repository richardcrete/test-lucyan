<?php

class SearchForm
{
    public static function getSearchForm(int $totalAds): string
    {
        return '
            <div class="SearchForm">
                <div class="SearchForm-container container">
                    <form class="SearchForm-form" action="#">
                        <fieldset class="SearchForm-type">
                            <input type="radio" id="acheter" name="search" value="acheter" checked>
                            <label for="acheter">
                                Acheter
                            </label>
                            <input type="radio" id="louer" name="search" value="louer">
                            <label for="louer">
                                Louer
                            </label>
                            <input type="radio" id="estimer" name="search" value="estimer">
                            <label for="estimer">
                                Estimer
                            </label>
                        </fieldset>
                        <div class="SearchForm-content">
                            <fieldset>
                                <label class="SearchForm-legend">
                                    <legend class="SearchForm-legend h6">Localisation</legend>
                                    <input class="SearchForm-input h4" type="text" name="location" placeholder="Strasbourg">
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend class="SearchForm-legend h6">Type de bien
                                    <div class="SearchForm-radios">
                                        <input type="radio" name="type" id="flat" value="flat" checked>
                                        <label class="h4" for="flat">
                                            <div class="SearchForm-radio">
                                                <div></div>
                                            </div>
                                            Appartemment
                                        </label>
                                        <input type="radio" name="type" id="house" value="house">
                                        <label class="h4" for="house">
                                            <div class="SearchForm-radio ">
                                                <div></div>
                                            </div>
                                            Maison
                                        </label>
                                        <input type="radio" name="type" id="land" value="land">
                                        <label class="h4" for="land">
                                            <div class="SearchForm-radio ">
                                                <div></div>
                                            </div>
                                            Terrain
                                        </label>
                                        <input type="radio" name="type" id="parking" value="parking">
                                        <label class="h4" for="parking">
                                            <div class="SearchForm-radio ">
                                                <div></div>
                                            </div>
                                            Parking
                                        </label>
                                    </div>
                                </legend>
                            </fieldset>
                            <div class="SearchForm-fieldset">
                                    <legend class="SearchForm-legend h6">
                                        Nombre de pièces
                                        <div class="SearchForm-radios hasNoLabel">
                                            <input type="radio" name="rooms" id="one" value="1" checked>
                                            <label class="h4" for="one">
                                                1
                                            </label>
                                            <input type="radio" name="rooms" id="two" value="2">
                                            <label class="h4" for="two">
                                                2
                                            </label>
                                            <input type="radio" name="rooms" id="three" value="3">
                                            <label class="h4" for="three">
                                                3
                                            </label>
                                            <input type="radio" name="rooms" id="four" value="4">
                                            <label class="h4" for="four">
                                                4
                                            </label>
                                            <input type="radio" name="rooms" id="five" value="5">
                                            <label class="h4" for="five">
                                                5
                                            </label>
                                            <input type="radio" name="rooms" id="more" value="more">
                                            <label class="h4" for="more">
                                                +
                                            </label>
                                        </div>
                                    </legend>
                               
                                    <label class="SearchForm-legend">
                                        <legend class="SearchForm-legend h6">Budget max.</legend>
                                        <div class="SearchForm-hasUnit">
                                            <input class="SearchForm-input h4" type="number" name="budget" placeholder="300000">
                                            <div class="SearchForm-unit h3">€</div>
                                        </div>
                                    </label>
                            </div>
                            <div class="SearchForm-submit">
                                <span class="h6">' . $totalAds . ' annonces disponibles</span>
                                <button type="submit" class="Button isSecondary">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        ';
    }
}