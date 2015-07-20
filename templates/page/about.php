<html>
<head>
    <?php include BASE . '/templates/blocks/head.php'; ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <li class="list-group-item"><?php echo $i; ?> TEST</li>
                <?php endfor; ?>
            </ul>
        </div>
        <div class="col-lg-8"></div>
    </div>
</div>

<?php include BASE . '/templates/blocks/head.php'; ?>
</body>
</html>