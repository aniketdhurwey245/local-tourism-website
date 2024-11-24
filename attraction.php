<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gwalior Tourism</title>
    <link rel="stylesheet" href="attraction.css">
</head>
<body>
    <header>
        <h1>Welcome to Gwalior</h1>
        <p>Explore the historic and cultural attractions of Gwalior, Madhya Pradesh.</p>
    </header>
    <main>
        <section id="attractions">
            <h2>Top Attractions</h2>
            <ul>
                <li id="fort">
                    <h3 >Gwalior Fort</h3>
                    <p >Known as the "Pearl of Fortresses," Gwalior Fort is an architectural marvel.</p>
                    <button onclick="showMoreInfo('fort')">More Info</button>
                </li>
                <li id="vilas">
                    <h3 >Jai Vilas Palace</h3>
                    <p >A stunning example of European architecture, now a museum.</p>
                    <button onclick="showMoreInfo('palace')">More Info</button>
                </li>
                <li id="sas">
                    <h3 >Sas Bahu Temple</h3>
                    <p >Intricately designed twin temples dedicated to Lord Vishnu.</p>
                    <button onclick="showMoreInfo('temple')">More Info</button>
                </li>
            </ul>
        </section>
        <div id="infoBox"></div>
    </main>
    <footer>
        <p>Discover more about Gwalior with us!</p>
    </footer>
    <script src="attraction.js"></script>
</body>
</html>
