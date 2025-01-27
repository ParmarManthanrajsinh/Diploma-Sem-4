<!-- Consider a currency system in which there
are notes of 7 denominations, namely Rs. 1, Rs.
2, Rs. 5, Rs. 10, Rs. 20, Rs. 50 and Rs. 100. Write a
function that computes the smallest number of
notes that will combine for a given amount of
money -->

<?php

function smallest_number_of_notes($amount)
{
    $notes = array(100 => 0, 50 => 0, 20 => 0, 10 => 0, 5 => 0, 2 => 0, 1 => 0);

    foreach ($notes as $note => $no) {
        while ($amount >= $note) {
            $amount -= $note;
            $notes[$note]++;
        }
    }
    foreach ($notes as $note => $no) {
        if ($no > 0) {
            echo "Number of $note notes: $no<br>";
        }
    }
}

$money = 251;

echo "Smallest number of notes for $money:<br> ";
smallest_number_of_notes($money);

?>