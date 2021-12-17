const ev = document.querySelectorAll('.eventetup')
ev.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })

})

function removeActiveClasses() {
    ev.forEach(panel => {
        panel.classList.remove('active')
    })
}