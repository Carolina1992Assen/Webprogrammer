function changeName() {

    document.title = ("Webprogramming (LIX019P05) - ".concat(document.title));
}

changeName();



function Art() {

    let article = document.createElement("article");

    let el  = document.getElementsByTagName("div")[2];
    el.appendChild(article);

    let h = document.createElement("H1");
    let t = document.createTextNode("Hello World");
    let nodeh = h.appendChild(t);
    h.append(nodeh);
    article.append(h);


    let para = document.createElement("p");
    let nodep = document.createTextNode("This is a new paragraph..");
    para.appendChild(nodep);
    article.appendChild(para);

    let x = document.getElementsByTagName("div")[2];
    x.appendChild(article);
}

Art();


function ChangeHref(){
    let x = document.getElementById("links");
    let v = x.getElementsByTagName("li");
    let b = v[2].firstChild;
    b.setAttribute("href", "http://google.com/");
    b.setAttribute("target", "_blank");
}

ChangeHref();


function colorRed() {

    let x = document.getElementsByClassName("nav-item");
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor= "red";
    }


}

colorRed();


