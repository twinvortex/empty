<?php

use Vortex\System\Config\Config;

function pagination( $totalResults, $path, $sign = '/', $numResults = false) {

    $config = new Config();

    $page       = isset( $_GET['page'] ) ? $_GET['page'] : 1;
    if($numResults) {
        $maxResults = $numResults;
    } else {
        $maxResults = $config->settings->max_results;
    }
    $mainUrl    = $config->app->url;

    $data = '';

    $data .= '<ul class="pagination">';

    $totalPages = ceil( $totalResults / $maxResults );

    if ( $page > 1 ) {
        $prev = $page - 1;
        $data .= '<li><a href="' . $mainUrl . $path . 'page' . $sign . $prev . '">&laquo; Previous</a></li>';
    }


    if ( $page > 9 ) {
        for ( $i = 1; $i <= $totalPages; $i ++ ) {
            if ( $page == $i ) {
                $data .= '<li class="active"><a href="#">' . $i . '</a></li>';
            } else {
                if ( $i == 1 ) {
                    $pageNum = 1;
                } else {
                    $pageNum = $i;
                }

                if ( $i < ( $page + 8 ) && $i > ( $page - 8 ) ) {
                    $data .= '<li><a href="' . $mainUrl . $path . 'page' . $sign . $pageNum . '">' . $pageNum . '</a></li>';
                }
            }
        }
    } else {
        for ( $i = 1; $i <= $totalPages; $i ++ ) {
            if ( $page == $i ) {
                $data .= '<li class="active"><a href="#">' . $i . '</a></li>';
            } else {
                if ( $i == 1 ) {
                    $pageNum = 1;
                } else {
                    $pageNum = $i;
                }

                if ( $i <= 15 ) {
                    $data .= '<li><a href="' . $mainUrl . $path . 'page' . $sign . $pageNum . '">' . $pageNum . '</a></li>';
                }
            }
        }
    }

    if ( $page < $totalPages ) {
        $next = ( $page + 1 );
        $data .= '<li><a href="' . $mainUrl . $path . 'page' . $sign . $next . '">Next &raquo;</a></li>';
    }

    $data .= '</ul>';

    return $data;
}
