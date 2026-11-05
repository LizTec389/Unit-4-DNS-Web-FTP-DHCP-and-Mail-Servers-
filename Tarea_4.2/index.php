<!DOCTYPE html>
<html>
<head>
    <title>Empresa Corporativa - Servidor Web</title>
    <style>
        body { font-family: Arial; background: #1a1a2e; color: #eee; text-align: center; padding: 50px; }
        h1 { color: #00d4ff; }
        .info { background: #16213e; padding: 20px; border-radius: 10px; display: inline-block; }
    </style>
</head>
<body>
    <h1>✅ Servidor Web empresa.local</h1>
    <div class="info">
        <h2>Información del Servidor</h2>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        <p><strong>Servidor:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
        <p><strong>Hora:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
    </div>
    <?php phpinfo(); ?>
</body>
</html>
