<html>
<head>
    <?php include BASE . '/templates/blocks/head.php'; ?>
</head>
<body>
<?php include BASE . '/templates/blocks/messages.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <li class="list-group-item"><?php echo $i; ?> TEST</li>
                <?php endfor; ?>
            </ul>
        </div>
        <div class="col-lg-8">
            <form action="/?auth" method="post">
                <input type="text" name="login" placeholder="Login">
                <input type="text" name="pass" placeholder="Password">
                <button type="submit">Sign</button>
            </form>
        </div>
    </div>
</div>

<?php include BASE . '/templates/blocks/footer.php'; ?>
</body>
</html>