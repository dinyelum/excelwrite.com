<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' href='./assets/css/w3.css' >
    <script src="https://kit.fontawesome.com/906d05b5f6.js" crossorigin="anonymous"></script>
</head>
<body>
    <span id=full>Full </span>
    <div class=w3-container><a href="" style='text-decoration:none'>HomePage</a></div>
    <div class='w3-center w3-container' style='margin-top:15%'>
        <div class='pages' id=page1>
            <p class='w3-large'>What would you like to do today?</p>
            <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Sell Products</button>
            <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Store Products</button>
            <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Transport Products</button>
        </div>
        <div class='pages w3-hide' id=page2>
            <p class='w3-large'>Select a Product</p>
            <select name="product" id="product" class='w3-col m12 w3-select w3-round-xxlarge w3-border'>
                <option value=""></option>
                <option value="Yam">Yam</option>
                <option value="Rice">Rice</option>
                <option value="Cassava">Cassava</option>
            </select>
            <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Continue</button>
        </div>
        <div class='pages w3-hide'>
            <p class='w3-large'>Do you want to...</p>
            <div class=''>
                <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Sell to Us</button>
                <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Sell to other Buyers</button>
            </div>
        </div>
        <div id=sellpage>
            <div class='pages w3-hide'>
                <p style='text-align:left'><i class="fa-solid fa-backward w3-large"></i></p>
                <p class='w3-large'>Our rate for yam is:</p>
                <p><span class='w3-padding w3-green'>&#8358;200 / Kg</span></p>
            </div>
            <div class='pages w3-hide'>
                <p class='w3-xlarge'>Other Buyers</p>
                <div class='w3-container w3-row-padding w3-stretch'>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-user w3-jumbo"></i></p>
                        <p>&#8358;250 / Kg</p>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-building w3-jumbo"></i></p>
                        <p>&#8358;180 / Kg</p>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-user w3-jumbo"></i></p>
                        <p>&#8358;220 / Kg</p>
                    </div>
                </div>
            </div>
        </div>
        <div id=storepage>
            <div class='pages w3-hide'>
                <p class='w3-large'>Select Location</p>
                <select name="location" id="location" class='w3-col m12 w3-select w3-round-xxlarge w3-border'>
                    <option value=""></option>
                    <option value="Agbor">Agbor</option>
                    <option value="Effurun">Effurun</option>
                    <option value="Warri">Warri</option>
                </select>
                <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Continue</button>
            </div>
            <div class='pages w3-hide'>
                <p class='w3-xlarge'>Storage Facilities Near You</p>
                <div class='w3-container w3-row-padding w3-stretch'>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-building w3-jumbo"></i></p>
                        <p>ABC Corporation</p>
                        <p>&#8358;20 / Kg / day</p>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-building w3-jumbo"></i></p>
                        <p>123 Facilities</p>
                        <p>&#8358;30 / Kg / day</p>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4'>
                        <p><i class="fa-regular fa-building w3-jumbo"></i></p>
                        <p>ABC Storage</p>
                        <p>&#8358;15 / Kg / day</p>
                    </div>
                </div>
            </div>
        </div>
        <div id=transpage>
            <div class='pages w3-hide'>
                <p class='w3-large'>From</p>
                <select name="from" id="from" class='w3-col m12 w3-select w3-round-xxlarge w3-border'>
                    <option value=""></option>
                    <option value="Anambra">Anambra</option>
                    <option value="Delta">Delta</option>
                    <option value="Ondo">Ondo</option>
                </select>
                <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Continue</button>
            </div>
            <div class='pages w3-hide'>
                <p class='w3-large'>To</p>
                <select name="to" id="to" class='w3-col m12 w3-select w3-round-xxlarge w3-border'>
                    <option value=""></option>
                    <option value="Anambra">Anambra</option>
                    <option value="Delta">Delta</option>
                    <option value="Ondo">Ondo</option>
                </select>
                <button class='w3-button w3-green w3-round-xxlarge w3-col m12 w3-padding w3-section'>Continue</button>
            </div>
            <div class='pages w3-hide'>
                <p class='w3-xlarge'>Available Trucks / Vans</p>
                <div class='w3-container w3-row-padding w3-stretch'>
                    <div class='w3-card w3-padding w3-section w3-col m4 w3-row-padding'>
                        <div class='w3-col' style='width:30%'>
                            <p><i class="fa-solid fa-van-shuttle w3-xlarge"></i></p>
                        </div>
                        <div class='w3-col' style='width:40%'>
                            <p>Truck 1</p>
                            <p>Capacity: 200Kg</p>
                        </div>
                        <div class='w3-col' style='width:30%'>
                            <p>&#8358;200 / Kg</p>
                        </div>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4 w3-row-padding'>
                        <div class='w3-col' style='width:30%'>
                            <p><i class="fa-solid fa-truck w3-xlarge"></i></p>
                        </div>
                        <div class='w3-col' style='width:40%'>
                            <p>Truck 4</p>
                            <p>Capacity: 1000Kg</p>
                        </div>
                        <div class='w3-col' style='width:30%'>
                            <p>&#8358;100 / Kg</p>
                        </div>
                    </div>
                    <div class='w3-card w3-padding w3-section w3-col m4 w3-row-padding'>
                        <div class='w3-col' style='width:30%'>
                            <p><i class="fa-solid fa-van-shuttle w3-xlarge"></i></p>
                        </div>
                        <div class='w3-col' style='width:40%'>
                            <p>Truck 15</p>
                            <p>Capacity: 400Kg</p>
                        </div>
                        <div class='w3-col' style='width:30%'>
                            <p>&#8358;300 / Kg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var fullsc = document.getElementById('full');
        document.fullsc.requestFullscreen();
        var page1btns = document.querySelectorAll('#page1 button');
        var page2btn = document.querySelector('#page2 button');
        var pagesEl = document.querySelectorAll('.pages');
        var product = document.getElementById('product').value; 
        var products = {'Yam': 100, 'Rice': 200, 'Cassava':300};
        var actions = ['sell', 'store', 'transport'];
        var actionid, currentbtns, sellpage, sellicon, storepage, transpage, frombtn, tobtn;
        for(let i=0; i<page1btns.length; i++) {
            page1btns[i].addEventListener('click', function() {
                hideAlllPages();
                actionid = i;
                pagesEl[1].classList.remove('w3-hide');
            });
        }
        page2btn.addEventListener('click', function() {
            hideAlllPages();
            if(actions[actionid]=='sell') {
                pagesEl[2].classList.remove('w3-hide');
                currentbtns = pagesEl[2].querySelectorAll('button');
                sellpage = document.getElementById('sellpage');
                selldivs = sellpage.querySelectorAll('div');
                sellicon = sellpage.querySelector('i');
                for(let i=0; i<currentbtns.length; i++) {
                    currentbtns[i].addEventListener('click', function(){
                        hideAlllPages();
                        selldivs[i].classList.remove('w3-hide');
                    });
                }
                sellicon.addEventListener('click', function(){
                    hideAlllPages();
                    pagesEl[2].classList.remove('w3-hide');
                });
            } else if(actions[actionid]=='store') {
                storepage = document.querySelectorAll('#storepage>div');
                storepagebtn = storepage[0].getElementsByTagName('button')[0];
                storepage[0].classList.remove('w3-hide');
                storepagebtn.addEventListener('click', function() {
                    hideAlllPages();
                    storepage[1].classList.remove('w3-hide');
                });
            } else {
                transpage = document.querySelectorAll('#transpage>div');
                transpage[0].classList.remove('w3-hide');
                frombtn = transpage[0].getElementsByTagName('button')[0];
                tobtn = transpage[1].getElementsByTagName('button')[0];
                [frombtn, tobtn].forEach(function(item, ind) {
                    item.addEventListener('click', function() {
                        hideAlllPages();
                        transpage[ind+1].classList.remove('w3-hide');
                    });
                });
            }
        });

        function hideAlllPages() {
            for(let j=0; j<pagesEl.length; j++) {
                pagesEl[j].className += ' w3-hide';
            }
        }
    </script>
</body>
</html>