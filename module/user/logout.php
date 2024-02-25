<?php

session_destroy();
header('Location:'.getUrl('user', 'login'));