<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Users - PHP view</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: system-ui;
            margin: 24px
        }

        .card {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 8px
        }
    </style>
</head>

<body>
    <h1>Users (PHP view)</h1>

    <form method="get" action="/users-php" style="margin:12px 0">
        <input type="text" name="q" placeholder="Filter by name..." value="<?php htmlspecialchars($q ?? '', ENT_QUOTES) ?>"> <!-- Insert variable to search -->
        <button type="submit">Search</button>
    </form>

    <div>
        <!-- Insert condition to display users list -->
        <?php if (count($users) === 0): ?>
            <p>No users found.</p>
        <?php else: ?>
            <?php foreach ($users as $user): ?>
                <div>
                    <?php echo htmlspecialchars($user->name, ENT_QUOTES); ?>
                    <?php echo htmlspecialchars($user->email, ENT_QUOTES); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <p style="margin-top:16px">
        <a href="/users-blade">Check it out! .blade Version -></a>
    </p>
</body>

</html>