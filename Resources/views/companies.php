<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="../../public/assets/css/reset.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <?php
    require './header.php';
    ?>

    <section class="section">
        <h2>Last companies</h2>
        <div class="section-companies__searchbar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="section-companies__table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>TVA</th>
                    <th>Country</th>
                    <th>Type</th>
                    <th>Created at</th>
                </tr>
                <tr>
                    <td>Donnée 1</td>
                    <td>Donnée 2</td>
                    <td>Donnée 3</td>
                    <td>Donnée 4</td>
                    <td>Donnée 5</td>
                </tr>
                <tr>
                    <td>Donnée 1</td>
                    <td>Donnée 2</td>
                    <td>Donnée 3</td>
                    <td>Donnée 4</td>
                    <td>Donnée 5</td>
                </tr>
                <tr>
                    <td>Donnée 1</td>
                    <td>Donnée 2</td>
                    <td>Donnée 3</td>
                    <td>Donnée 4</td>
                    <td>Donnée 5</td>
                </tr>
            </table>
        </div>
        <div class="section-invoices__navbar">
            <p>Page
                <a class="navpage" href="#" target="_top">First</a>
                <a class="navpage" href="#" target="_top">1</a>
                <a class="navpage" href="#" target="_top">2</a>
                <a class="navpage" href="#" target="_top">>></a>
                <a class="navpage" href="#" target="_top">Last</a>
            </p>
        </div>

    </section>
    <?php
    require './footer.php';
    ?>
</body>

</html>