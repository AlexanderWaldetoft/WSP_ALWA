<?php

//Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';

    if($highlight == 'Start') {
        $start = 'class="highlights"';
    }
    elseif($highlight == 'Kontakter') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Bloggs') {
        $blogg = 'class="highlight"';
    }

    echo '
        <nav>
            <ul>
                <li><a ' . $start . ' href="index.php">Start</a></li>
			    <li><a ' . $blogg . ' href="index.php?page=blogg">Blogg</a></li>
			    <li><a ' . $kontakt . ' href="index.php?page=kontakt">Kontakt</a></li>
		    </ul>
	    </nav>';
}

//Function for Copyright
function echoYear(){
    $year = date('Y');

    if ($year == 2017) {
        echo 'copyright 2017';
    }
    else {
        echo 'copyright 2017-' . $year;
    }
}

?>
