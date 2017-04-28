<?php
    foreach ($_SESSION['messages'] as $msg){
?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <div><?= htmlspecialchars($msg['text']) ?></div>
</div>
<?php
    }
unset($_SESSION['messages']);

?>



