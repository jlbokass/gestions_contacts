<?php require_once 'data.php'; ?>
<?php require_once 'functions.php'; ?>
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
                // Add contact to contacts array
                $contacts = addContact($contacts);
                ?>
                <?php
                // Display contacts array
                displayContacts($contacts);
                ?>
        </div>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>