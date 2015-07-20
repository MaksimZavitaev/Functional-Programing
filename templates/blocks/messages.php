<?php

if (hasMessages()): ?>
    <div class="col-md-4 col-md-offset-4">
        <?php foreach (getMessages() as $msg): ?>
            <div class="alert <?php echo (!$msg['status']) ?: 'alert-' . $msg['status']; ?> alert-dismissible"
                 role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <p><?php echo $msg['text']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif;