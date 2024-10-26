<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eLearnGameZone</title>
        <link rel="stylesheet" href="cards.css">
        <script src="cards.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ttNqps4j4FbQgpel+cVh1zwnV5iX+ElTbGQ9wvvo5Gg2w02pa7M3g5XN5QYYUXG3xap6Xz3Q+sbt7d7V0dD/Bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        
        <div class="container">
        <header class="header">
            <h1>eLearnGameZone</h1>
            <h2>Memory Game</h2>
        </header>

        <section class="score-panel">
            <h3>Score Panel</h3>
            <ul id="star-rating" class="star-rating">
                <li class="star"><i class="fa fa-star"></i></li>
                <li class="star"><i class="fa fa-star"></i></li>
                <li class="star"><i class="fa fa-star"></i></li>
            </ul>

            <span class="moves-counter">0</span> Moves
            <p>Errors: <span class="errors" id="errors">0</span></p>
            
            <div class="reset">
                <button class="btn reset-btn">Reset <i class="fa fa-repeat"></i></button>
            </div>

            <div id="board"></div>
        </section>

        <!-- Modal -->
        <section class="win-game-modal">
            <div id="modal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Congratulations!</h2>
                    <p>You have won the game and found all 8 pairs of cards.</p>
                    <img class="modal-img" src="images/Vault-Boy-Thumb-Up.jpg" alt="thumbs">
                    <button class="btn play-again-btn">Play Again?</button>
                </div>
            </div>


    </body>
</html>