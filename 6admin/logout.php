<<<<<<< HEAD
        <?php

        if (!isset($_SESSION)) {
            session_start();
        }

        session_destroy();

        header("Location: ../index.php");
=======
        <?php

        if (!isset($_SESSION)) {
            session_start();
        }

        session_destroy();

        header("Location: ../index.php");
>>>>>>> 5e8c50bb1212bb48f036da0f682076071b382549
        ?>