<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title><?php echo $title; ?></title>
</head>
<body>

<div class="container">

    <h1>Master do admin</h1>

    <section id="header">
        <ul id="nav">
            <li><a href="/">Início</a></li>
            <li><a href="/signup">SignUp</a></li>
            <li><a href="/login">Login</a></li>
        </ul>

        <div>
            <?php echo welcome('user'); ?>
        </div>
    </section>

    <?php require VIEW_PATH.$this->controller->view; ?>
</div>
</body>
</html>