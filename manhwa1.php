<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenge of the Iron-Blooded Sword Hound</title>
    <link rel="stylesheet" href="manhwa1.css">
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

<div class="manhwa-details-container">
    <div class="manhwa-details">
        <img src="manhwa (1).jpg" alt="Manhwa 1">
        <div class="manhwa-info">
            <h2>Revenge of the Iron-Blooded Sword Hound</h2>
            <p>Description: He was the hound of the Baskerville family: Vikir.

                Yet his loyalty was rewarded by the blade of a guillotine dirtied by slander.
                
                “I will never live the life of a hound slaughtered after the rabbit is caught.”
                
                In place of death, an unexpected opportunity awaits him.
                
                Vikir’s eyes glowed red as he sharpened his canines in the dark.
                
                “Just you wait, Hugo. I will rip out your throat this time.”
                
                It’s time for the hound to exact bloody revenge on his owner.</p>
            <p>Categories:
                <a href="action.html">Action</a>,
                <a href="category2.html">Fantasy</a>,
                <a href="category3.html">SCI-FI</a>
            </p>
        </div>
    </div>

    <div class="chapter-list-container">
        <h3>Chapters</h3>
        <ul class="chapter-list">
            <li>Chapter 1</li>
            <li>Chapter 2</li>
            <li>Chapter 3</li>
        </ul>
    </div>

    <div class="comment-box">
        <h3>Comments</h3>
        <textarea placeholder="Write a comment..."></textarea>
        <button>Submit Comment</button>
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
        console.log("a mersssss");
    </script>

</body>
</html>
