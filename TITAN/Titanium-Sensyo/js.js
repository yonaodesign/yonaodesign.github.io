(function () {
  const image = document.querySelectorAll('.img-wrap');

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > 0) {
        entry.target.classList.add('new-animation');
      } else {
        entry.target.classList.add('new-animationOLD');
      }
    });
  });

  Array.prototype.forEach.call(image, function (img) {
    observer.observe(img);
  });
})();

(function () {
    const div = document.querySelectorAll('.fejd');
  
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.intersectionRatio > 0) {
          entry.target.classList.add('fade-in');
        } else {
          entry.target.classList.remove('img-animationOLD');
        }
      });
    });
  
    Array.prototype.forEach.call(div, function (img) {
      observer.observe(img);
    });
  })();



  (() => {
    const sample = document.querySelectorAll('.sample');
    
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
          entry.target.classList.add('sample-animation');
        } else {
            observer.unobserve(entry.target);        }
      });
    });
    
    sample.forEach(img => {
      observer.observe(img);
    });
  })();