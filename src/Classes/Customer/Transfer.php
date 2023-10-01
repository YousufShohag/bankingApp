<?php

namespace src\classes\Customer;

use src\classes\Database\Database;

class Transfer extends Database
{
    public function input_transfer($formData)
    {
        $transferEmail = $formData['transferEmail'];
        $transferAmount = $formData['transferAmount'];

        $date = date('Y-m-d');

        $result = $this->connection->query("INSERT INTO customer_transfer (transferEmail,transferAmount,date) VALUES('$transferEmail','$transferAmount','$date')");

        if ($result) {
            echo '<div class="bg-green-100 border border-black-400 text-black-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">Transfer Process Successful. </span>
          </div>';
        } else {
            echo "Not";
        }
    }
}
