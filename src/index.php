<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
    include "drawables.php";
    $appName = "Simple File Host";
    $currentPath = "/path/to/current/folder";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $appName ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="/styles/base.css" rel="stylesheet" />
        <style>
            .material-symbols-outlined {
            font-variation-settings:
            'FILL' 1,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
            }
        </style>
    </head>
    <body>
        <header id="site-header"><?php echo $appName ?></header>
        <main id="main-content">
            <nav id="navigation-header">
                <?php BackButton::$instance->draw() ?>
                <p><?php echo $currentPath ?></p>
            </nav>
            <table id="entries-table">
                <colgroup>
                    <col id="type-column" class="data-column"/>
                    <col id="name-column" class="data-column"/>
                    <col id="last-updated-column" class="data-column"/>
                    <col id="size-column" class="data-column"/>
                    <col id="actions-column"/>
                </colgroup>
                <tr>
                    <th class="entries-table-header data-column">type</th>
                    <th class="entries-table-header data-column">name</th>
                    <th class="entries-table-header data-column">last updated</th>
                    <th class="entries-table-header data-column">size</th>
                    <th class="entries-table-header action-column">actions</th>
                </tr>
                <?php
                    $folder = new FolderEntry();
                    $folder->draw();

                    $file = new FileEntry();
                    $file->draw();
                ?>
            </table>
        </main>
    </body>
</html>
