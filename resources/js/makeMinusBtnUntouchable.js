
    const minusBtn = document.getElementsByClassName("minusBtn");
    const itemCount = document.getElementsByClassName("inCartCount");

    window.addEventListener("load", function () {
        for(let i = 0; i<minusBtn.length; i++){
            if(itemCount[i].textContent === "1 шт."){
                minusBtn[i].classList.add("untouchable");
            }

        }
    })
