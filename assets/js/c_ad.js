const lokasi = location.href;
const itemnya  = document.querySelectorAll('a');
const pi = itemnya.length

for (let i = 0; i<pi; i++) {
    
    if(itemnya[i].href === lokasi){
        itemnya[i].className = "active";
    }
    
}