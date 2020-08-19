document.addEventListener('DOMContentLoaded', function (){
    document.querySelectorAll('.form-group').forEach(elem=>{
        elem.children[0].addEventListener('input', function(){
            if (this.value) {
                this.parentNode.querySelector('label').setAttribute('style', 'transform: translateY(-60px); opacity: 0.3')
            } else {
                this.parentNode.querySelector('label').setAttribute('style', 'transform: translateY(-30px); opacity: 1')
            }
        })
    })
})