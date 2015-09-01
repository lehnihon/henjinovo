(function() {
    $(document).ready(function(){
        $(".botaoa").click(function(){
            $(".tabelaa").toggle( "slow", function() {
                if($(".botaoa").hasClass("closed")){
                    $(".botaoa").attr('src',dirbase+"/images/minus.png");
                    $(".botaoa").removeClass( "closed" );
                }else{
                    $(".botaoa").attr('src',dirbase+"/images/plus.png");
                    $(".botaoa").addClass( "closed" );
                }
            });
        })
        $(".botaob").click(function(){
            $(".tabelab").toggle( "slow", function() {
                if($(".botaob").hasClass("closed")){
                    $(".botaob").attr('src',dirbase+"/images/minus.png");
                    $(".botaob").removeClass( "closed" );
                }else{
                    $(".botaob").attr('src',dirbase+"/images/plus.png");
                    $(".botaob").addClass( "closed" );
                }
            });
        })
        $(".botaoc").click(function(){
            $(".tabelac").toggle( "slow", function() {
                if($(".botaoc").hasClass("closed")){
                    $(".botaoc").attr('src',dirbase+"/images/minus.png");
                    $(".botaoc").removeClass( "closed" );
                }else{
                    $(".botaoc").attr('src',dirbase+"/images/plus.png");
                    $(".botaoc").addClass( "closed" );
                }
            });
        })
        $(".botaod").click(function(){
            $(".tabelad").toggle( "slow", function() {
                if($(".botaod").hasClass("closed")){
                    $(".botaod").attr('src',dirbase+"/images/minus.png");
                    $(".botaod").removeClass( "closed" );
                }else{
                    $(".botaod").attr('src',dirbase+"/images/plus.png");
                    $(".botaod").addClass( "closed" );
                }
            });
        })
        $(".botaoe").click(function(){
            $(".tabelae").toggle( "slow", function() {
                if($(".botaoe").hasClass("closed")){
                    $(".botaoe").attr('src',dirbase+"/images/minus.png");
                    $(".botaoe").removeClass( "closed" );
                }else{
                    $(".botaoe").attr('src',dirbase+"/images/plus.png");
                    $(".botaoe").addClass( "closed" );
                }
            });
        })
    
    });
})(jQuery);