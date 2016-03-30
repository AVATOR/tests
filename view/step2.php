<?php
/**
 * Class
 *
 * @category     Speroteck
 * @package      Speroteck_
 * @copyright    Copyright (c) 2016 Speroteck Inc. (www.speroteck.com)
 * @author       Speroteck team (dev@speroteck.com)
 * @license      http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
global $test;
?>

<div id="step<?php echo $test->getCurrentStep() ?>">
    <h1 class="title"><?php echo $test->getCourseData("name") ?></h1>

    <div class="content quizcontainer">
        <?php echo includeOutput("view/step2/question-content.php") ?>
    </div>
</div>