
active() 

function active() {
    // const list = document.getElementById('category_list');
    // const items = list.getElementsByClassName('category_iteam');
    let items = document.querySelectorAll(".category_iteam")
    for (let i = 0; i < items.length; i++) {
        // console.log(items[i])
    items[i].addEventListener('click', function() {
        items[i].classList.add('category_iteam_active');
    });
    }
}

// function active() {
//     let navItems = document.querySelectorAll(".category_iteam")
//     navItems.forEach(navItem => {
//         navItem.addEventListener('click',() => {
            
//             navItems.forEach(navItem => {
//                 navItem.classList.remove('category_iteam_active')
//             })
//             navItem.classList.add('category_iteam_active')
//         })
//     })
// }