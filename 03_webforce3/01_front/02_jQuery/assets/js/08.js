 $(function(){

    $('#contact').on('submit',function(e){
        e.preventDefault();

        $('#contact .is-invalid').removeClass('is-invalid');
        $('#contact .is-valid').removeClass('is-valid');

        const nom           = $('#nom');
        const prenom        = $('#prenom');
        const email         = $('#email');
        const tel           = $('#tel');
        const LesContacts   = $('#LesContacts');

        // console.log(LesContacts);

        if ( nom.val().length === 0) {
            nom.addClass('is-invalid');    
        }else {
            nom.addClass('is-valid');
        }
     

        // for(let i = 0; i < LesContacts.length; i++){

           
        // }



    });
 });