const buttons = document.querySelectorAll('.button');
console.log(buttons);
const body = document.querySelector('body');
// const heading = document.getElementsByTagName('h1')[0]; // Get the first h1 element
console.log(body);

buttons.forEach(function(button) {
  console.log(button);
  button.addEventListener('click', function(e) {
    console.log(e);
    console.log(e.target);

    if (e.target.id === 'red') {
      body.style.backgroundColor = 'red';
      heading.style.color = '#fff';
    }
    if (e.target.id === 'black') {
      body.style.backgroundColor = 'black';
      heading.style.color = '#fff';
    }
    if (e.target.id === 'purple') {
      body.style.backgroundColor = 'purple';
      heading.style.color = '#fff';
    }
    if (e.target.id === 'blue') {
      body.style.backgroundColor = 'blue';
      heading.style.color = '#fff';
    }
    if (e.target.id === 'green') {
      body.style.backgroundColor = 'green';
      heading.style.color = 'black';
    }
  });
});
