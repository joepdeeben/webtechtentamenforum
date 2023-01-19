function FormJarenOpen() {
document.getElementById('formjaren').style.visibility='visible';
document.getElementById('selectiejaren').style.visibility='collapse'
}

function FormJarenClose(){
    document.getElementById('formjaren').style.visibility='collapse';
    }

function ShowYearOne(){
    document.getElementById('framejaar1').style.visibility='visible';
    document.getElementById('framejaar3').style.visibility='collapse';
    document.getElementById('framejaar2').style.visibility='collapse';
}

function ShowYearTwo(){
    document.getElementById('framejaar2').style.visibility='visible';
    document.getElementById('framejaar3').style.visibility='collapse';
    document.getElementById('framejaar1').style.visibility='collapse';
}

function ShowYearThree(){
    document.getElementById('framejaar3').style.visibility='visible';
    document.getElementById('framejaar1').style.visibility='collapse';
    document.getElementById('framejaar2').style.visibility='collapse';
    }