<?php
$this->beginContent('//layouts/header');
$this->endContent();
?>

<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Tables</h1>
    </div>
    <?php
    echo $content;
    ?>
</div>


<?php
$this->beginContent('//layouts/footer');
$this->endContent();
?>


