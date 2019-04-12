<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <style>
            h1 {
                font-size: 60px;
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
            <h1><?= $title ?></h1>
        </header>
        <div class="row">
            <table>
                <form method="post" action="/mycakeapp/hello/form">
                    <tr>
                        <th>name</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>mail</th>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <th>age</th>
                        <td><input type="text" name="age"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button>Click</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>