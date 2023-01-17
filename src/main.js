const routes = {
    '/': 'src/pages/index.html',
    '/about': 'src/pages/about.html',
    '/projects': 'src/pages/projects.html',
    '/contact': 'src/pages/contact.html'
  };
  
  const router = () => {
    const path = window.location.pathname;
    const page = routes[path];
    if(page){
      document.querySelector('#app').innerHTML = page;
    } else {
      document.querySelector('#app').innerHTML = '404 Page not found';
    }
  }
  
  window.addEventListener('load', router);