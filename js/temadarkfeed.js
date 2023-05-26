
function toggleDarkMode() {
    var body = document.body;
  

    body.classList.toggle("dark-theme");
    sidebar.classList.toggle("dark-theme");
    if(sidebar.style.backgroundColor == 'black'){
      sidebar.style.backgroundColor = 'white';
      header.style.backgroundColor = 'white';
    }else{
      sidebar.style.backgroundColor = 'black';
      header.style.backgroundColor = 'black';
    }
    
}

  