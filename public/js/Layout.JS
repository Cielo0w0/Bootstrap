 // =================================================== nav
 var navbar_toggler = document.querySelector('.navbar-toggler')
 var navbar_collapse = document.querySelector('.navbar-collapse')

 navbar_toggler.onclick = function () {
     if (navbar_collapse.classList.contains('show')) {
         navbar_toggler.innerHTML = `<i class="fas fa-bars"></i>`
     } else {
         navbar_toggler.innerHTML = `<i class="fas fa-times"></i>`
     }
 }



 // ================================================== 購物車
 // 品項
 var product = document.querySelectorAll('#product')
 // 加
 var add_btn = document.querySelectorAll('#add-btn')
 // input中的值
 var number_input = document.querySelectorAll('#number')
 // 減
 var sub_btn = document.querySelectorAll('#minus')
 // 單價
 var price = document.querySelectorAll('#price')

 // 數量
 var qty = document.querySelector('.total-number')
 // 小計
 var sub_total = document.querySelector('.amount')
 // 運費
 var shipping_fee = document.querySelector('.shipping-fee')
 // 運費門檻
 var ship_threshold = 500
 // 總計
 var total = document.querySelector('.total-amount')



 // =============================================== 一進入會先算 qty / sub_total / total
 var product_qty = 0
 var product_sub_total = 0
 var product_shipping_fee = 60
 // ------------------------------------------------ qty
 // 把在input裡的數字加總，並取為product_qty  |  方法 : product_qty一開始為0，再用迴圈去算加總
 number_input.forEach(function (ele) {
     product_qty = parseInt(ele.value) + product_qty
 })
 // 算完後塞入qty中顯示
 qty.innerHTML = product_qty
 // ------------------------------------------------ sub_total
 // 把在一開始的price加總，並取為product_sub_total   |  方法 : product_sub_total一開始為0，再用迴圈去算加總
 price.forEach(function (ele, i) {
     product_sub_total = parseFloat(ele.dataset.price) * parseInt(number_input[i].value) + product_sub_total
 })
 // 算完後塞入sub_total中顯示
 sub_total.innerHTML = '$' + product_sub_total
 // ===============================================按完+-會更新很hen多東西
 function updateCart() {
     product_qty = 0
     product_sub_total = 0
     // ----------------------------------------------------------------
     for (let i = 0; i < product.length; i++) {
         const element = product[i];
         // 單品小計變多
         price[i].innerHTML = '$' + number_input[i].value * price[i].dataset.price
         // 數量更新
         product_qty += parseInt(number_input[i].value)
         // 小計更新
         product_sub_total += number_input[i].value * price[i].dataset.price
     }
     // 顯示數量到畫面
     qty.innerHTML = product_qty
     // 顯示小計到畫面
     sub_total.innerHTML = '$' + product_sub_total
     // 運費計算*註1
     calcShipment()
     // 總計 : 小計加運費
     total.innerHTML = '$' + parseFloat(product_sub_total + product_shipping_fee)
 }
 // =================================================== + 按鈕
 add_btn.forEach(function (ele, i) {
     ele.addEventListener('click', function () {
         // ++  input中數字+1
         number_input[i].value = parseInt(number_input[i].value) + 1
         // 更新該更新的
         updateCart()
     })
 })
 // =================================================== - 按鈕
 sub_btn.forEach(function (ele, i) {
     ele.addEventListener('click', function () {
         if (number_input[i].value <= 1) {
             return
         } else {
             // input中數字-1
             number_input[i].value = parseInt(number_input[i].value) - 1
             // 更新該更新的
             updateCart()
         }
     })
 })
 // ===============================================input 讀取手動輸入值
 number_input.forEach(function (ele, i) {
     ele.addEventListener('change', function () {
         if (ele.value <= 1 || number_input[i].value == '') {
             alert('輸入數量不可少於1，請重新輸入')
             ele.value = 1
             return
         } else {
             updateCart()
         }
     })
     ele.addEventListener('keyup', function () {
         ele.value = ele.value.replace(/\D+/g, '')
     })
 })

 // ===============================================*註1
 function calcShipment() {
     if (product_sub_total >= ship_threshold) {
         product_shipping_fee = 0
     } else if (product_sub_total < ship_threshold) {
         product_shipping_fee = 60
     }
     shipping_fee.innerHTML = '$' + product_shipping_fee
 }
