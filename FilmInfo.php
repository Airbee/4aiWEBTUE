<?php
/**
 * Created by PhpStorm.
 * User: airbe
 * Date: 13/11/2017
 * Time: 11:35
 */

namespace airbee\kungfu;

use HTL3R\KungFuMovies\IKungFuMovie;

class FilmInfo extends AbstractKungFuMovie implements IKungFuMovie
{
    public function getMovieInfoAsJSON() : string
    {
        header( 'Content-Type: application/json');
        return '{"name":"'.$film->getName().'","rating":"'.$film->getRating().'","Video URI":"'.$film->getMovieURI().'"}';
    }

    public function getMovieQRCodeForBrowser() : string
    {

        return '';
    }
}