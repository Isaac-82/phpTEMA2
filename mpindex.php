<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHPGOD</title>
    <link rel="stylesheet" href="mpstyle.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="search-bar">
                <div id="select">
                    <p id="selectText">All</p>
                    <img src="arrow.png">
                    <ul id="list">
                        <li class="categorie">All</li>
                        <li class="categorie">Sports</li>
                        <li class="categorie">Action</li>
                        <li class="categorie">Comedy</li>
                        <li class="categorie">Drama</li>
                        <li class="categorie">Fantasy</li>
                        <li class="categorie">SCI-FI</li>
                        <li class="categorie">Romance</li>
                        <li class="categorie">Thriller</li>
                    </ul>
                </div>
                <input type="text" id ="inputField" placeholder="Search In All">
            </div>
        </div>
    </header>

    <div class="manhwa-container">
        <h2 class="container-title">New Manhwa</h2>
        <div class="separator-line"></div>
        <div class="manhwa-item" onclick="location.href='manhwa1.php';">
            <div class="manhwa-content">
                <img src="manhwa (1).jpg" alt="Manhwa 1" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">Revenge of the Iron-Blooded Sword Hound</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="manhwa-item" onclick="location.href='manhwa1.html';">
            <div class="manhwa-content">
                <img src="manhwa (2).jpg" alt="Manhwa 2" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">The Heavenly Demon Can’t Live a Normal Life</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="manhwa-item" onclick="location.href='manhwa1.html';">
            <div class="manhwa-content">
                <img src="manhwa (3).jpg" alt="Manhwa 3" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">Reformation of the Deadbeat Noble</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="manhwa-item" onclick="location.href='manhwa1.html';">
            <div class="manhwa-content">
                <img src="manhwa (4).jpg" alt="Manhwa 4" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">Academy’s Genius Swordmaster</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="manhwa-item" onclick="location.href='manhwa1.html';">
            <div class="manhwa-content">
                <img src="manhwa (5).jpg" alt="Manhwa 5" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">Villain To Kill</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="manhwa-item" onclick="location.href='manhwa1.html';">
            <div class="manhwa-content">
                <img src="manhwa (6).jpg" alt="Manhwa 6" class="manhwa-image">
                <div class="manhwa-info">
                    <div class="manhwa-name">Swordmaster’s Youngest Son</div>
                    <ul class="chapter-list">
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter3.html';">Chapter 3</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter2.html';">Chapter 2</li>
                        <li class="chapter-list-item" onclick="location.href='manhwa1_chapter1.html';">Chapter 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        let select = document.getElementById("select");
        let list = document.getElementById("list");
        let selectText = document.getElementById("selectText");
        let inputField = document.getElementById("inputField");

        let categorie = document.getElementsByClassName("categorie");

        select.onclick = function(){
            list.classList.toggle("open");
        }

        for(option of categorie){
            option.onclick = function(){
                selectText.innerHTML = this.innerHTML;
                inputField.placeholder = "Search In " + selectText.innerHTML;
            }
        }
    </script>
</body>
</html>
