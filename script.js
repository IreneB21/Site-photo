/*const fs = require('fs');
const projectPath = "./images/projects";
const dsStore = ".DS_Store";

const projectsDirectoryContent = fs.readdirSync(projectPath, { withFileTypes: true });
console.log(projectsDirectoryContent);

const projects = projectsDirectoryContent.filter(truc => truc.isDirectory());
console.log(projects);

projectsDirectoryContent.forEach(dir => console.log(dir.name));
console.log("_____");
projects.forEach(dir => console.log(dir.name));
console.log("_____"); */


// au onload de la page projet créer un map (clef = chaque nom de projet ; valeur = tableau qui contient tous les paths des photos du projet)
// openImg : afficher une photo
// créer une variable globale 'currentProject' => quand j'openImg, je mets project dans currentProject
// autre variable globale avec indiceImg => je le set dans openImg
// openImg 

function openImg(path, project, indexImg) {
  document.getElementById("carrousel").style.display = 'flex';
}

function closeImg() {
  document.getElementsByClassName('preview-box')[0].style.display = 'none';
}















