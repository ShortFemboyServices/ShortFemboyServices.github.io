<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Femboy Socials</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php
        function fetchDiscordUserProfile($userId, $token)
        {
            $url = "https://discord.com/api/v10/users/{$userId}";
            $headers = [
                "Authorization: Bot {$token}",
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            return json_decode($response, true);
        }

        $token = 'MTE1NjMwMjc1MjY2Njg5NDQxNw.GPRctD.gYgNQQQUEKgRXmsyaC1doHpInq9ZQWdLOZxuT0';
        $userIdToFetch = '1151675022734270577';

        $userProfile = fetchDiscordUserProfile($userIdToFetch, $token);

        if ($userProfile !== null) {
            echo '<div class="discord-profile">';
            echo '<img src="https://cdn.discordapp.com/avatars/' . $userProfile['id'] . '/' . $userProfile['avatar'] . '" alt="User Avatar" class="user-avatar">';
            echo '<p><strong>Discord Username:</strong> ' . htmlspecialchars($userProfile['username']) . '#' . htmlspecialchars($userProfile['discriminator']) . '</p>';
            echo '</div>';
        } else {
            echo '<p><strong>User not found or failed to fetch data.</strong></p>';
        }
        ?>

        <img src="https://i.pinimg.com/originals/eb/7d/32/eb7d32e58a217ca178f9e985c7aabc8a.gif" alt="Hello Kitty Waving"
            class="hello-kitty-gif" loop>

        <h1>Femboy Socials</h1>
        <div class="social-buttons">
            <a href="https://www.youtube.com/channel/UCj7ixf-emgaMs0i3yCpaHmQ" class="social-button"
                data-username="LTLT">
                <img src="youtube-icon.png" alt="YouTube">
            </a>
            <a href="https://tiktok.com/@wxnt3rseason" class="social-button" data-username="WxnterSeason">
                <img src="tiktok-icon.png" alt="TikTok">
            </a>
            <a href="https://discordapp.com/users/1151675022734270577" class="social-button"
                data-username="<?php echo htmlspecialchars($userProfile['username']) . '#' . htmlspecialchars($userProfile['discriminator']); ?>">
                <img src="discord-icon.png" alt="Discord">
            </a>
            <a href="https://steamcommunity.com/id/SilentlyAim/" class="social-button" data-username="L71T">
                <img src="steam-icon.png" alt="Steam">
            </a>
        </div>
    </div>
</body>

</html>