<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <style>
            h1 {
                font-size: 48px;
                margin: 0 0 10px 0;
                padding: 0 20px;
                color: white;
                background: linear-gradient(to right, #aaa, #fff);
            }
            p {
                font-size: 14px;
                color: #666;
            }
        </style>
    </head>
    <body>
        <header class="row">
            <h1><?= h($title) ?></h1>
        </header>
        <div class="row">
            <p><?= h($message) ?></p>
        </div>
    </body>
</html>
