<div class="show"></div>
<button onclick="generate()">Generate Promo Code</button>
<script>
    
    //Rarity
    // 1000
    // 500 -> 10% -> 0.5
    // 325 -> 15% -> 0.325
    // 100 -> 20% -> 0.1
    // 40 -> 25% -> 0.04
    // 20 -> 30% -> 0.02
    // 10 -> 35% -> 0.01
    // 5 -> 40% -> 0.005

    function generate() {
        var num = Math.floor(Math.random() * 1000) + 1
        var promo = "regular"
        if(num>=1 && num<=5){
            promo = 0.4
        }else if(num>=991 && num<=1000){
            promo = 0.35
        }else if((num>=6 && num<=15) || (num>=981 && num<=990)){
            promo = 0.3
        }else if((num>=16 && num<=35) || (num>=961 && num<=980)){
            promo = 0.25
        }else if((num>=36 && num<=85) || (num>=911 && num<=960)){
            promo = 0.2
        }else if((num>=86 && num<=410)){
            promo = 0.15
        }else{
            promo = 0.10
        }
        document.getElementsByClassName('show')[0].innerText = promo
    }
</script>