<?php

namespace src\classes\Customer;

use src\classes\Database\Database;

class Withdraw extends Database
{
    public function input_withdraw($formData)
    {
        $withdrawAmount = $formData['withdrawAmount'];
        $date = date('Y-m-d');

        $result = $this->connection->query("INSERT INTO customer_withdraw (withdrawAmount,date) VALUES('$withdrawAmount','$date')");

        if ($result) {
            echo '<div class="bg-green-100 border border-black-400 text-black-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">Withdraw Complete </span>
          </div>';
        } else {
            echo "Not";
        }
    }
}
