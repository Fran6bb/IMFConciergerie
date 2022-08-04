
var tabs = document.querySelectorAll('.tabs a')
for (var i = 0; i< tabs.length; i++){
    tabs[i].addEventListener('click', function(e){
        var li = this.parentNode
        var div = this.parentNode.parentNode.parentNode
        if(li.classList.contains('light')){
            return false
        }
        
        div.querySelector('.tabs .light').classList.remove('light')
        li.classList.add('light')
        div.querySelector('.content.light').classList.remove('light')
        div.querySelector(this.getAttribute('href')).classList.add('light')


    })
}

