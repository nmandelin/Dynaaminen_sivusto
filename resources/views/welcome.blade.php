<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/page1.css') }}">
        <script type="text/javascript" src=" {{ asset('js/logic.js') }}">
    </head>

    <body>
        <div class="kehys">

            <div class="teksti2">
                Haku
            </div>
            <div class="hakupalkki2">

                <input type="text" placeholder="Search..">

            </div>
            <div class="haeNappi">
                <button>Hae</button>
            </div>

            <div class="tulosTeksti">

                <p class="content">
                    tähän tulee tulokset...

                    <?php

                    ?>

                </p>
            </div>
            <div class="toinenkehys">


                <div class="teksti">
                    Kehittämiskohde
                </div>
                <div class="hakupalkki">

                    <input type="text" placeholder="Search..">

                </div>

                <div class="teksti">
                    Tägit
                </div>
                <div class="hakupalkki">

                    <input type="text" placeholder="Search..">

                </div>

                <div class="teksti">
                    KPI
                </div>

                <div class="hakupalkki">

                    <input type="text" placeholder="Search..">

                </div>

                <div class="teksti">
                    Ratkaisu
                </div>

                <div class="hakupalkki">

                    <input type="text" placeholder="Search..">

                </div>

                <div class="teksti">
                    Kategoria
                </div>

                <div class="hakupalkki">

                    <input type="text" placeholder="Search..">

                </div>


                <div class="ongelmanappi">
                    <button onClick="{painallus()}">Lisää ongelma</button >
                </div>


            </div>
</div>
</body>

</html>
