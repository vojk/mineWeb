function openCloseMenuDrop() {
    let $els = $('.compMenu_DivDropCont');
    let isDisplayed = ($els.css('display') === 'block');
    if (isDisplayed){
        $els.css({'display': 'none'});
        console.log(isDisplayed);
    }
    if (!isDisplayed){
        $els.css({'display': 'block'});
        console.log(isDisplayed);
    }
}

function openCloseMenu() {
    let $els = $('.compMenu_container');
    let isDisplayed = ($els.css('display') === 'flex');
    if (isDisplayed){
        $els.css({'display': 'none'});
        console.log(isDisplayed);
    }
    if (!isDisplayed){
        $els.css({'display': 'flex'});
        console.log(isDisplayed);
    }
}