<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
    {
        $series = [
            'Punisher',
            'Lost',
            'House Of Dragon'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}