function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
    let currentNumber = startNumber
    const interval = window.setInterval(updateNumber, 17)
    function updateNumber() {
    if (currentNumber >= finalNumber) {
    clearInterval(interval)
    } else {
    let inc = Math.ceil(finalNumber / (duration / 17))
    if (currentNumber + inc > finalNumber) {
      currentNumber = finalNumber
      clearInterval(interval)
    } else {
      currentNumber += inc
    }
    callback(currentNumber)
    }
    }
    }
    
    document.addEventListener('DOMContentLoaded', function () {
    animateNumber(500, 10000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('accomplished').innerText = formattedNumber
    })
    
    animateNumber(500, 10000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('productlaunch').innerText = formattedNumber
    })
    
    animateNumber(200, 10000, 0, function (number) {
    const formattedNumber = number.toLocaleString()
    document.getElementById('Staff').innerText = formattedNumber
    })
    })