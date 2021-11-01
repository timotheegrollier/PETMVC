newArticle = document.querySelector('.new_article')
articleForm = document.getElementById('new_article_form')

if (newArticle) {
    newArticle.addEventListener('click', () => {
        newArticle.style.display = 'none'
        articleForm.style.display = 'flex'
    })

}

// Burger menu

burgerIcon = document.querySelector('.burgerBlock')
mobileMenu = document.querySelector('.mobileMenu')

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.add('animBurger')
    mobileMenu.classList.add('menuAnim')

})