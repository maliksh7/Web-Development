$(function() {
    $("#start").click(start);
    $("#bt1").click(fadein);
    $("#bt2").click(fadeout);
    $("#bt3").click(togglefade);
    $("#hide").click(hideme);
    $("#show").click(showme);
    $("#changeColor").click(changeColor);
    $("#btnslideup").click(slideup);
    $("#btnslidedown").click(slidedown);
    $("#btnslidetoggle").click(slidetoggle);
    $("#btnright").click(right);
    $("#btnleft").click(left);
    $("#btnaround").click(around);
    $("#chg").click(chgdivtext);

    function start() {
        $("p").html("Oky Good, Lets Get Started !!!");
    }

    function fadein() {
        $("#box").fadeIn(3000);
    }

    function fadeout() {
        $("#box").fadeOut(3000);
    }

    function togglefade() {
        $("#box").toggle(3000);
    }

    function hideme() {
        $("#box").hide(1000, function() {
            alert("[* ]This paragraph is now hidden!");
        });
    }
 
    function showme() {
        $("#box").show(1000, function() {
            alert("[* ]This paragraph is now shown!");
        });
    }

    function changeColor() {
        $("#box").css("background-color", "black");
    }

    function slideup() {
        $("#box").slideUp(3000);
    }

    function slidedown() {
        $("#box").slideDown(3000);
    }

    function slidetoggle() {
        $("#box").slideToggle(3000);
    }

    function right() {
        $("#box1").animate({
            left: 500,
            height: "300px",
            width: "300px",
            opacity: "0.5"
        });
    }

    function left() {
        $("#box1").animate({
            left: 0,
            height: "100px",
            width: "100px",
            opacity: "1"
        });
    }

    function around() {
        // var box = $("#box1");
        $("#box1").animate({ left: 300 });
        $("#box1").animate({ top: 300 });
        $("#box1").animate({ left: 0 });
        $("#box1").animate({ top: 0 });
    }

    function chgdivtext() {
    	alert("")
        $("p#pp").load('test.txt', function() {
            alert("Load was performed.");
    }        
        });
        
});