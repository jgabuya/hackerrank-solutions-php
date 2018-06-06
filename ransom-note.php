<?php

// https://www.hackerrank.com/challenges/ctci-ransom-note/problem
function checkMagazine($magazine, $note) {
    // iterate through note array
    foreach ($note as $val) {
        // search for string occurence in magazine array
        $magIndex = array_search($val, $magazine);

        if ($magIndex !== FALSE) {
            // if found, delete it
            unset($magazine[$magIndex]);
        } else {
            // no match is found, therefore it's impossible to create note through magazine words
            echo 'No';
            return;
        }
    }

    echo 'Yes';
}

//$magazine = explode(' ', 'give me one grand today night');
//$note = explode(' ', 'give one grand today');

$magazine = explode(' ', 'two times three is not four');
$note = explode(' ', 'two times two is four');

checkMagazine($magazine, $note);