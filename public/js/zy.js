const targets = document.querySelectorAll("[data-lazy]");

  const lazyLoad = target => {
    const io = new IntersectionObserver((entries,observer)=>{
      entries.forEach(entry=>{
        if(entry.isIntersecting){
            console.log("in user view!")
          const img = entry.target;
          const src = img.getAttribute('data-lazy');

          img.setAttribute('src',src);
          observer.disconnect();
        }else{
            console.log("not in user view!");
            
        }
      });
    });
    io.observe(target);

  }
  targets.forEach(lazyLoad);
