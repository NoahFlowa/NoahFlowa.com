<div class="container-fluid">
    <h1 class="display-5 py-5 text-center fw-bold">Games That I am Actively Playing...</h1>
    <!---GRID BELOW HERE--->
    <div class="row" id="gameGrid"></div>
</div>
<script>
    // JSON data from PHP
    <?php
    $jsonFile = file_get_contents('activeGames.json');
    $jsonData = json_decode($jsonFile, true);
    ?>

    const activeGamesList = <?php echo json_encode($jsonData['activeGamesList']); ?>;
    const gamesPerRow = 4;
    
    // Create the Bootstrap grid with cards
    function generateGameGrid() {
        const gameGrid = document.getElementById('gameGrid');
        let rowCount = 0;
        
        activeGamesList.forEach((game, index) => {
            if (index % gamesPerRow === 0) {
                rowCount++;
            }
            const row = gameGrid.children[rowCount - 1] || document.createElement('div');
            row.className = 'row game-grid-row';

            const col = document.createElement('div');
            col.className = 'col';
            
            const card = document.createElement('div');
            card.className = 'card h-100 custom-card';

            const img = document.createElement('img');
            img.src = game.ImageLink;
            img.className = 'img-fluid';
            img.style.width = '100%';
            img.style.height = '100%';
            img.style.objectFit = 'cover';
            img.style.transformOrigin = 'center center';

            const textOverlay = document.createElement('div');
            textOverlay.className = 'position-absolute top-50 start-50 translate-middle text-white';
            textOverlay.style.display = 'none';
            textOverlay.innerText = game.GameName;

            img.addEventListener('mouseover', () => {
                img.style.filter = 'blur(4px)';
                textOverlay.style.display = 'block';
            });

            img.addEventListener('mouseout', () => {
                img.style.filter = 'none';
                textOverlay.style.display = 'none';
            });

            card.appendChild(img);
            card.appendChild(textOverlay);
            
            const cardBody = document.createElement('div');
            cardBody.className = 'card-body';
            
            const cardTitleText = game.IGN ? `${game.GameName} - ${game.IGN}` : game.GameName;
            
            const cardTitle = document.createElement('h5');
            cardTitle.className = 'card-title';
            cardTitle.innerText = cardTitleText;
            cardBody.appendChild(cardTitle);
            
            const cardText = document.createElement('p');
            cardText.className = 'card-text';
            cardText.innerText = game.Summary;
            cardBody.appendChild(cardText);

            if (game.Referral) {
                const referral = document.createElement('p');
                referral.className = 'referral';
                referral.innerText = game.Referral;
                cardBody.appendChild(referral);
            }
            
            card.appendChild(cardBody);
            col.appendChild(card);
            row.appendChild(col);

            if (!gameGrid.children[rowCount - 1]) {
                gameGrid.appendChild(row);
            }
        });

        // Add empty hidden columns to make the grid look uniform
        const lastRow = gameGrid.lastElementChild;
        const lastRowCols = lastRow.children.length;
        
        if (lastRowCols < gamesPerRow) {
            for (let i = 0; i < gamesPerRow - lastRowCols; i++) {
                const emptyCol = document.createElement('div');
                emptyCol.className = 'col';
                emptyCol.style.visibility = 'hidden';

                const emptyCard = document.createElement('div');
                emptyCard.className = 'card h-100 custom-card';

                emptyCol.appendChild(emptyCard);
                lastRow.appendChild(emptyCol);
            }
        }
    }
    
    // Call the function to generate the grid
    generateGameGrid();
</script>