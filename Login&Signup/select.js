var citiesByDistrict = {
Colombo: ['Choose City','Athurugiriya','Mount Lavinia','Nugegoda','Rajagiriya'],
Gampaha: ['Choose City','Gampaha','Ja-Ela','Katunayake','Negombo','Wattala'],
Galle: ['Choose City','Hikkaduwa','Galle'],
Kandy: ['Choose City','Kandy','Peradeniya']
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByDistrict[value]) {
citiesOptions+="<option>"+citiesByDistrict[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function resetSelection() {
document.getElementById("districtSelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}