require('./bootstrap');
import 'bootstrap-datepicker';



// jQuery(document).ready(function(){
//     alert('Funcionando');
    
// });

$('.datepicker').datepicker({
    language: "pt-br",
    //days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
    format: "dd/mm/yyyy"
});
