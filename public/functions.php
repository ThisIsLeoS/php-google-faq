<?php 
    function printFAQElem($elem) {
    ?>
        <li>
            <h2>
                <?php echo ($elem["question"]); ?>
            </h2>
            <br>
            <p>
                <?php echo ($elem["answer"]); ?>
            </p>
            <br>
        </li>
    <?php 
    }
?>