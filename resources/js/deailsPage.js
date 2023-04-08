var stars=5;
function fillSeleced(){
    var div = document.getElementById("addReviewStats");
    for(var i=0;i<stars;i++){
        div.children[i].className="fa-solid fa-star"
    }
    for(var i=stars;i<5;i++){
        div.children[i].className="fa-regular fa-star-half-stroke"
    }

}

function setStars(star){
    stars=star;
}

function fillHovering(star){
    var div = document.getElementById("addReviewStats");
    for(var i=0;i<star;i++){
        div.children[i].className="fa-solid fa-star"
    }
    for(var i=star;i<5;i++){
        div.children[i].className="fa-regular fa-star-half-stroke"
    }

}

