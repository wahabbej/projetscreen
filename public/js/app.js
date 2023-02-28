//worker
let recherche = document.querySelector("#recherche")
url.addEventListener("submit",(e)=>{
    e.preventDefault()
    let url = document.querySelector("#url").value
    const puppeteer = require("puppeteer");
    (async ()=>{
        const browser = await puppeteer.launch()
        const page = await browser.newPage()
        await  page.goto(url)
        await  page.screenshot({
            path:'images/image.png'
        })

        }
    ).catch(err=>{
        console.log(err.message)
    })
})