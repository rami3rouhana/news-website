import { New } from "./New.js";

window.onload = () =>{
    const url="http://localhost/news-website/backend/news.php";
    $.get(url,(data)=>{
        const articles = JSON.parse(data);
        let news = "";
        articles.map( article =>{
            news += New(article);
        })
        document.getElementById("news").innerHTML = news;
        const cols = Array.from(document.getElementsByClassName("col"));
        cols.map( col =>{
            col.addEventListener("click",(e)=>{
                window.open(`${e.currentTarget.firstElementChild.firstElementChild.nextElementSibling.firstElementChild.innerHTML}`, "_blank");
            })
        })
    })
}
