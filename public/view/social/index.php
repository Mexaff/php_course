<h1>Main</h1>


<?php

    while ($row = $data->fetch_assoc()) {
        printf ("<p>Name: %s,\t Surname: %s, Login: %s, Password: %s,  Datacreate: %s, Dataupdate: %s </p>",
            $row['firstname'], $row['secondname'], $row['login'], $row['password'],
            $row['datacreate'], $row['dataupdate']);
    }

