function createError(message){
    let div = document.createElement("div");
    div.className = "error"
    div.innerHTML =
        "<div class='body'>" +
            "<span class='emphasized'>Error!&nbsp</span>" +
            "<span class='message'>"+message+"</span>"+
        "</div>"

    document.querySelector("#main-form").appendChild(div);
}