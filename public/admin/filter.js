let value = document.querySelectorAll(".fee")
let bon = document.querySelectorAll('.bonS')
let one = document.querySelector('#one')
let two = document.querySelector('#two')
let three = document.querySelector('#three')
let small = document.querySelector('#small')
let all = document.querySelector('#all')
let big = document.querySelector('#big')
let bigg = document.querySelector('#bigg')

let numberOne = parseFloat(one.innerHTML)
let numberTwo = parseFloat(two.innerHTML)
let numberThree = parseFloat(three.innerHTML)
let fee = [];

for (let i = 0; i < value.length; i++) {
    fee.push(parseFloat(value[i].innerHTML))
}

const displayAll = () => {
    all.addEventListener('click', () => {
        for (let i = 0; i < fee.length; i++) {
            bon[i].style.display = "block"
        }
    })
}
displayAll()
const displaySmall = () => {
    small.addEventListener('click', () => {
        for (let i = 0; i < fee.length; i++) {
            if (fee[i] >= numberOne && fee[i] <= numberTwo)
                bon[i].style.display = "block"
            else
                bon[i].style.display = "none"
        }
    })
}
displaySmall()
const displayBig = () => {
    big.addEventListener('click', () => {
        for (let i = 0; i < fee.length; i++) {
            if (fee[i] >= numberTwo && fee[i] <= numberThree)
                bon[i].style.display = "block"
            else
                bon[i].style.display = "none"
        }
    })
}
displayBig()
const displayBigg = () => {
    bigg.addEventListener('click', () => {
        for (let i = 0; i < fee.length; i++) {
            if (fee[i] > numberThree)
                bon[i].style.display = "block"
            else
                bon[i].style.display = "none"
        }
    })
}
displayBigg()
