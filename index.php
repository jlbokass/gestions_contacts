<?php require_once 'data.php'; ?>
<?php
// initialize variables
$name = $email = $phone = '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container py-4">
    <?php require_once 'header.php'; ?>
    <!-- Contact Form -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="mb-3">Add Contact</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Add Contact</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="mb-3">Contacts</h2>
                <?php
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
                ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?= htmlspecialchars($contact['name']); ?></td>
                            <td><?= htmlspecialchars($contact['email']); ?></td>
                            <td><?= htmlspecialchars($contact['phone']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </div>
        </div>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>