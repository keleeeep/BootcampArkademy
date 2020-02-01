function randomize(char) {
    if (typeof char != 'string' || char == null) {
         console.log('parameter yang dimasukan bukan string!');
    }else{
    var result = '';
    var charLength = char.length;
    for ( var i = 0; i < char.length; i++ ) {
       result += char.charAt(Math.floor(Math.random() * charLength));
    }
     console.log(result);   
    }
 }
 
 
 randomize('Rizky');