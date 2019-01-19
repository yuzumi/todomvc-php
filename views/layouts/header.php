<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= APP_NAME; ?></title>

    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
        crossorigin="anonymous"
    >
</head>
<body>

    <div class="container-fluid" style="padding: 0 !important;">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">   
                <?= APP_NAME; ?>
            </a>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL . 'todos/get'; ?>">List Of Todos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL . 'todos/add'; ?>">Add Todo</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container mt-4">