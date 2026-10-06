<?php
    include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header class="main-header">
        <div class="top-row">
            <div class="system-status">
                <span>AUTH ID: ASTRO-01 [ASTRONAUT]</span>
                <span>|</span>
                <span id="live-clock">SYS-TIME: <?php echo date("Y-m-d H:i:s"); ?></span>        
            </div>
        </div>

        <!-- Middle Row: Wraps Title and Nav together -->
        <div class="title-row">
            <h1>Space Research Hub</h1>
            
            <div class="dropdown-container">
                <button class="dropdown-btn">Explore &#9660;</button>
                <div class="dropdown-content">
                    <a href="astrophysics.php">Astrophysics</a>
                    <a href="space_science.php">Space Science</a>
                    <a href="physics.php">Physics</a>
                    <a href="chemistry.php">Chemistry</a>
                    <a href="biology.php">Biology</a>
                    <a href="engineering.php">Engineering</a>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Subtitle -->
        <p class="dashboard-subtitle">Main Research & Telemetry Dashboard</p>
    </header>

    <script>
        function updateSystemTime() {
            const now = new Date();

            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const timestamp = `SYS-TIME: ${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            document.getElementById('live-clock').textContent = timestamp;
        }
        // Run every 1000 milliseconds (1 second)
        setInterval(updateSystemTime, 1000);
    </script>
</body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Inter:wght@700;800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    body {
        background-color: #0d1117;
        color: #c9d1d9;
        font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        margin: 0;
        padding: 20px 40px;
        -webkit-font-smoothing: antialiased;
    }

    /* HEADER LAYOUT */
    .main-header {
        border-bottom: 2px solid #58a6ff;
        padding-bottom: 20px;
        margin-bottom: 30px;
    }

    /* TOP ROW: System Status & Comm Messages */
    .top-row {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        margin-bottom: 14px;
        width: 100%; 
    }

    .status-msg, .system-status {
        color: #8b949e;
        font-family: 'DM Mono', monospace;
        font-size: 13px; 
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    /* MIDDLE ROW: Main Title + Dropdown Nav */
    .title-row {
        display: flex;
        align-items: center; 
        gap: 24px;
    }

    h1 {
        color: #58a6ff;
        font-family: 'Inter', sans-serif;
        font-size: 32px;
        font-weight: 800;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        white-space: nowrap; 
    }

    .dashboard-subtitle {
        margin: 8px 0 0 0;
        color: #8b949e;
        font-family: 'Public Sans', sans-serif;
        font-size: 15px;
        font-weight: 400;
    }

    /* NASA-STYLE DROPDOWN MENU */
    .dropdown-container {
        position: relative;
        display: inline-block;
    }

    .dropdown-btn {
        background-color: #161b22;
        color: #58a6ff;
        border: 1px solid #30363d;
        font-family: 'DM Mono', monospace;
        font-size: 13px;
        font-weight: 500;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 6px;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .dropdown-btn:hover {
        border-color: #58a6ff;
        background-color: #1f242c;
        color: #ffffff;
        box-shadow: 0 0 12px rgba(88, 166, 255, 0.2);
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #161b22;
        min-width: 240px;
        border: 1px solid #30363d;
        border-top: 2px solid #58a6ff;
        border-radius: 0 0 6px 6px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
        z-index: 1000;
        margin-top: 6px;
    }

    .dropdown-content::before {
        content: '';
        position: absolute;
        top: -10px; 
        left: 0;
        right: 0;
        height: 10px;
    }

    .dropdown-content a {
        color: #c9d1d9;
        padding: 12px 18px;
        text-decoration: none;
        display: block;
        font-family: 'Public Sans', sans-serif;
        font-size: 14px;
        font-weight: 500;
        border-bottom: 1px solid #21262d;
        transition: all 0.15s ease;
    }

    .dropdown-content a:last-child {
        border-bottom: none;
    }

    .dropdown-content a:hover {
        background-color: #1f242c;
        color: #58a6ff;
        padding-left: 24px;
    }

    .dropdown-container:hover .dropdown-content {
        display: block;
    }
</style>

</html>