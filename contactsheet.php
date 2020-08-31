<?php


    $contactTable = '
                <table class="">
                 <thead class="thead-dark">
                    <tr>
                      <th scope="col">Contacts</th>
                    </tr>
                 </thead>'.
                  //  contactView().
                '</table>
                       ';

    if (!empty($_POST['name']) & !empty($_POST['number'])) {
//        if (is_numeric($_POST['number'])) {
            $number = trim($_POST['number'], "a..z, A..Z, а..я, А..Я, -");

            print_r($number);
//                print_r($_POST);
            //contactAdd($_POST['name'], );
        }
//    }

//    function contactAdd($name, $number){
//
//    }

