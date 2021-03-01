function pagebeasiswa() {
    seminar.style.display = "none";
    beasiswa.style.display = "flex";
  }
  ButtonBeasiswa.addEventListener('click', function() {
    pagebeasiswa()
  });

  function pageseminar() {
    seminar.style.display = "flex";
    beasiswa.style.display = "none";
  }
  ButtonSeminar.addEventListener('click', function() {
    pageseminar()
  });




  function buttonprev() {
    CarouselArticleFirst.style.display = "flex";
    CarouselArticleSecond.style.display = "none"; 
  }
  prev.addEventListener('click', function() {
    buttonprev()
  });

  function buttonnext() {
    CarouselArticleFirst.style.display = "none";
    CarouselArticleSecond.style.display = "flex"; 
  }
  next.addEventListener('click', function() {
    buttonnext()
  });