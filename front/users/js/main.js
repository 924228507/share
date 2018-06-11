$(document).ready(function () {
    $.post('/share/server/user_info.php', function(res) {
        const data = JSON.parse(res)
        $("#username").text(data.id);
        $("#descr").text(data.descr);
    });

    $.post('/share/server/user_description.php', function (res) {
        const data = JSON.parse(res)
        data.forEach(element => {
            const template =
            `
            <div class="listContent">${element.description}</div>       
            `
           let child = document.createElement('div')
           child.className = 'list'
           child.innerHTML = template
            const render_dom = document.querySelector('.main')
            render_dom.appendChild(child)
        });
    })
})