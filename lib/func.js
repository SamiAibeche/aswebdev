$(document).ready(function () {
        //Empêche l'envoi du formulaire par la touche "Enter"
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
              event.preventDefault();
              return false;
            }
         });
        //Empêche l'affichage du bouton d'envoi
        $("#btSend").hide();


        //Fonction qui permet dirige vers le corps de page concerné (jQuery)
        $(document).on("scroll", onScroll);
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            
            $('a').each(function () {
                $(this).removeClass('current');
            });
            $(this).addClass('current');
          
            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });
    //Smoothscroll
    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('.menu a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.menu a').removeClass("current");
                currLink.addClass("current");
                
            } else{
                currLink.removeClass("active");
            }
        });
    }
    /* Insert / Use WayPoint */

    /* Compte le nombre de caractères restant dans le <textarea> */
    function counterChar(val) {
        var lg = val.value.length;
        if (lg >= 501) {
          val.value = val.value.substring(0, 501);
        } else {
          ((val.value.length>=299)?$('#nbChar').text(500 - lg+" character left"):$('#nbChar').text(500 - lg+" characters left"));
        }
    }
    /* Retire le compteur, dans le cas où aucune lettre n'est comptée */
    function checkChar(val) {
        var lg = val.value.length;
        if (lg === 0) {
          $('#nbChar').text("");
        }
    }
    /* Verifie si la valeur du champ corresponds (2->30 lettres) */
    function validValue(champs){
        var id = champs.id;
        var pattStr = /^([a-zA-Z]{2,30})$/ig;
        var value = champs.value;
        if(value !== undefined){
            if(value.length!==0){
                var bool = pattStr.test(value);
                if(bool){
                    if(value!==""){
                        $("#"+id).removeClass( "inputBorder unvalid" ).addClass( "valid" );
                        $("#"+id+"+span").remove();
                        showBt();
                    } else {
                        $("#"+id).removeClass( "valid unvalid" ).addClass( "inputBorder" );
                        showBt();
                    }
                } else {
                    $("#btSend").hide();
                    $("#"+id).removeClass( "inputBorder valid" ).addClass( "unvalid" );
                }
            } else {
                $("#"+id).removeClass( "unvalid valid" ).addClass( "inputBorder " );
                $("#"+id+"+span").remove();
                showBt();
            }
        } else {
            return false;
        }
    }
    /* Verifie si la valeur du champ corresponds (0->30 lettres, : / .) */
    function validComp(champs){
        var id = champs.id;
        var pattStr = /^([a-zA-Z0-9:\/.]{0,30})$/ig;
        var value = champs.value;
        if(value !== undefined){
            var bool = pattStr.test(value);
            if(bool){
                if(value!==""){
                    $("#"+id).removeClass( "inputBorder unvalid" ).addClass( "valid" );
                    $("#"+id+"+span").remove();
                    showBt();
                } else {
                    $("#"+id).removeClass( "valid unvalid" ).addClass( "inputBorder" );
                    showBt();
                    $("#"+id+"+span").remove();
                }
            } else {
                $("#btSend").hide();
                $("#"+id).removeClass( "inputBorder valid" ).addClass( "unvalid" );
            }
        } else {
            return false;
        }
    }
    /* Verifie si la valeur du champ cne contient pas de caractère spéciaux */
    function validContent(champs){
        var id = champs.id;
        var pattStr = /^([^;|_<>]{2,500})$/;
        var value = champs.value;
        if(value !== undefined){
            if(value.length!==0){
                var bool = pattStr.test(value);
                if(bool){
                    if(value!==""){
                        $("#"+id).removeClass( "inputBorder unvalid" ).addClass( "valid" );
                        $("#"+id+"+span").remove();
                        showBt();
                    } else {
                        $("#"+id).removeClass( "valid unvalid" ).addClass( "inputBorder" );
                        showBt();
                    }
                } else {
                    $("#btSend").hide();
                    $("#"+id).removeClass( "inputBorder valid" ).addClass( "unvalid" );
                }
            } else {
                $("#"+id).removeClass( "unvalid valid" ).addClass( "inputBorder" );
                $("#"+id+"+span").remove();
                showBt();
            }
        } else {
            return false;
        }
    }
    /* Verifie si la valeur du champ corresponds à une adresse mail(...@...) */
    function validMail(champs){
        var id = champs.id;
        var pattStr = /^([A-Z0-9a-z._]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10})$/;
        var value = champs.value;
        if(value !== undefined){
            if(value.length!==0){
                var bool = pattStr.test(value);
                if(bool){
                    $("#"+id).removeClass( "inputBorder unvalid" ).addClass( "valid" );
                    showBt();
                    $("#"+id+"+span").remove();
                } else {
                    $("#btSend").hide();
                    $("#"+id).removeClass( "inputBorder valid" ).addClass( "unvalid" );
                }
            } else {
                $("#"+id).removeClass( "unvalid valid" ).addClass( "inputBorder" );
                $("#"+id+"+span").remove();
                showBt();
            }
        } else {
            return false;
        }
    }
    /* Affiche le bouton d'envoie si les conditions sont remplies */
    function showBt(){
        $name = $("#firstName");
        $lastname = $("#Lastname");
        $email = $("#email");
        $content = $("#content");
        $comp = $("#company");
        var nameVal = $($name).val();
        var lastVal = $($lastname).val();
        var emailVal = $($email).val();
        var contentVal = $($content).val();

        var lgName = nameVal.length;
        var lgLast = lastVal.length;
        var lgEmail = emailVal.length;
        var lgContent = contentVal.length;
        if(lgName !== 0 && lgLast !== 0 && lgEmail !== 0 && lgContent !== 0){
            if( ($($name).hasClass("valid") && $($lastname).hasClass("valid") && $($email).hasClass("valid") && $($content).hasClass("valid")) && $($comp).siblings().not('.unvalid')){
                $("#btSend").show();
            } else {
                $("#btSend").hide();
            }
        }  else {
            $("#btSend").hide();
        }
    }
    /* Affcihe un message d'erreur si une entrée a la class unvalide, sinon retire le message ou n'affiche aucun message */ 
    function checkValue(champs){
        var id = champs.id;
        var bool = $("#"+id).hasClass("unvalid");
        var value, lg;
        if(bool){
            $span = $("<span></span>");
            $span.id = "notification";
            switch (id){
                case "firstName":
                    value  = $("#firstName").val();
                    lg = value.length;
                    if(lg>30 || lg<2 ){
                        $("#"+id+"+span").remove();
                        $($span).text("Wrong length...");
                        $($span).addClass("notifFirst");
                        $("#"+id).after($span);
                    } else {
                        $("#"+id+"+span").remove();
                        $($span).text("Invalid characters...");
                        $($span).addClass("notifFirst");
                        $("#"+id).after($span);
                    }
                    break;
                case "Lastname":
                    value  = $("#Lastname").val();
                    lg = value.length;
                    if(lg>30 || lg<2){
                        $("#"+id+"+span").remove();
                        $($span).text("Wrong length...");
                        $($span).addClass("notifLast");
                        $("#"+id).after($span);
                    } else {
                        $("#"+id+"+span").remove();
                        $($span).text("Invalid characters...");
                        $($span).addClass("notifLast");
                        $("#"+id).after($span);
                    }
                    break;
                case "email":
                    $($span).text("Invalid Email...");
                    $($span).addClass("notifMail");
                    $("#"+id).after($span);
                    break;
                case "company":
                    value  = $("#company").val();
                    lg = value.length;
                    if(lg>30){
                        $("#"+id+"+span").remove();
                        $($span).text("Wrong length...");
                        $($span).addClass("notifComp");
                        $("#"+id).after($span);
                    } else {
                        $("#"+id+"+span").remove();
                        $($span).text("Invalid characters...");
                        $($span).addClass("notifComp");
                        $("#"+id).after($span);
                    }
                    break;
                case "content":
                    value  = $("#content").val();
                    lg = value.length;
                    if(lg<2){
                        $("#"+id+"+span").remove();
                        $($span).text("Wrong length...");
                        $($span).addClass("notifContent");
                        $("#"+id).after($span);
                    } else {
                        $("#"+id+"+span").remove();
                        $($span).text("Invalid characters...");
                        $($span).addClass("notifContent");
                        $("#"+id).after($span);
                    }
                    break;
            }
        } else {
            $("#"+id+"+span").remove();
        }
    }