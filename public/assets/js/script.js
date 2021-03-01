var expanded = false;
function showCheckboxes() {
  var checkboxes = document.getElementById("box");
  if(!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  }else{
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function mostusedcategories() {
    allCategories.style.display = "none";
    mostUsed.style.display = "flex";
  }
  buttonCategories.addEventListener('click', function() {
    allcategoriesartikel()
  });

  function allcategories() {
    allCategories.style.display = "flex";
    mostUsed.style.display = "none";
  }
  buttonmUsed.addEventListener('click', function() {
    mostusedcategories()
  });