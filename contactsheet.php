<?php

    function createCyrilic(){
    $abc = [];
    foreach (range(chr(0xC0), chr(0xFF)) as $b){
        $abc[] = iconv('CP1251', 'UTF-8', $b);
    }
    return $abc;
    }

    $contactTable = '
                <table class="">
                 <thead class="thead-dark">
                    <tr>
                      <th scope="col">Contacts</th>
                    </tr>
                 </thead>'.
                    contactView().
                '</table>
                       ';

    if (!empty($_POST['name']) && !empty($_POST['number'])) {
            $needleLat = range('a', 'z');
            $number = str_ireplace($needleLat, '', $_POST['number']);
            $number = str_ireplace(createCyrilic(), '', $number);
            $contact = [
                "Name" => $_POST['name'],
                "Number" => $number
            ];
//            print_r($contact);
            file_put_contents("contacts.json",json_encode($contact, JSON_UNESCAPED_UNICODE),8);
    }
    function contactView(){
        $contactSheet = json_decode(file_get_contents("contacts.json"), JSON_UNESCAPED_UNICODE);
//        print_r($contactSheet);
        foreach ($contactSheet as $key => $contact){
            echo "<tr>".$key."<td>".$contact."</td>"."</tr>";
        }
    }
    print_r(contactView());
