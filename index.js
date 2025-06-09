const selectNav = document.querySelector("select");
const hw1 = document.querySelector("#hw1-section");
const hw2 = document.querySelector("#hw2-section");

function hideAll(){
    hw1.style.display = "none";
    hw2.style.display = "none";
}

hideAll();

selectNav.addEventListener('change', function() {
    const selected = this.value;

    hideAll();
    if(selected == "HW1"){
        hw1.style.display = "block";
    }
    else if(selected == "HW2"){
        hw2.style.display = "block";
    }
});