<?php
// function to display contacts array
function displayContacts($contacts)
{
    echo '<table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>';
    foreach ($contacts as $contact) {
        echo '<tr>
                            <td>' . htmlspecialchars($contact['name']) . '</td>
                            <td>' . htmlspecialchars($contact['email']) . '</td>
                            <td>' . htmlspecialchars($contact['phone']) . '</td>
                        </tr>';
    }
    echo '</tbody>';
}

// function to add contact to contacts array
function addContact($contacts)
{
    // If server request method is POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Isset form data and not empty
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
            // Get form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            // Display success message
            echo '<div class="alert alert-success">Contact added successfully</div>';

            // Show contact details in a var_dump
            // var_dump($name, $email, $phone);

            // Add contact to contacts array $contacts
            $contacts[] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            ];

            // Show contacts in a var_dump
            /*echo '<pre>';
            var_dump($contacts);
            echo '</pre>';*/

        } else {
            // Display error message
            echo '<div class="alert alert-danger">All fields are required</div>';
        }
    }
    return $contacts;
}