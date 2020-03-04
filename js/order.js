function checkform(){
    if (document.orderform.quantity.value=="") {
        alert("Please enter the needed amount");
    }
    if (document.orderform.date.value=="") {
        alert("Please enter the date");
    }
    if (document.orderform.time.value=="") {
        alert("Please enter the time");
    }
}

var materialcat={
    glass: ["Frosted Glass", "Laminated Glass", "Float Glass"],
    sand: ["Concrete Sand", "Fill Sand", "Pit Sand"],
    cement: [" Portland Cement", "White  Portland Cement", "Calcium Cements"],
    gravel: ["Panda Gravel", "Fine Gravel", "River Gravel"],
    iron: ["TMT Steel Bars", "Steel Bars", "Stainless Steel Bars"]
}

var materialclr={
    glass: ["red", "blue", "tinted", "mirror"]
}

var materialthick={
    glass: ["5mm","10mm"],
    iron: ["1cm", "80mm", "50mm"]
}

function changecat(value){
    var catoption="";
    for(categoryID in materialcat[value]){
        catoption += "<option >" + materialcat[value][categoryID] + "</option>";
    }
    document.getElementById("category").innerHTML=catoption;

    var color="";
    for(categoryID in materialclr[value]){
        color += "<option>" + materialclr[value][categoryID] + "</option>";
    }
    document.getElementById("color").innerHTML=color;

    var thick="";
    for(categoryID in materialthick[value]){
        thick += "<option>" + materialthick[value][categoryID] + "</option>";
    }
    document.getElementById("thick").innerHTML=thick;
}