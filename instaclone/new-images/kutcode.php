<?php

if(isset($_POST['submit_sort'])) {
    switch($_POST['sorteermenu']) {
        case 'date_asc': $sorttype 'date';
                                    $order = 'ASC';
                                    break;

        case 'date_desc': $sorttype = 'date';
            $order = 'DESC';
            break;
    }
}
