'use strict'

let photo = document.getElementById('imgPhoto');
let file =  document.getElementById('filimage');

photo.addEventListener('click' , () => {
  file.click();
});

file.addEventListener('change' , () => {
 
  if (file.files.length <= 0 ){
    return;
  }
 
  let reader = new FileReader();
  reader.onload = () => {
    photo.src = reader.result;0
  } 

  reader.readAsDataURL(file.files[0]);

});