 const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green']

    function myFunction() {

    var color =  Math.floor(Math.random() * colors.length);

    document.body.style.backgroundColor = colors[color];

  }