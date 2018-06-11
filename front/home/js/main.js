$(document).ready(function () {
            $.post('/share/server/home.php', function (res) {
                const data = JSON.parse(res)
                data.forEach(element => {
                    const template =
                        `
                    
            <div class="listIcon">
                <img src="" alt="">
            </div>
            <div class="listID">${element.username}</div>
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