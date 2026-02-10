let tab = [
    { id: "TEMP_01", type: "temperature", value: 22.5, status: "active" },
    { id: "HUM_01",  type: "humidity",    value: 45.2, status: "active" },
    { id: "PRES_01", type: "pressure",    value: 1013, status: "active" },
    { id: "LIGHT_01",type: "light",       value: 350,  status: "active" },
    { id: "CO2_01",  type: "co2",          value: 420,  status: "active" },
    { id: "TEMP_02", type : "temperature" , value : -5, status: "faulty"},
];


tab.map((element)=>{console.log(`id : ${element.id} etat: ${element.status}`)})
console.log("#######################################");
let criticalAlert = tab.filter((x)=> (x.type == "pollution" && x.value > 80 ) || x.status=="faulty" )

criticalAlert.map((x)=>console.log(x))

let tempTab = tab.filter((x)=> x.type = "temperature" && x.status != "faulty")
let tempMoy = tempTab.reduce((accum,element)=>accum + element.value,0)/ tempTab.length;
console.log(tempMoy);