<?php
$title = "Home";
include "layouts/header.php";
include "middlewares/auth.php";
include "layouts/navbar.php";
include "users.php";
?>
<div class="container">
    <h1 class="text-center">Users</h1>
    <table class="table table-dark table-stripped">
        <thead>
            <tr>
                <?php
                foreach ($users[0] as $property => $value) {
                    echo "<th>{$property}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $index => $user) {
                echo "<tr>";
                foreach ($user as $key => $value) {
                    echo "<td>";
                    if ($key == 'gender') {
                        if ($value == 'm') {
                            $value = 'male';
                        } else {
                            $value = 'female';
                        }
                    }
                    echo $value;
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include "layouts/footer.php";
include "layouts/footer-scripts.php";
?>