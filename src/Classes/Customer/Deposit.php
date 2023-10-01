<?php

namespace src\classes\Customer;

use src\classes\Database\Database;

class Deposit extends Database
{
    public function input_deposit($formData)
    {
        $amount = $formData['amount'];
        $date = date('Y-m-d');

        $result = $this->connection->query("INSERT INTO customer_deposit (amount,date) VALUES('$amount','$date')");

        if ($result) {
            echo '<div class="bg-green-100 border border-black-400 text-black-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">Deposit Added. </span>
          </div>';
        } else {
            echo "Not";
        }
    }
}
