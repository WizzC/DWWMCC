
const infos = document.querySelector("#infos");


const FR_GES = document.querySelector("#FR-GES");
const FR_NAQ = document.querySelector("#FR-NAQ");
const FR_ARA = document.querySelector("#FR-ARA");
const FR_BFC = document.querySelector("#FR-BFC");
const FR_BRE = document.querySelector("#FR-BRE");
const FR_CVL = document.querySelector("#FR-CVL");
const FR_COR = document.querySelector("#FR-COR");
const FR_IDF = document.querySelector("#FR-IDF");
const FR_OCC = document.querySelector("#FR-OCC");
const FR_HDF = document.querySelector("#FR-HDF");
const FR_NOR = document.querySelector("#FR-NOR");
const FR_PDL = document.querySelector("#FR-PDL");
const FR_PAC = document.querySelector("#FR-PAC");

const dep = [FR_GES, FR_NAQ, FR_ARA, FR_BFC, FR_BRE, FR_CVL, FR_COR, FR_IDF, FR_OCC, FR_HDF, FR_NOR, FR_PDL, FR_PAC];

const france = [
    {nom: "Grand Est",population: 5550389,superficie: 57441,longitude: `48°35'56' Nord`,latitude: `7° 45' 36″ Est`,departements: `Ardennes (08) - Aube (10) - Marne (51) - Haute-Marne (52) - Meuse (55) - Moselle (57) - Collectivité européenne d'Alsace (67/68) - Vosges (88)`,},
    {nom: "Nouvelle-Aquitaine",population: 6033952,superficie: 84036,longitude: `44° 50' 12″ nord`,latitude: `0° 35' 20″ ouest`,departements: `Charente (16) - Charente-Maritime (17) - Corrèze (19) - Creuse (23) - Dordogne (24) - Gironde (33) - Landes (40) - Lot-et-Garonne (47) - Pyrénées-Atlantiques (64) - Deux-Sèvres (79) - Vienne (86) - Haute-Vienne (87)`,},
    {nom: "Auvergne-Rhône-Alpes",population: 8078652,superficie: 69711,longitude: `45° 44' 25″ nord`,latitude: `4° 49' 10″ est`,departements: `Ain (01)Allier (03)Ardèche (07)Cantal (15)Drôme (26)Isère (38)Loire (42)Haute-Loire (43)Puy-de-Dôme (63)Rhône (69D) Métropole de Lyon (69M) Savoie (73) Haute-Savoie (74)`,},
    {nom: "Bourgogne-Franche-Comté",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,} ,
    {nom: "Bretagne",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Centre-Val de Loire",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Corse",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Corse",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Île-de-France",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Occitanie",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Hauts-de-France",population: 6005000,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est`,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Normandie",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Pays de la Loire",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`,},
    {nom: "Provence-Alpes-Côte d'Azur",population: 600500,superficie: 31813,longitude: `49°55'14' Nord`,latitude: `2° 42' 11' Est `,departements: `Nord (59) - Aisne (02) - Oise (60) - Pas de Calais (62) - Somme (80)`},
]

for (let i = 0; i < dep.length; i++) {
    dep[i].addEventListener("click", function () {
        infos.innerHTML = "Nom : " + france[i].nom + "<br>" + "Longitude : " + france[i].longitude + "<br>"  + "Latitude : " + france[i].latitude + "<br>" + "Superficie : " +  france[i].superficie + "<br>" + "Population : " + france[i].population + "<br>" + "departements : " + france[i].departements;
    });
}

;