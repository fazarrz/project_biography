var side_active = document.getElementsByClassName('sidebar-menu');
var active = document.getElementsByClassName('active');

for (var i = 0; i < active.length; i++) {
    active[i].addEventListener('click', function(){
        var current = document.getElementsByClassName('active');
        current[0].className = current[0].className.replace('active','');
        this.className += 'active';
    })
    
}