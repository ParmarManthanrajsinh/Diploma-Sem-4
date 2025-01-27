<!-- Consider a currency system in which there
are notes of 7 denominations, namely Rs. 1, Rs.
2, Rs. 5, Rs. 10, Rs. 20, Rs. 50 and Rs. 100. Write a
function that computes the smallest number of
notes that will combine for a given amount of
money -->

<?php

function smallest_number_of_notes($amount)
{
    $notes = array(100, 50, 20, 10, 5, 2, 1);
    $no_of_notes = 0;

    foreach ($notes as $note) {
        while ($amount >= $note) {
            $amount -= $note;
            $no_of_notes++;
        }
    }
    return $no_of_notes;
}

$money = 250;

echo "Smallest number of notes for 150: " . smallest_number_of_notes($money);

?>