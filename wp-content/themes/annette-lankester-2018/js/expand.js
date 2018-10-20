// Expander
const addClass = (element, element2, theClass) => {
  let x = element.className,
      y = element2.getAttribute('data-show');
  if (x.indexOf(theClass) == -1 && y == 'false') {
    x += ` ${theClass}`;
    element2.setAttribute('data-show', true);
    element2.setAttribute('aria-expanded', true);
  } else {
    x.replace(/\b rotate\b/, "");
    element2.setAttribute('data-show', false);
    element2.setAttribute('aria-expanded', false);
  }
}

const expand = () => {
  let getHandlers = document.querySelectorAll('[data-expander]'),
      handlers = [...getHandlers],
      getTargets = document.querySelectorAll('.expand'),
      targets = [...getTargets],
      getCollapsers = document.querySelectorAll('[data-links]'),
      collapsers = [...getCollapsers];
      
  for (let i = 0; i < handlers.length; i++){
    handlers[i].addEventListener('click', function(){addClass(targets[i], collapsers[i], 'rotate')}, false);
    handlers[i].addEventListener('keypress', function (e) {
      if(e.key == 'Spacebar' || e.key == 'Return'){
        addClass(targets[i], collapsers[i], 'rotate');
      }}, false);
  }
}

document.addEventListener('DOMContentLoaded', expand());