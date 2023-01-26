function FormJarenOpen() {
document.getElementById('formjaren').style.visibility='visible';
document.getElementById('selectiejaren').style.visibility='collapse'
}

function FormJarenClose(){
    document.getElementById('formjaren').style.visibility='collapse';
    }

function ShowYearOne(){
    document.getElementById('selectiejaren').style.visibility='collapse'
    document.getElementById('framejaar1').style.display='block';
    document.getElementById('framejaar3').style.display='none';
    document.getElementById('framejaar2').style.display='none';
    document.getElementById('buttonjaar1').style.background='white';
    document.getElementById('buttonjaar1').style.color='#304ba3';
    document.getElementById('buttonjaar2').style.background='#304ba3';
    document.getElementById('buttonjaar2').style.color='white';
    document.getElementById('buttonjaar3').style.background='#304ba3';
    document.getElementById('buttonjaar3').style.color='white'
}

function ShowYearTwo(){
    document.getElementById('selectiejaren').style.visibility='collapse'
    document.getElementById('framejaar2').style.display='block';
    document.getElementById('framejaar3').style.display='none';
    document.getElementById('framejaar1').style.display='none';
    document.getElementById('buttonjaar2').style.background='white';
    document.getElementById('buttonjaar2').style.color='#304ba3';
    document.getElementById('buttonjaar1').style.background='#304ba3';
    document.getElementById('buttonjaar1').style.color='white';
    document.getElementById('buttonjaar3').style.background='#304ba3';
    document.getElementById('buttonjaar3').style.color='white';
}

function ShowYearThree(){
    document.getElementById('selectiejaren').style.visibility='collapse'
    document.getElementById('framejaar3').style.display='block';
    document.getElementById('framejaar1').style.display='none';
    document.getElementById('framejaar2').style.display='none';
    document.getElementById('buttonjaar3').style.background='white';
    document.getElementById('buttonjaar3').style.color='#304ba3';
    document.getElementById('buttonjaar2').style.background='#304ba3';
    document.getElementById('buttonjaar2').style.color='white';
    document.getElementById('buttonjaar1').style.background='#304ba3';
    document.getElementById('buttonjaar1').style.color='white'
    }

function ShowInfoJaar1(){
    var select = document.getElementById("dropdownvakkenjaar1");
    var output = document.getElementById("vaktekstjaar1");
    
    select.onchange = function() {
      var selectedValue = select.options[select.selectedIndex].value;
      document.getElementById(selectedValue).style.display='block';
    }
}

function ShowInfoJaar2(){
    var select = document.getElementById("dropdownvakkenjaar2");
    var output = document.getElementById("vaktekstjaar2");
    
    select.onchange = function() {
      var selectedValue = select.options[select.selectedIndex].value;
      output.innerHTML = "You selected: " + selectedValue;
    }
}

function ShowInfoJaar3(){
    var select = document.getElementById("dropdownvakkenjaar3");
    var output = document.getElementById("vaktekstjaar3");
    
    select.onclick = function() {
      var selectedValue = select.options[select.selectedIndex].value;
      document.getElementById(selectedValue).style.display='block';
    }
}


