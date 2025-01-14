<?php
$file = basename($_SERVER['SCRIPT_FILENAME']);

if ( $file =='moredetails.php'){
    echo '<link rel="stylesheet" href="../../../css/header.css" type="text/css" />';
    echo '<link rel="stylesheet" href="../../../css/footer.css" type="text/css" />';
} else {
    echo '<link rel="stylesheet" href="../css/header.css" type="text/css" />';
    echo '<link rel="stylesheet" href="../css/footer.css" type="text/css" />';
}

?>
<header id="header">
    <div class="flex row" id="headerLeft">
        <h1><img 
        <?php 
        if ($file == 'index.php' || $file == 'projects.php' ){
            echo 'src="img/code.png"';
        } else if ($file == 'moredetails.php') {
            echo 'src="../../../img/code.png"';
        }        
        ?> alt="Code Symbol">Josh Kelly</h1>
    </div>
    <nav id="headerRight">
        <div id="links">
            <?php
            if ($file == 'index.php' || $file == 'projects.php' ){
                echo '<a target="self" href="index.php">Home</a>';
                echo '<a target="self" href="index.php#article3" id="about">About</a>';
                echo '<div class="dropdown">';
                echo '<a target="self" class="dropdownA" href="index.php#article2">Projects</a>';
                echo '<div class="dropdown-content">';
                echo '<a target="self" class="dropdownA" href="projects.php">All Projects</a>';
                echo '</div>';
                echo '</div>';
                // echo '<a target="self" href="docs.php">Wiki</a>';
                echo '<a target="self" href="index.php#article4" id="contact">Contact</a>';
            } else if ($file == 'moredetails.php') {
                echo '<a target="self" href="../../../index.php">Home</a>';
                echo '<a target="self" href="../../../index.php#article3" id="about">About</a>';
                echo '<div class="dropdown">';
                echo '<a target="self" class="dropdownA" href="../../../index.php#article2">Projects</a>';
                echo '<div class="dropdown-content">';
                echo '<a target="self" class="dropdownA" href="../../../projects.php">All Projects</a>';
                echo '</div>';
                echo '</div>';
                // echo '<a target="self" href="docs.php">Wiki</a>';
                echo '<a target="self" href="../../../index.php#article4" id="contact">Contact</a>';

            
            } else {

                echo '<a target="self" href="../index.php">Home</a>';
                echo '<a target="self" href="../projects.php" id="projects">Projects</a>';
                // echo '<a target="self" href="../docs.php" id="projects">WiKi</a>';
                echo '<a target="self" href="../about.php" id="about">About</a>';
                echo '<a target="self" href="../contact.php" id="contact">Contact</a>';
            } 
            ?>
        </div>
    </nav>
</header>