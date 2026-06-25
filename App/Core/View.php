<?php

    namespace App\Core;

    class View {

        public static function renderView(string $dirView, array $dataView = [])
        {

            extract($dataView);
            require "../App/Views/{$dirView}View.php";

        }

    }