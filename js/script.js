$(document).ready(()=> {
    $('nav a, #vejaMais').click(function(e){
        e.preventDefault();
    
        let id = $(this).attr('href')
    
        let altura = $(id).offset().top;
    
        let menuHeight = $('nav').innerHeight();
    
        $('html').animate({
            scrollTop: altura - menuHeight
        },1000);
    
    })
})




