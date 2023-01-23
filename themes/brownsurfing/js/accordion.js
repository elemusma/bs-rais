let accordions = document.querySelectorAll(".accordion");
// SIMPLE ACCORDION
// for (let i = 0; i < accordions.length; ++i) {
//   accordions[i].addEventListener("click", function(){
//   (this).classList.toggle('open');
//   });
// }
function toggleAccordion() {
    accordionContent = this.querySelector('.accordion-content')
    accordionContentInner = this.querySelector('.accordion-content-inner')

    if (this.classList.contains('open')) {
        this.classList.remove('open')
        accordionContent.style.height = `0px`
        return;
    }

    accordions.forEach(function (item) {
        item.classList.remove('open');
    });

    this.classList.add('open');
    accordionContent.style.height = `${accordionContentInner.offsetHeight}px`

    console.log(accordionContentInner)
}

for (let i = 0; i < accordions.length; ++i) {
    accordions[i].addEventListener("click", toggleAccordion);
}