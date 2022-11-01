function showHW(ver) {
    document.getElementById('hwWindow').style.visibility = 'visible';

    if(ver === 'UE5'){
        console.log("UE5")
        document.getElementById('txtOS').innerHTML = "Windows 10 64-bit version 1909 revision .1350 or higher";
        document.getElementById('txtRam').innerHTML = "8 GB RAM";
        document.getElementById('txtCPU').innerHTML = "Quad-core Intel or AMD, 2.5 GHz or faster";
        document.getElementById('txtSpaceHDD').innerHTML = "47 GB or more of free space";
        document.getElementById('txtGPU').innerHTML = "DirectX 11 or 12 compatible graphics card";
        document.getElementById('verzeUE').innerHTML = "5";
    } else if (ver === 'UE4'){
        document.getElementById('txtOS').innerHTML = "Windows 10 64-bit";
        document.getElementById('txtRam').innerHTML = "8 GB RAM";
        document.getElementById('txtCPU').innerHTML = "Quad-core Intel or AMD, 2.5 GHz or faster";
        document.getElementById('txtSpaceHDD').innerHTML = "35 GB or more of free space";
        document.getElementById('txtGPU').innerHTML = "DirectX 11 or DirectX 12 compatible graphics card";
        document.getElementById('verzeUE').innerHTML = "4";
    }
}

function hideHW(){
    document.getElementById('hwWindow').style.visibility = 'hidden';
}

function img(){
    document.getElementById('UE5img').style.backgroundImage = "url('/imgs/Unreal5.webp')";
    document.getElementById('UE4img').style.backgroundImage = "url('/imgs/grafik-dice-predlal-prostredi-z-bloodborne-do-unreal-engine-4-1462738905385.jpg')";
}

function openMenu(){
    document.getElementById('dropdownContainerWrapper').style.display = "flex";
}

function closeMenu(){
    document.getElementById('dropdownContainerWrapper').style.display = "none";
}