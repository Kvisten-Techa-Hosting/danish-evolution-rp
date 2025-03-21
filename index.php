<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danish Evolution RP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #111;
            color: white;
            text-align: center;
        }
        header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
        }
        .logo {
            max-width: 300px;
        }
        .hero {
            background: url('/mnt/data/Transparent_Logo (1).png') no-repeat center center/cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            padding: 40px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .status-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="/mnt/data/Transparent_Logo (1).png" alt="Danish Evolution Logo" class="logo">
        <h1>Velkommen til Danish Evolution RP</h1>
    </header>

    <div class="hero">
        <h2>Den bedste RP oplevelse venter på dig</h2>
    </div>

    <div class="content">
        <h2>Whitelisting Ansøgning</h2>
        <p>Bliv en del af vores RP-server! Send din ansøgning i dag.</p>
        <a href="https://discord.gg/DIN_DISCORD" class="button">Ansøg nu</a>
    </div>

    <div class="content">
        <h2>Live Server Status</h2>
        <div class="status-box">
            <p>Antal spillere online: <span id="player-count">Indlæser...</span></p>
        </div>
    </div>

    <div class="content">
        <h2>Nyheder & Changelog</h2>
        <p>Hold dig opdateret med de seneste ændringer på serveren.</p>
        <ul>
            <li>📢 Serveropdatering v1.2 - Nyt politi HQ tilføjet</li>
            <li>🚓 Nye køretøjer til patrulje</li>
            <li>⚠️ Forbedret anti-cheat system</li>
        </ul>
    </div>

    <script>
        // Simuler en live tæller (kan kobles til en API senere)
        function updatePlayerCount() {
            document.getElementById("player-count").innerText = Math.floor(Math.random() * 100) + " spillere online";
        }
        setInterval(updatePlayerCount, 5000);
        updatePlayerCount();
    </script>
</body>
</html>
