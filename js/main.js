(function(){
    var words = [
        "رؤيتنا",
        "رسالتنا"
    ],
    i=0;
    setInterval(function(){
        $('#words').fadeOut(function(){
            $(this).html(words[(i = (i + 1) % words.length)]).fadeIn();
        });
    },10000 );
})();

(function(){
    var paragraph = [
        "أن تصبح مدرسة النخبة الخاصة الأولى على <br> .مستوى ولاية الجلفة",
        "تقديم خدمة تعليمية عالية الجودة من خلال استخدام <br> التكنولوجيا الحديثةفي بيئة ثقافية أصيلة منسجمة <br> مع عاداتنا وتقاليدنا."
    ],
    i=0;
    setInterval(function(){
        $('#paragraph').fadeOut(function(){
            $(this).html(paragraph[(i = (i + 1) % paragraph.length)]).fadeIn();
        });
    },10000 );
})();

let image = document.getElementById('image');
let images = ['../images/2.jpg','../images/3.jpg','../images/4.jpg'];
setInterval(function(){
    let random = Math.floor(Math.random() * 3);
    image.src = images[random];
},3000);

// three
function myFunction(){
    let a = document.getElementById("myP");
    if(a.style.display ==="none"){
        a.style.display = "block";
    } else {
        a.style.display = "none";
    }
    
} 



function myFunction1(){
    let b = document.getElementById("myP1");
    if(b.style.display ==="none"){
        b.style.display = "block";
    } else {
        b.style.display = "none";
    }
}


function myFunction2(){
    let c = document.getElementById("myP2");
    if(c.style.display ==="none"){
        c.style.display = "block";
    } else {
        c.style.display = "none";
    }
}


function myFunction3(){
    let d = document.getElementById("myP3");
    if(d.style.display ==="none"){
        d.style.display = "block";
    } else {
        d.style.display = "none";
    }
}


function myFunction4(){
    let d = document.getElementById("myP4");
    if(d.style.display ==="none"){
        d.style.display = "block";
    } else {
        d.style.display = "none";
    }
}

