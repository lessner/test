//Ajax new Ecma
$.when($.get('peticion'))
    .then(function(r1, r2){
        r1 = r1[0];
        r2 = r2[0];
        console.log(r1.mensaje + ' ' + r2.nombre + 'lo q siga...');
    }). catch(function(err){
        console.log('error')
    });

    let fname = 'Lessner'; let lname = 'Garcia';
    console.log(`My name is ${fname} ${lname}`);